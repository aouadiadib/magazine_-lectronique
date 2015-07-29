<?php 
require("include/header.php");
?>

<div id="section_header">

  <h2><span> Article</span></h2>
</div>
<div id="main-services">
  <div class="container">
<?php 
$id= $_GET["id"];
 $liste = $art->select_article_id($id);
 
      foreach ($liste as $row) {
        
?>
<center>
     <h1> <?php echo $row["titre"]; ?></h1>
          <p>
            <font color="gray" size="+1">
        <?php echo $row["type"]; ?>
      </font>
       </p> 
       <br><br>
      <img alt="" src="admin/files/<?php echo $row["img"]; ?>" width="600" height="400" />
       </center>
       <br><br><br>
       <p>
            <font  size="+1">
        <?php echo $row["texte"]; ?>
      </font>
       </p> 
       <br><br><br>

      
         
  <br><br><br><br><br>
   
    
      
      
      <?php } ?>
       


  
</div>





  
<!-- Footer -->
<?php 
require("include/footer.php");
?>