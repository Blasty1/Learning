@extends('layout')
@section('content')
<div id="wrapper3">
	<div id="portfolio" class="container" style="padding-bottom: unset;">
		<div class="title">
			<h2>{{$Article->ArticleName}}
				@if (($Article->user_id == $WhoSee->id) || ($WhoSee->User_permess == 'admin'))
						<a href="/{{$Article->id}}/edit"><img src="/images/img07.png" alt="" class="image-spirit" /></a>			
						@if ($Article->Approved == 'No' and $WhoSee->User_permess == 'admin')
							<a href="/approve/{{$Article->id}}"><img src="/images/img09.png" alt="" class="image-spirit" /></a>			
						@endif
						<a href="/{{$Article->id}}/delete"><img src="/images/img08.png" alt="" class="image-spirit" /></a>
				@endif
				</h2>
			</div>
			<p id="textnormal"><?php echo str_replace("\n","<br>",$TextArticle); ?></p>
	<div id='written_by'>
	<p>Written by: {{$Author}}</p>

</div>
<p id="written_by" style="text-align:left">Commenti:</p>
	
<div id="space-comment" class="container" style="padding:2em 0em">
	@for ($i=0;$i<count($autore);$i++)
	<p>{{$autore[$i]}} scrive : {{$comment[$i]->body}}</p>
	<p id="written_by">{{$comment[$i]->created_at}}</p>
	@endfor
	</div>
<div class="content">
<form method="post" action="/articles/{{$Article->id}}">
				@csrf
				
				<div class="row half">
					<div class="6u">
					@error('body')
						<div id='error'>{{$message}}
					@enderror
						<textarea name="body" style="padding: 0.6em;" id="body" placeholder="Write Your Comment"></textarea>
					</div>	
				</div>
			<div class="row">
					<div class="12u"> <Button type="submit" style="margin-top: 0;margin-left: 25em" class="button">Invia</div>
			</div>
				</div>
			</form>
</div>	
</div>

@endsection
