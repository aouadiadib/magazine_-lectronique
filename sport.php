<?php 
require("include/header.php");
?>

<div id="section_header">

  <h2><span>Les Nouveaux Articles</span></h2>
</div>
<div id="main-services">
  <div class="container">
<?php 
$type= $_GET["type"];
 $liste = $art->lister_article($type);
 
      foreach ($liste as $row) {
        
?>
<center>
  <a href="afficher_article.php?id=<?php echo $row["id_article"]; ?>">
      <h1> <?php echo $row["titre"]; ?></h1>
          <p>
            <font color="gray" size="+1">
        <?php echo $row["type"]; ?>
      </font>
       </p> 
       <br><br>
      <img alt="" src="admin/files/<?php echo $row["img"]; ?>" width="600" height="400" />
       
       </a>
         
  <br><br><br><br><br>
   
    
      
      
      <?php } ?>
       


  
</div>





  
<!-- Footer -->
<?php 
require("include/footer.php");
?>