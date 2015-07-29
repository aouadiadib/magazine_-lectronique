<?php
require_once("DataBase.php");
class Pub
{

	public function __construct()
	{	
		$this->now = date("Y-m-d");
	}
	
	
	public function total_pub()
	{
		$select = DataBase::connect()->query("select * from pub ");
		
		$nbr = $select->rowcount();
		
		return $nbr;
	}


public function liste_pub()
	{
		$select = DataBase::connect()->query("select * from pub ORDER BY id_pub DESC");
		
		while($donnees = $select->fetch(PDO::FETCH_OBJ))
		{
			$id_pub= $donnees->id_pub;
			$societe= $donnees->societe;
			
			
			echo "<tr>";
			echo "<td>";
			echo $id_pub;
			echo "</td>";
			echo "<td>";
			echo $societe;
			echo "</td>";
			
			echo "<td>";
			echo "<a href='consulter_pub.php?id=$id_pub'>"; 
			echo " <img src='img/chercher.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			
			echo "<td>";
			echo "<a href='supprimer_pub.php?id=$id_pub'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer le Personnel: ".$societe."  ?&quot;)) { return true; } return false;'>"; 
			echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			echo "</td>";
			echo "</tr>";
		}
	}
	

		public function ajouter_pub($societe,$img)
	{
		$insert = DataBase::connect()->prepare('insert into pub VALUES
		(NULL,:societe,:img)');
try {		
	$ins = $insert->execute(
	array(
	'societe'=>$societe,
	'img'=>$img
	)
	);
}
		catch( Exception $e )
			{
	  
					echo 'Erreur de requète : ', $e->getMessage();
	
			}
			
		return true;
	}
	

	public function select_pub($id)
	{
		
		$select = DataBase::connect()->query("select * from pub where id_pub=$id");
		$liste = $select->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
		
	}


	public function supprimer_pub($id)
	{
		$delete = DataBase::connect()->query("delete from pub where id_pub = '$id'");
		if($delete)
		{
			return true;
		}
	}




 

 
 






 }
 
?>