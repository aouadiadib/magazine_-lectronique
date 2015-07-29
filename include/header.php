<?php require("class/class.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actu</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<!-- Font Awesome  -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Web Font  -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"> A C T U</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Article <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="type_article.php?type=politique">Politique</a></li>
                
                <li class="divider"></li>
               <li><a href="type_article.php?type=sport">Sport</a></li>
               <li class="divider"></li>
                
               <li><a href="type_article.php?type=culture">culture</a></li>
                <li class="divider"></li>
               <li><a href="type_article.php?type=technologie">Technologie</a></li>
          
               
            </ul>
         </li>
        <li><a href="photo.php">Photo</a></li>
        <li><a href="video.php">Video</a></li>
         <li><a href="international.php">Internationale</a></li>
         <li><a href="newslettre.php">NewsLettre</a></li>
      </ul>
    </div>
  </div>
</nav>
