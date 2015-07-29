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
<link rel="stylesheet" href="css/new_style.css" type="text/css" media="all" />
		
</head>
<body>
	 <div style=" border-radius: 8px;  width:100%;height:65px;max-width:100%;overflow:hidden;border:2px solid #22427C ;padding:0;margin:0 auto;display:block;background-color:#22427C ;" marginheight="0" marginwidth="0">


<img src="../images/home.png" width="45" height="45"></img>
<font size="+3" color="white"><b><a href="accueil.php" style="text-decoration:none;color:#FFFFFF;">Administration</a></b></font>
<a href="deconn.php"><img src="../images/dec.png" width="65" height="65" align="right"></img></a>

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
  <h1>Projet</h1>
  <br><br>
  <br><br>
   <nav>
			<table>
				
				
                <tr>
					<td class="color2"><a href="ajout_projet.php"><font color="white">Ajouter Projet</font></a></td>
				</tr> 
				<tr></tr>
				<tr>
					<td class="color2"><a href="ajout_plan.php"><font color="white">Ajouter Plan</font></a></td>
				</tr> 
				</table></nav>
  <br><br>
<table class="produits">
			<thead>
				<tr>
					
					<th>Titre</th>
					<th>Type</th>
					<th></th>
					<th></th>
                            
				</tr>
			</thead>
			
			<tbody>
				<?php
                                
 $sql="select * from projet ORDER BY id_projet DESC";
$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
$rows = mysql_num_rows($result);




		if ($rows>0){
                    while($donnees=mysql_fetch_array($result)){
								
					   $id_projet=$donnees["id_projet"];
                       $type=$donnees["type"];
                       $titre=$donnees["titre"];       
						?>
						<tr>
							
							<td>
								<?php echo  $titre;?>
							</td>
                           <td>
								<?php  echo $type;?>
							</td>
							
                          
                                
								<td><center>
				<?php echo "<a href='aff_projet.php?d=$id_projet'>"; 
                                 echo " <img src='../images/cons.png' width='30' height='30'></img> </a>";
                                ?>

							</center></td>
							
                               <td><center>
				<?php echo "<a href='sup_projet.php?d=$id_projet'>"; 
                                 echo " <img src='../images/del.png' width='30' height='30'></img> </a>";
                                ?>

							</center></td>                        
						</tr>
                <?php }}?>
                                          
			</tbody>
		</table>
<?php
include ('footer.php');
?>
