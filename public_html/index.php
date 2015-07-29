

<!DOCTYPE HTML>
<html>
<head>
<title>PERFECT IMMOBILIER</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">	
  <div class="wrap"> 
	<div class="header-top">
		 <div class="logo">
<div class="picture"><img src="images/sigle_animer.gif" height="120" width="190" ></div><div class="titre"><h1><a href="index.php">&nbsp;&nbsp;Perfect Immobilier</a></h1></div>
		 </div>
	    
		 <div class="clear"></div> 
	   </div>
   </div>	
</div>
      <!------ Slider ------------>
   <div class="banner">
      <div class="wrap">
		   <div class="cssmenu">
				<ul>
				   <li class="active"><a href="index.php"><span>Accueil</span></a></li>
				   <li><a href="gallerie.php"><span>Gallerie </span></a></li>
				    <li><a href="projetc.php"><span>Projets</span></a></li>
				    <li class="last"><a href="contact.php"><span>Contact</span></a></li>
				 	<div class="clear"></div>
				 </ul>
				 
	          </div>
	  	   <div class="slider">
		   <div id="slider" class="nivoSlider">
	 		<?php
include('config.php');			
$sqlT = "select * from slide order by id_slide desc";
$reqT = mysql_query( $sqlT) or die( mysql_error() ) ;
  while($donnees=mysql_fetch_array($reqT)){
$img=$donnees["img"];

echo " <img src='images/$img'/>";
}
			
			?>
	            
				
	               
	            

	              	              
				  </div>
	          </div>
	        </div>
	    </div>
   </div>
		<!------End Slider ------------>
  <div class="main">
	 <div class="wrap">
		<div class="content-top">
			 <div class="top-box">
				<h2>Presentation de la societé </h2>
				<hr>
				<p>
				
				« Perfect » est une société de promotion immobilière toujours à la recherche de nouvelles idées. Attentive aux exigences modernes, elle offre de l'immobilier de haut standing à des prix compétitifs. Elle est gérée par des compétences qualifiées dans le domaine du bâtiment. A travers une sélection des sites, une conception réfléchie et une qualité du produit, Perfect a non seulement pour objectif d'offrir un espace d'habitation, une qualité de vie et l'épanouissement des futurs propriétaires. De ce fait, le travail est assuré par une équipe sérieuse de professionnels compétents pour répondre, au mieux, à vos perspectives.
				</p>
				</div>
		    
				<div class="clear"></div>
			</div>
		</div>
		<div class="content-bottom">
			 <div class="top-box">
				<h2>Qualité de la réalisation</h2>
				<hr>
				<p>Dans notre quête de l'excellence, nous avons recours à des entreprises compétentes et de grande expérience. Nous optons pour des matériaux et des équipements de qualité qui répondent au standing que nous nous sommes imposés.
</p>
				</div>
				<br><br>
	<div class="top-box">
				<h2>Qualité du suivi</h2>
				<hr>
				<p>une équipe polyvalente composée d'ingénieurs, d'architectes et de cadres de direction se fixant pour mission d'assurer le bon déroulement des travaux et le Service après vente.
</p>
				</div>	   
				
				<div class="clear"></div>
			</div>
		</div>
	
		</div>
	   </div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="footer-text">
				<h2>Perfect Imobilier</h2>
				<p>Société d'études architecturales 65, Avenue H.Bourguiba App7 2émé étage Nlle Ariana</p>
				<ul class="follow_icon">
					<li><a href="https://www.facebook.com/pages/Perfect-immobili%C3%A8re/369919989702156?fref=ts" target="blank" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pin.png" alt=""></a></li>
				</ul>
				<div class="copy">
					<p> © 2014 tous les droits reservé | TuniSoft</p>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>

    	
    	
            