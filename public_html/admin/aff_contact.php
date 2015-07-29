<?php 
session_start();
if ( ($_SESSION["login"] =="") || ($_SESSION["pass"] =="") || ($_SESSION["code"] !="xaxatunisoft")  )
{
	header("Location: index.php");
}
?>
<?php
 include ('config.php');

?>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/xstyle.css" type="text/css" media="all" />
		
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
  <h1>Contact</h1>
  <br><br>
  <br><br>
  <br><br>

				<?php
                 $x=$_GET['d'];               
                                $sql="select * from contact where id_contact='$x' ORDER BY id_contact DESC";
			$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
			$rows = mysql_num_rows($result);




		if ($rows>0){
                    while($donnees=mysql_fetch_array($result)){
								
					   $id_contact=$donnees["id_contact"];
                       $entreprise=$donnees["entreprise"];
                       $adresse=$donnees["adresse"];
                       $tel=$donnees["tel"];
                       $date=$donnees["date"];
                     
                   $nom=$donnees["Nom_prenom"];
				   $email=$donnees["email"];
				   $commentaire=$donnees["commentaire"];
				        
						?>
						
              <center>
<table class="x">
<tr>
<td>Date :</td>
<td> <?php echo $date; ?></td>

</tr>
<tr>
<td>Entreprise :</td>
<td> <?php echo $entreprise; ?></td>
</tr>

<tr>
<td>Adresse :</td>
<td> <?php echo $adresse; ?></td>
</tr>
<tr>
<td>Nom & Prenom :</td>
<td> <?php echo $nom; ?></td>
</tr>
<tr>
<td>Tel :</td>
<td> <?php echo $tel; ?></td>
</tr>
<tr>
<td>Email :</td>
<td> <?php echo $email; ?></td>
</tr>
</table>
<br><br>
Commentaire <br><br>
<?php echo $commentaire; ?>			  
   <br><br>                                       
	
<input type="button" value="Imprimer cette page" onClick="window.print()">
<?php
include ('footer.php'); }}
?>
