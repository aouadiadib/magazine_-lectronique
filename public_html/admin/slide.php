
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
  <h1>Slide</h1>
  <br><br>
  <br><br>
  <br>
  <nav>
			<table>
				
				
                <tr>
					<td class="color2"><a href="ajout_slide.php"><font color="white">Ajouter Image en slide</font></a></td>
				</tr> 
				</table></nav>
  <br><br><br>
<table class="produits">
			<thead>
				<tr>
					
					<th>image</th>
					<th>titre</th>
					<th></th>
					
                          <th></th>              
				</tr>
			</thead>
			
			<tbody>
				<?php
                                
$sql="select * from slide ORDER BY id_slide DESC";
$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
$rows = mysql_num_rows($result);




		if ($rows>0){
                    while($donnees=mysql_fetch_array($result)){
								
					   $id_slide=$donnees["id_slide"];
                       $titre=$donnees["titre"];
                       $img=$donnees["img"];
                      
                     
                               
						?>
						<tr>
							
							<td>
			<img src="../images/<?php echo $img; ?>" width="280" height="150">		
								</td>
                           <td>
								<?php  echo $titre;?>
							</td>
							
                          
							
                                
								<td><center>
				<?php echo "<a href='del_slide.php?d=$id_slide'>"; 
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
