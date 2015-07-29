<?php 
require_once('class/class.php');
$id = $_GET['id'];
$liste = $art->select_article($id);
foreach ($liste as $row) {
	$img = $row["img"];
}

$file="files/".$img;
unlink($file);

$art->supprimer_article($id);
$link='liste_article.php?message=delete';
$user->location($link);

?>