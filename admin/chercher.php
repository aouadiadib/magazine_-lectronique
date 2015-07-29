<?php 
include('include/header_journaliste.php');
$titre = $_POST['titre'];

	
$liste = $jour->select_journaliste_login($login);
foreach ($liste as  $row) {
	$id = $row["id_jour"];
}

$art->chercher_article($id,$titre);



?>
		
	