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
?>
<center>
<h1>Ajouter Projet</h1>
<br><br><br>
<form method="post" enctype="multipart/form-data" action="#">
<?php 
if(isset($_POST["x"]))
{
$titre=$_POST["titre"];
$id_projet=$_POST["projet"];
$pnom=$_FILES["p"]["name"];

 
$sql="insert into plan values ('','$pnom','$titre','$id_projet')";
$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
 move_uploaded_file($_FILES['p']['tmp_name'], "plan/" . $_FILES['p']['name']);

if($result){
header('location:suc_ajout.php');
}
 

}


?>
<strong>Projet</strong><br><br>

<select name="projet">


<?php
 $sqlx = "select * from projet";
$resultx = mysql_query($sqlx) or die ("Error in query: $query. " . mysql_error());

while($lignex=mysql_fetch_array($resultx)){
$titre= $lignex['titre']  ; 
$id_projet = $lignex['id_projet']  ; 
echo "<option value='$id_projet'>"; echo $titre; echo"</option>";
}?>
</select>
<br><br>
<strong>Titre</strong><br>
<br><br>
<input type="text" name="titre"><br><br>
<strong>Plan</strong><br><br><br><br>
<input type="file" name="p">

<br><br><br>



<input type="submit" name="x" value="   ajouter projet   "> 
</form>
</center>	

				
					
