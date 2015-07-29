
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
  <h1>Ajouter Image</h1>
  <br><br>
  <br><br>
  <center>
  <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"] ?>">
	<?php

 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			
if( $_FILES["fileToUpload"]["name"]=="")
{
	echo " * Ajouter Votre image";

}	

if( $controle->vide($_POST["titre"])) 
{
	echo " * champ obligatoire";

}	
	if( $_FILES["fileToUpload"]["name"]!="" &&  ($_POST["titre"]!="") )
{

	move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "images/origin/" . $_FILES['fileToUpload']['name']);

	$type =  $_FILES["fileToUpload"]["type"];

		if($type == "image/jpeg")
		{
	$old_path = "files/origin/" . $_FILES['fileToUpload']['name']	;
	$new_path ="files/".$_FILES['fileToUpload']['name'];
	$new_width = 400;
	$new_height = 400;


$t = imagecreatefromjpeg($old_path);
$x = imagesx($t);
$y = imagesy($t);

$s = imagecreatetruecolor($new_width, $new_height);

imagecopyresampled($s, $t, 0, 0, 0, 0, $new_width, $new_height,
        $x, $y);

imagejpeg($s, $new_path);
chmod($new_path, 0644);	
	} 

	if($type == "image/png")
		{

			$old_path = "images/origin/" . $_FILES['fileToUpload']['name']	;
	$new_path ="files/".$_FILES['fileToUpload']['name'];
	$new_width = 400;
	$new_height = 400;


$t = imagecreatefrompng($old_path);
$x = imagesx($t);
$y = imagesy($t);

$s = imagecreatetruecolor($new_width, $new_height);

imagecopyresampled($s, $t, 0, 0, 0, 0, $new_width, $new_height,
        $x, $y);

imagepng($s, $new_path);
chmod($new_path, 0644);

		}

	
$titre = $_POST["titre"];
$img = $_FILES["fileToUpload"]["name"];


$connexion = new PDO('mysql:host=localhost;dbname=perfecti_db', "perfecti_user", "XdV01247");
$connexion->exec("SET CHARACTER SET utf8");


			$insert = $connexion->prepare('insert into gallerie VALUES
		(NULL,:titre,:img)');
try {		
	$ins = $insert->execute(
	array(
	'titre'=>$titre,
	'img'=>$img
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
			

				
					 echo "
                    <script>
                   location.replace('gallerie.php');
                   </script>
                     ";		
		
			
		
		}}
	?>	
	
	Titre<br><br><br><br>
	<input type="text" name="titre">
	<br><br>
	Image<br><br><br><br>
	<input type="file" name="fileToUpload">
	<br><br><br><br>
	
	<input type="submit" name="x" value="Valider">
	</form>
	</center>	
<?php
include ('footer.php');
?>
