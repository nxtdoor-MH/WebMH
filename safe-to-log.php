	 <?php
if ($_POST){

$name = $_POST['name'];
$content = $_POST['commentContent'];
$handle = fopen("comments.html","a");
fwrite ($handle,"<b>" . $name . "</b></br>" . $content . "</br>");
fclose ($handle);}

?>