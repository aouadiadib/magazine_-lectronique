<?php 
session_start();
if ( ($_SESSION["login"] =="") || ($_SESSION["pass"] =="") || ($_SESSION["code"] !="xaxatunisoft")  )
{
	header("Location: index.php");
}
?>
<?php
 include ('config.php');
  include ('header_accueil.php');
?>
<body style="background-color: white">
<div>
    
    <center>
        <img src="../images/sigle.png" width="240" height="170"></img>
    </center>
<div>
    
			<h1>Menu administration</h1>
		</div>
    <br><br><br><br>
		<nav>
			<table>
				
				
                <tr>
					<td class="color2"><a href="contact.php"><font color="white">Contact</font></a></td>
				</tr> 
				 <tr>
					<td class="color2"><a href="gallerie.php"><font color="white">Gallerie</font></a></td>
				</tr>
				<tr>
					<td class="color2"><a href="slide.php"><font color="white">Slide</font></a></td>
				</tr>
				<tr>
					<td class="color2"><a href="projet.php"><font color="white">Projet</font></a></td>
				</tr>
				<tr>
					<td class="color2"><a href="change.php"><font color="white">Changer mot de passe</font></a></td>
				</tr>
				
                                <tr>
					<td class="color1"><a href="deconn.php"><font color="white">Déconnexion</font></a></td>
				</tr>
			</table>
		</nav>
</div>
<?php
include ('footer.php');
?>