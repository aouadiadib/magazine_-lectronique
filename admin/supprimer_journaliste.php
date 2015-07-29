<?php 
require_once('class/class.php');
$id = $_GET['id'];
$jour->supprimer_journaliste($id);
$link='liste_journaliste.php?message=delete';
$user->location($link);

?>