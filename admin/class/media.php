<?php
require_once("DataBase.php");
class Media
{

	public function __construct()
	{	
		
	}
	
	
public function total_media()
	{
		$select = DataBase::connect()->query("select * from responsable_media ");
		
		$nbr = $select->rowcount();
		
		return $nbr;
	}

	public function total_video()
	{
		$select = DataBase::connect()->query("select * from video ");
		
		$nbr = $select->rowcount();
		
		return $nbr;
	}


	public function total_photo()
	{
		$select = DataBase::connect()->query("select * from photo ");
		
		$nbr = $select->rowcount();
		
		return $nbr;
	}
 public function liste_media()
	{
		$select = DataBase::connect()->query("select * from responsable_media   ORDER BY id_media DESC");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_media= $donnees->id_media;
			$nom= $donnees->nom;
			$prenom= $donnees->prenom;
			$login= $donnees->login;
			echo "<tr>";
			echo "<td>";
			echo $id_media;
			echo "</td>";
			echo "<td>";
			echo $nom." ".$prenom;
			echo "</td>";
			echo "<td>";
			echo $login;
			echo "</td>";
			echo "<td>";
			echo "<a href='consulter_media.php?id=$id_media'>"; 
			echo " <img src='img/chercher.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='modifier_media.php?id=$id_media'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "<td>";
			echo "<a href='supprimer_media.php?id=$id_media'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer le Personnel: ".$nom." ".$prenom." ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}





	public function ajouter_media($nom,$prenom,$login,$pass)
	{
		$insert = DataBase::connect()->prepare('insert into responsable_media VALUES
		(NULL,:nom,:prenom,:login,:pass)');
try {		
	$ins = $insert->execute(
	array(
	'nom'=>$nom,
	'prenom'=>$prenom,
	'login'=>$login,
	'pass'=>$pass
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
	}
	


public function supprimer_media($id)
	{
		$delete = DataBase::connect()->query("delete from responsable_media where id_media = '$id'");
		if($delete)
		{
			return true;
		}
	}




public function select_media($id)
	{
		
		$select = DataBase::connect()->query("select * from responsable_media where id_media=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}

	public function select_media_login($login)
	{
		
		$select = DataBase::connect()->query("select * from responsable_media where login='$login'");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}


public function modifier_media($nom,$prenom,$login,$id)
	{
	
		$up = DataBase::connect()->prepare('update  responsable_media SET
		nom=:nom,prenom=:prenom,login=:login where id_media=:id');
try {		
	$update = $up->execute(
	array(
	'nom'=>$nom,
	'prenom'=>$prenom,
	
	'login'=>$login,
	'id'=>$id
	)
	);
	
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
		
	}


public function liste_rss()
	{
		$select = DataBase::connect()->query("select * from rss");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_rss= $donnees->id_rss;
			$titre= $donnees->titre;
			$lien= $donnees->lien;
			
			echo "<tr>";
			echo "<td>";
			echo $id_rss;
			echo "</td>";
			echo "<td>";
			echo $titre;
			echo "</td>";
			echo "<td>";
			echo $lien;
			echo "</td>";
			
			echo "<td>";
			echo "<a href='modifier_rss.php?id=$id_rss'>"; 
			echo " <img src='img/modif.jpg' width='30' height='30'></img> </a>";                    
			echo "</td>";
			
			echo "</tr>";
		}
	}


	public function select_rss($id)
	{
		
		$select = DataBase::connect()->query("select * from rss   where id_rss=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}


	public function liste_photo($id)
	{
		
		$select = DataBase::connect()->query("select * from photo   where id_media=$id ORDER BY id_pic DESC");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}

	public function select_photo($id)
	{
		
		$select = DataBase::connect()->query("select * from photo   where id_pic=$id ORDER BY id_media DESC");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}

    public function supprimer_photo($id)
	{
		$delete = DataBase::connect()->query("delete from photo where id_pic = '$id'");
		if($delete)
		{
			return true;
		}
	}

public function modifier_rss($id,$titre,$lien)
	{
	
		$up = DataBase::connect()->prepare('update  rss SET
		titre=:titre,lien=:lien where id_rss=:id');
try {		
	$update = $up->execute(
	array(
	'titre'=>$titre,
	'lien'=>$lien,
	'id'=>$id
	)
	);
	
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
		
	}




	




public function ajouter_photo($titre,$img,$id)
	{
		$insert = DataBase::connect()->prepare('insert into photo VALUES
		(NULL,:titre,:img,:id)');
try {		
	$ins = $insert->execute(
	array(
	'titre'=>$titre,
	'img'=>$img,
	'id'=>$id
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
	}
	


	public function liste_video($id)
	{
		$select = DataBase::connect()->query("select * from video  where id_media=$id ORDER BY id_video DESC");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}


public function ajouter_video($titre,$lien,$ident,$id)
	{


		$insert = DataBase::connect()->prepare('insert into video VALUES
		(NULL,:titre,:lien,:ident,:id)');
try {		
	$ins = $insert->execute(
	array(
	'titre'=>$titre,
	'lien'=>$lien,
	'ident'=>$ident,
	'id'=>$id
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
	}
	
public function supprimer_video($id)
	{
		$delete = DataBase::connect()->query("delete from video where id_video = '$id'");
		if($delete)
		{
			return true;
		}
	}

 }
 
 
 
?>