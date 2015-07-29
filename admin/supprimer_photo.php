<?php 
require_once('class/class.php');
$id = $_GET['id'];
$liste = $med->select_photo($id);
foreach ($liste as $row) {
	$img = $row["nom"];
}

$file="files/".$img;
unlink($file);

$med->supprimer_photo($id);
$link='liste_photo.php?message=delete';
$user->location($link);

?>