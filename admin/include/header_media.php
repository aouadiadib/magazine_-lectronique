<!DOCTYPE html>
<?php 
require_once('class/class.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actu</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
.gal_pic{

      width: 100%;
      height: 170px;
      margin-top:20px;
  }
  .links{
  	margin-top: 20px;
  }
    </style>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php 

	session_name('SESSION3');
		session_start();
		$login = $_SESSION['l']  ;
	
	$liste = $med->select_media_login($login);
	foreach ($liste as  $row) {
	 	$id = $row["id_media"];
	 	$nom = $row["nom"];
	 	$prenom = $row["prenom"];
	 	
	 	$login = $row["login"];
	 } 
		?>
				<a class="navbar-brand" href="accueil_admin.php"><span><strong>Responsable Media</strong></span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><strong> <?php echo $login; ?></strong> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="changer_pass_media.php"><span class="glyphicon glyphicon-cog"></span> Changer mot de passe</a></li>
							<li><a href="class/logout.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="accueil_media.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			
		<li><a href="ajouter_photo.php"><span class="glyphicon glyphicon-plus"></span> Ajouter  Photo</a></li>
		
		<li><a href="liste_photo.php"><span class="glyphicon glyphicon-picture"></span> Liste  Photo</a></li>
		<li><a href="ajouter_video.php"><span class="glyphicon glyphicon-plus"></span> Ajouter  Video</a></li>
		
		<li><a href="liste_video.php"><span class="glyphicon glyphicon-facetime-video"></span> Liste  Video</a></li>
		
		
		
			
			<li><a href="class/logout.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
			
			
			</ul>
		</div><!--/.sidebar-->