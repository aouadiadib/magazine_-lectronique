<?php
 include ('C:\wamp\www\srtj\config.php');
  include ('header.php');
?>
<div>
    <br><br>
<div class="title">
			<h1>Menu administration</h1>
		</div>
    <br><br><br><br>
		<nav>
			<table>
				
				<tr>
					<td class="color2"><a href="gestion_produit.php?categorie=all">Gestion des clients</a></td>
				</tr>
				<tr>
					<td class="color2"><a href="gestion_reclamation.php">Gestion des reclamations</a></td>
				</tr>
				<tr>
					<td class="color2"><a href="gestion_message.php">Changer mot de passe</a></td>
				</tr>
				
                                <tr>
					<td class="color1"><a href="includes/modules/deconnexion.php">Déconnexion</a></td>
				</tr>
			</table>
		</nav>
</div>
<?php
include ('footer.php');
?>