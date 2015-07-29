<?php 
require_once('class/class.php');
$id = $_GET['id'];


$med->supprimer_video($id);
$link='liste_video.php?message=delete';
$user->location($link);

?>