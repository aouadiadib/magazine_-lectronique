
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
<body>
    <br> 
  <h1>Ajouter Image en slide</h1>
  <br><br>
  
  <center>
  <form method="post" enctype="multipart/form-data" action="#">
	<?php 
	if(isset($_POST["x"])){
	
	$pnom=$_FILES["p"]["name"];
	$titre=$_POST['titre'];
	

if (!isset ($_POST['p'])){
if (empty ($_POST['titre']) ){
echo "<font color='red' size='+1'>vueillez ecrire le titre de l'image<br><br></font>";

} 
$sqlT = "select * from slide where img='$pnom'";
$reqT = mysql_query( $sqlT) or die( mysql_error() ) ;
$cpt=mysql_num_rows($reqT);
if (mysql_num_rows($reqT) > 0) {

echo "<font color='red' size='+1'>Image existe<br><br></font>";

}

 if (!empty ($_POST['titre']) && ($cpt==0)  ){
 
move_uploaded_file($_FILES['p']['tmp_name'], "../images/" . $_FILES['p']['name']);
 
$sqlu = "insert into slide values('','$titre','$pnom')";
$requ = mysql_query( $sqlu) or die( mysql_error() ) ;
if ($requ){
header('location:suc_ajout.php');
}
	}}}
	
	?>
	<p><strong><font color="red">Pour la qualité de site vueillez ajouter une image de type png et de taille 3036*944</font></strong>
	<br><br>Titre<br><br>
	<input type="text" name="titre">
	<br><br>
	Image<br><br><br><br>
	<input type="file" name="p">
	<br><br><br><br>
	
	<input type="submit" name="x" value="Valider">
	</form>
	</center>	
<?php
include ('footer.php');
?>
