
<html>
<h1>Aprendo questo file hai permesso il commit</h1>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<p>Inserisci il nome del nuovo file: <input type="text" name="new_file" />
<input type="submit" /></p>
</form>
<?php commit_all(); ?>
<p>Ecco l esito ottenuto:<?php echo `git status` ?> </p>
<p>Ricordati di pushare: git push -u origin master</p>

<?php
function commit_all(){

$name_file=$_POST['new_file'];
$status_git=`git status`; #otteniamo i file da modificare
$token=explode(" ",$status_git);#dividiamo l'enorme stringa in pezzi
foreach($token as $i){
    $position_pt=strpos($i,".php") ? strpos($i,".php") : (strpos($i,".txt") ? strpos($i,".txt") : false);
    if($position_pt){
        $name_f=substr($i,0,$position_pt+4); #otteniamo il nome del singolo file
        $add_git=shell_exec("sudo git add $name_f"); #add
        $commit=shell_exec("sudo git commit -m 'Aggiornato' $name_f"); #commit
       }

}
if($name_file){
    $add_git=shell_exec("sudo git add $name_file");
    }
}

?>
