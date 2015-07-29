<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>PERFECT IMMOBILIER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!------ Light Box ------>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/ios-orientationchange-fix.js"></script> 
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!------ Eng Light Box ------>	
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
   <div class="about-banner">
      <div class="wrap">
		   <div class="cssmenu">
				<ul>
				   <li ><a href="index.php"><span>Accueil</span></a></li>
				   <li><a href="gallerie.php"><span>Gallerie </span></a></li>
				    <li class="active" ><a href="projetc.php"><span>Projets</span></a></li>
				    <li ><a href="contact.php"><span>Contact</span></a></li>
				 	<div class="clear"></div>
				 </ul>
	          </div>
			  <div class="about-banner">
      
	  
   </div>
			  
	  </div>
	  
   </div>
   <div class="about-bannerx">
      <div class="wrap">
		   <div class="cssmenu">
				<ul>
				   <li ><a href="projetc.php"><span>Projet en cours</span></a></li>
				   <li><a href="projetr.php"><span>Projet realiser </span></a></li>
				    <li class="active" ><a href="projetf.php"><span>Projets futur</span></a></li>
				  
				 	<div class="clear"></div>
				 </ul>
	          </div>
			  <div class="about-banner">
      
	  
   </div>
			  
	  </div>
	  
   </div>
		<!------End Slider ------------>
  <div class="main">
  
  <br>
	 <div class="wrap">
	 
		<div class="products">
			 <div class="top-box">
			 <center>

</center>
				<center><h2>Projet en cours</h2>
				<hr><br><br><br><br>
				<?php
           include('config.php');                     
      $sql="select * from projet ORDER BY id_projet DESC";
			$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
			$rows = mysql_num_rows($result);


                    while($donnees=mysql_fetch_array($result)){
								
					   $id_projet=$donnees["id_projet"];
                       $type=$donnees["type"];
                       $des=$donnees["description"];
                       $titre=$donnees["titre"];
                       $img=$donnees["img"];
                     
                               
						?>
		    <div class="section group">
			
				
				<div style="float:left;">
				<div style="width:220px; height:190;">
					<a href="admin/afiche/<?php echo $img; ?>" class="swipebox" title="Image Title"> <img src="admin/afiche/<?php echo $img; ?>" alt=""><span class="zoom-icon"></span> </a>
					</div> 
					  <div class="list-box">
                          	<h5><?php echo $titre; ?></h5>
                	<div style="width:200px; height:150;">
							<p class="txt2"><?php echo htmlentities($des);  ?></div>
                       </div>
					   <div class="more">
                         <a href="aff_projet.php?d=<?php echo $id_projet;?> " class="btn btn-primary btn1">Voir plus</a>
                       </div>
					  
				</div>
				<?php }?>
				
				<div class="clear"></div>
			</div>
			 
		</div>
		<br><br><br><br><br>
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

    	
    	
            