
<!DOCTYPE HTML>
<html>
<head>

<title>PERFECT IMMOBILIER</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				    <li class="active"><a href="projetc.php"><span>Projets</span></a></li>
				    <li class="last"><a href="contact.php"><span>Contact</span></a></li>
				 	<div class="clear"></div>
				 </ul>
	          </div>
	  </div>
   </div>
   <div class="about-bannerx">
      <div class="wrap">
		   <div class="cssmenu">
				<ul>
				   <li class="active"><a href="projetc.php"><span>Projet en cours</span></a></li>
				   <li><a href="projetr.php"><span>Projet realiser</span></a></li>
				    <li  ><a href="projetf.php"><span>Projets futur</span></a></li>
				  
				 	<div class="clear"></div>
				 </ul>
	          </div>
			  <div class="about-banner">
      
	  
   </div>
			  
	  </div>
	  
   </div>
		<!------End Slider ------------>
 
<div>
<?php
include('config.php');


                 $x=$_GET['d'];               
    $sql="select * from projet where id_projet='$x' ";
	$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
$rows = mysql_num_rows($result);

  while($donnees=mysql_fetch_array($result)){
								
					   $id_projet=$donnees["id_projet"];
                       $type=$donnees["type"];
					  
					  $titre=$donnees["titre"];
                      
					   $des=$donnees["description"];
                       $situation=$donnees["situation"];
                       $consistance=$donnees["consistance"];
               $fiche=$donnees["fiche"];
               
 $img=$donnees["img"];
                
			   }
				 
	function detect_encoding($string)
{
    //http://w3.org/International/questions/qa-forms-utf-8.html
    if (preg_match('%^(?: [\x09\x0A\x0D\x20-\x7E] | [\xC2-\xDF][\x80-\xBF] | \xE0[\xA0-\xBF][\x80-\xBF] | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} | \xED[\x80-\x9F][\x80-\xBF] | \xF0[\x90-\xBF][\x80-\xBF]{2} | [\xF1-\xF3][\x80-\xBF]{3} | \xF4[\x80-\x8F][\x80-\xBF]{2} )*$%xs', $string))
        return 'UTF-8';

    //If you need to distinguish between UTF-8 and ISO-8859-1 encoding, list UTF-8 first in your encoding_list.
    //if you list ISO-8859-1 first, mb_detect_encoding() will always return ISO-8859-1.
    return mb_detect_encoding($string, array('UTF-8', 'ASCII', 'ISO-8859-1', 'JIS', 'EUC-JP', 'SJIS'));
}

function convert_encoding($string, $to_encoding, $from_encoding = '')
{
    if ($from_encoding == '')
        $from_encoding = detect_encoding($string);

    if ($from_encoding == $to_encoding)
        return $string;

    return mb_convert_encoding($string, $to_encoding, $from_encoding);
}			 

				        
						?>
	
			<br><br>	
<center><font color='gray' size="+3" >
<strong><?php
$titre = convert_encoding($titre, 'UTF-8');
echo $titre ;
 ?></strong>
</font>

<br><br><br><br><br>

<div class="about-img">
<a href="admin/afiche/<?php echo $img; ?>" class="swipebox" title="<?php echo $titre; ?>"> <img src="admin/afiche/<?php echo $img; ?>" alt=""><span class="zoom-icon"></span> </a>			
</div>
<br>
					

				<br>				
			<p style="color:black; font-weight:bold; font-size:17px; ">
<?php 
$des = convert_encoding($des, 'UTF-8');
echo $des ;
?>				
				
				</p>
								
								
<br><br><br>
<p style="color:#BA3018; font-weight:bold;font-size:23px;">SITUATION</p>
<br>
<div style="width:80%;">
<p style="color:black; font-weight:bold; font-size:15px; " >
<?php 
$situation= convert_encoding($situation, 'UTF-8');
echo $situation ; 

?>
</p>
</div><br>
<br>
<p style="color:#BA3018; font-weight:bold;font-size:23px;">CONSISTANCE</p>
<br>
<div style="width:80%;">
<p style="color:black; font-weight:bold; font-size:15px; " >
<?php 

$consistance = convert_encoding($consistance, 'UTF-8');
echo $consistance ;
 ?>
</p>
</div>
<br>
	<br><br><p style="color:#BA3018; font-weight:bold; font-size:23px;">LES PLANS DE PROJET</p>
<br><br><br>
<?php 
 $sqlP="select * from plan where id_projet='$x' ";
	$resultP = mysql_query($sqlP) or die ("Error in query: $query. " . mysql_error());

  while($donneesP=mysql_fetch_array($resultP)){
								
					   $plan=$donneesP["plan"];
                       $titrex=$donneesP["titre"];
                 
				 ?>
				 
	<div style="width:300px; height:250px;" class="col_1_of_4 span_1_of_4">
<a href="admin/plan/<?php echo $plan; ?>" class="swipebox" title="<?php echo $titrex; ?>"> <img src="admin/plan/<?php echo $plan; ?>" alt=""><span class="zoom-icon"></span> </a>
					</div>							
					<?php } ?>
					
							<div class="clear"></div>
				
				<div class="more">
<a href="admin/fiches/<?php echo $fiche ?>" class="btn btn-primary btn1">Voir fiche technique de projet</a>
</div>
<br><br>
					</div>
					
		</center>			<div class="clear"></div>
		
			  <div class="clear"> </div>
				
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

    	
    	
            