<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	//form per creare un articolo
	public function create(){
		return view('articles.create_article');
	}
	
	public function edit($id){
		$article=\App\Article::find($id);
		//mostro l'articolo e i campi da modificare
		return view('articles.edit',[
			'Article' => $article,
			'TextArticle' => $this->read_article($article->created_at)
		]);
	}

	public function update($id){
		
		//Trovo l'articolo che mi interessa 
		$update_article=\App\Article::find($id);
		
		//faccio gli update
		$update_article->update([
			'ArticleName' => request('ArticleName'),
			'ArticlePreface' => request('ArticlePreface'),
			'ArticlePathImage' => request('ArticlePathImage'),
		]);
		
		//se il body viene modificato allora modifichiamo il file
		if(request('ArticlePathFileText')){
			//modifichiamo il file
		 	$this->write_file(request('ArticlePathFileText'),$update_article->created_at);
		}
		
		//mostro il nuovo articolo modificato
		return redirect('articles/'.$update_article->id);
	}
	
	public function delete($id){
		$article_tod=\App\Article::find($id);
		$article_tod->delete();
		
		//se il file non è stato eliminato si ritorna al file stesso
		if(!$this->delete_file($article_tod->created_at)){
			return redirect('/articles/'.$id);
		}
		return redirect(route('all_articles'));
		
	}
	//inviamo al db le informazioni
	public function store(Request $request){
		  $validatedData = $request->validate([
        'ArticleName' => 'required|unique:articles|max:255',
        'ArticlePreface' => 'required|max:150',
        'ArticlePathImage' => 'required',
        'ArticlePathFileText' => 'required',
    ]);	
		$date_article=new \App\Article([
		'ArticleName' => request('ArticleName'),
		'ArticlePreface' => request('ArticlePreface'),
		'ArticlePathImage' => request('ArticlePathImage'),
		'ArticlePathFileText' => $this->write_file(request('ArticlePathFileText')),
		'user_id' => \Auth::user()->id
		]);
		
		$date_article->save();
		return redirect('articles/'.$date_article->id);
	}

	//Mostro l'articolo singolo
	public function view_article($id){
		$article=\App\Article::find($id);
		
		//otteniamo i commenti dell'articolo
		$comments=\App\Article::find($id)->comments;
		
		//tutti i commenti
		$ops=\App\Comment::all();
		
		//otteniamo l'autore del commento
		foreach($ops as $comment){
		
		//se il commento è del post allora consideriamo l'autore e lo salviamo in un array
		if($comment->article_id == $id){
			$autore[]=$comment->author->name;
		}
		
		}
		
		//ritorniamo l'autore del commento e il commento stesso
		return view('articles.single_article',[
			"Article" => $article,
			"TextArticle" => $this->read_article($article->created_at),
			"Author" => $article->author->name,
			"WhoSee" => \Auth::user(),
			"autore" => $autore,
			"comment" => $comments
		]);
	}

	//Mostro tutti gli articoli approvati
	public function all_articles(){
		return $this->show('Si');
	}
	
	//Mostro tutti gli articoli non approvati
	public function to_approve(){
		return $this->show('No');
	}
	
//approvo gli articoli per renderli visibili
	public function approved($id){
		//cerco l'articolo
		$article=\App\Article::find($id);
		
		$article->update([
			'Approved' => 'Si'
		]);
		
		return redirect(route('all_articles'));
		
	}
	
/************************ FUNZIONI CHE VENGONO RICHIAMATE ******************************************/

	// ritorna gli che articoli ha scritto un account
	static function my_articles(){
		$count= \App\Article::where('user_id',\Auth::user()->id);
		return $count;
	}
	
	
	//Creo la path per il file
	//Se id_article è nullo allora la path viene creata.
	public function path_file($created_at=null){
		
		$path=(!$created_at) ?  'texts/Article'.(str_replace(" ","_",now())).'.text':	'texts/Article'.(str_replace(" ","_",$created_at)).'.text';
	
		//ritorna la path, cosi da salvarla nel database
		return $path;
			
	}
	
	public function delete_file($created_at){
		if(!unlink($this->path_file($created_at))){
			return false;	
		}
		return true;
	}
	
	public function write_file($txt,$created_at=null){
		//otteniamo la path
		$path=$this->path_file($created_at);
		
		//Crea il file
		$file=fopen($path,"w+");		
		
		//Sovrascrive il file
		fwrite($file,$txt);	

		//chiudiamo il file
		fclose($file);
		
		return $path;
	}
	
	public function read_article($created_at){
		//Ottengo la path del file da aprire
		$path=$this->path_file($created_at);
		
		//apro il file in modalità lettura
		$file=fopen($path,"r");
		
		//ottengo il contenuto e lo ritorno
		return ($file) ? fread($file, filesize($path)) : "Errore";
		
	}
	
	
	
	
	//ritorna tutti gli articoli
    public function show($Approved){
	    	$articles=\App\Article::where('Approved',$Approved)->orderBy('created_at','desc')->limit(16)->get();
			$i=0; //indice degli articoli per regolare le righe
			foreach($articles as $al){
				if(++$i==5)
				{
		    		$i=1; //finisce la riga e allora riprendiamo
		    	}
				
			//nel caso della prima riga deve aggiungere clear:left per un giusto layout	
			if($i==1) {
		
			$html_article[]='    
		   		<div class="column'.$i.'" style="padding:1em 0em;clear:left;">
				<div class="box"> <a href="#"><img src="'.$al->ArticlePathImage.'" alt="" class="image image-full" /></a>
				<h3>'. $al->ArticleName .'</h3>
						<p>'.$al->ArticlePreface.'</p>
					<a href="articles/'. $al->id .'" class="button">Learn More</a> </div>
				</div>';
			}else{
				$html_article[]='    
		   		<div class="column'.$i.'" style="padding:1em 0em;">
				<div class="box"> <a href="#"><img src="' .$al->ArticlePathImage . '" alt="" class="image image-full" /></a>
				<h3>'. $al->ArticleName .'</h3>
						<p>'.$al->ArticlePreface.'</p>
					<a href="articles/'. $al->id .'" class="button">Learn More</a> </div>
				</div>';
			}
					
			}	
		return view('articles.all_articles',[
		'Articles' => $html_article ?? ['<p id="welcome">Non ci sono articoli</p>']
		]);
	}
	
	
}
