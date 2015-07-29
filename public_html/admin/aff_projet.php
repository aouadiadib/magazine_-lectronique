<?php 
session_start();
if ( ($_SESSION["login"] =="") || ($_SESSION["pass"] =="") || ($_SESSION["code"] !="xaxatunisoft")  )
{
	header("Location: index.php");
}
?>
<html>
<head>

<link rel="stylesheet" href="css/new_style.css" type="text/css" media="all" />
		
</head>
<body>
	 <div style=" border-radius: 8px;  width:100%;height:65px;max-width:100%;overflow:hidden;border:2px solid #22427C ;padding:0;margin:0 auto;display:block;background-color:#22427C ;" marginheight="0" marginwidth="0">


<img src="../images/home.png" width="45" height="45"></img>
<font size="+3" color="white"><b><a href="accueil.php" style="text-decoration:none;color:#FFFFFF;">Administration</a></b></font>
<a href="index.php"><img src="../images/dec.png" width="65" height="65" align="right"></img></a>

</div>
<div style=" border-radius: 8px; width:100%;height:27px;max-width:100%;overflow:hidden;border:2px solid #209D9D ;padding:0;margin:0 auto;display:block;background-color:#209D9D;" marginheight="0" marginwidth="0">

  <center>  
&nbsp;&nbsp;
<font  color="white" size="+2"><a href="contact.php" style="text-decoration:none;color:#FFFFFF;">contact</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="+2" color="white"><a href="gallerie.php" style="text-decoration:none;color:#FFFFFF;">Gallerie</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="+2" color="white"><a href="slide.php" style="text-decoration:none;color:#FFFFFF;">Slide</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="+2" color="white"><a href="projet.php" style="text-decoration:none;color:#FFFFFF;">Projet</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</div><br>

    <br> 
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
				 
				 

				        
						?>
	 <center>	<h3><?php echo $titre; ?><hr><br><br>
		</center>				<br>
						
<img src="afiche/<?php echo $img; ?>" width="250" height="200" ><br>				
			<p style="color:black; font-weight:bold; font-size:17px; ">
<?php echo $des; ?>				
				
				</p>
								
								
<br><br><br>
<p style="color:#BA3018; font-weight:bold;font-size:23px;">SITUATION</p>
<br>
<p style="color:black; font-weight:bold; font-size:15px; " >
<?php echo $situation; ?>
</p><br>
<br>
<p style="color:#BA3018; font-weight:bold;font-size:23px;">CONSISTANCE</p>
<br>
<p style="color:black; font-weight:bold; font-size:15px; " >
<?php echo $consistance; ?>
</p><br><br><br>
<div>
	<br><br><p style="color:#BA3018; font-weight:bold; font-size:23px;">FICHE TECHNIQUE</p>

	<br><br>			<a href="fiches/<?php echo $fiche ?>" class="btn btn-primary btn1">Fiche technique de projet</a>
</div>
	<br><br><p style="color:#BA3018; font-weight:bold; font-size:23px;">LES PLANS DE PROJET</p>
<br>
<br><br>				

<?php 
 $sqlP="select * from plan where id_projet='$x' ";
	$resultP = mysql_query($sqlP) or die ("Error in query: $query. " . mysql_error());

  while($donneesP=mysql_fetch_array($resultP)){
								
					   $plan=$donneesP["plan"];
                       $titrex=$donneesP["titre"];
                 
				 ?>
				 <div style="float:left;">
	<img src="plan/<?php echo $plan ?>"width="240" height="200" >							
					
					<br><center><p><?php echo $titrex; ?> </p>	<center>		
								</div>
								<?php } ?>
							
					

				
					
