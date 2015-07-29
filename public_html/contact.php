<!DOCTYPE HTML>
<html>
<head>
<title>PERFECT IMMOBILIER</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				   <li ><a href="gallerie.php"><span>Gallerie </span></a></li>
				    <li><a href="projetc.php"><span>Projets</span></a></li>
				    <li class="active"><a href="contact.php"><span>Contact</span></a></li>
				 	<div class="clear"></div>
				 </ul>
	          </div>
	  </div>
   </div>
		<!------End Slider ------------>
 
  <div class="main">
	 <div class="wrap">
		<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact</h3><br><br>
					    <form method="post" action="#">
						  					    	<?php 
						  
						  include ('config.php');
						  
						  
if (( isset ($_POST['entreprise'])) || (isset ($_POST['nom'])) || (isset ($_POST['adresse'])) || (isset ($_POST['tel']))|| (isset ($_POST['email']))|| (isset ($_POST['commentaire']))  ){

if (( empty ($_POST['entreprise'])) || (empty ($_POST['nom'])) || (empty ($_POST['adresse'])) || (empty ($_POST['tel']))|| (empty ($_POST['email']))|| (empty ($_POST['commentaire']))  ){
echo "<font color='red'><b>Veuillez remplir tous les champs </b></font><br><br><br>";


} else {
$entreprise=$_POST["entreprise"];
$nom=$_POST["nom"];   
$adresse=$_POST["adresse"];
$tel=$_POST["tel"]; 
$email=$_POST["email"];
$comm=$_POST["commentaire"];
$commentaire=mysql_real_escape_string($comm);

$x= strlen($tel);

 if (!is_numeric($_POST['tel']) || ($x!=8) ){

echo "<font color='red'>Veuillez saisir votre numéro de teléphone correctement </b></font><br>";

} 

if (!preg_match("#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#", $email)) 
{ 
echo  "<font color='red'>Veuillez saisir votre adresse mail correctement </b></font><br><br>";

} 
if((is_numeric($_POST['tel']) && ($x=8))&& (preg_match("#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#", $email))){



$sql = "insert into contact values ('','$entreprise','$nom','$adresse','$tel','$email','".date("Y-m-d")."','$commentaire') ";
$req = mysql_query( $sql) or die( mysql_error() ) ;

if ($req){
 echo "
                    <script>
                   location.replace('suc_contact.php');
                   </script>
                     ";

} 

    
    
    }
}}

?>
						 
							<div>
						    	<span><label>Entreprise</label></span>
						    	<span><input name="entreprise" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Nom et Prénom</label></span>
						    	<span><input name="nom" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Adresse</label></span>
						    	<span><input name="adresse" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Tel</label></span>
						    	<span><input name="tel" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						    	<span><label>Questions / Commentaire</label></span>
						    	<span><textarea name="commentaire"> </textarea></span>
						    </div><br><br>
						   <div>
						   	<input type="submit" value="valider" class="btn btn-primary btn1">
						  </div>

						  
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					
      			   <div class="company_address">
				     	<h3>Informations sur la societé</h3>
						    	<p>Société d'études architecturales</p>
								<p>65, Avenue H.Bourguiba App7 2émé étage Nlle Ariana </p>
						   	
						   		<p>TEL: (+216) 71 705 061</p>
				   		<p>Fax: : (+216) 71 498 281</p>
				   		
				 	 	<p>Email: <span>nizaryahyaoui@Yahoo.fr</span></p>
				   		</div>
				 </div>
				   <div class="clear"></div>
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

    	
    	
            