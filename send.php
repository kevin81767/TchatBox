<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=ajax', 'root', 'kondor');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

if(!empty($_POST['name']) AND !empty($_POST['message']))
{
	$name=$_POST['name'];
	$message=$_POST['message'];
	$db->exec("INSERT INTO chat (name,message) VALUES('$name','$message')");
	echo "<div class='alert alert-success'>Message sent</div>";

}
else
{
	echo "<div class='alert alert-danger'>Complete all field. </div>";
}
?>