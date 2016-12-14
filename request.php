<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$messages=array();
$dat=$bdd->query("SELECT * FROM chat ORDER BY id DESC");
while ($recup=$dat->fetch())
{
	$messages[]=$recup;
}
foreach ($messages as $msg) 
{
	?>
	<h4 class='text-info'><?= $msg['name'] ?></h4>
	<p><?=  $msg['message'] ?></p>
	<hr>
	<?php
}
