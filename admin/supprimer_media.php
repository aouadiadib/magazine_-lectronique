<?php 
require_once('class/class.php');
$id = $_GET['id'];
$med->supprimer_media($id);
$link='liste_media.php?message=delete';
$user->location($link);

?>