<?php 
require_once('class/class.php');
$id = $_GET['id'];

$pub->supprimer_pub($id);
$link='liste_pub.php?message=delete';
$user->location($link);

?>