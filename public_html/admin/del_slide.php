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
  <h1>Supprimer Image de slide</h1>
  <br><br>
  <br><br>
  <center>
  <?php 
		 $x=$_GET['d']; 
$sqlI = "select * from slide where id_slide='$x'";
$resultI = mysql_query($sqlI) or die ("Error in query: $query. " . mysql_error());

while($ligneI=mysql_fetch_array($resultI)){
		$id_slide = $ligneI['id_slide']  ; 
		$titre = $ligneI['titre']  ; 
		$img = $ligneI['img']  ;


?>		
		<p><font size="+2"> Voulez vous vraiment supprimer cette image de slide  </font></p>
		<br>
		<img src="../images/<?php echo $img; ?>" width="200" height="150">
		<br><p><font size="+1"><?php echo $titre; ?></font></p>
<form method="post" action="#">
<br><br>
<a href="gallerie.php"> <input type="button" value="    annuler    "></a>

<input type="submit" name="xx" value="  confirmer  ">
  <?php 
  if (isset($_POST['xx'])){
  $sqlD = "delete from slide where id_slide='$x'";
$resultD = mysql_query($sqlD) or die ("Error in query: $query. " . mysql_error());
 $file="../images/".$img;
  if (unlink($file) && ($resultD) )
  {
  header('location:suc_del.php');

  }
 }}
?>  
</form>
<?php
include ('footer.php');
?>
