<?php 


require_once("DataBase.php");
require_once("user.php");
require_once("ctrl.php");
require_once("journaliste.php");
require_once("media.php");
require_once("article.php");
require_once("pub.php");


  $user = new user();
  $jour = new journaliste();
  $med = new Media();
  $art = new Article();
  $pub = new Pub();
  $controle = new ctrl();
  $db= new Database(); 



?>