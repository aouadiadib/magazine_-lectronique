<?php 
require("include/header.php");
?>

<div id="section_header">

  <h2><span>Les Photos</span></h2>
</div>
  
<div id="main-services">
  <div class="container">
    <div class="row">

      <?php 
      $liste = $med->liste_all_photo();
      foreach ($liste as $row) {
      
      
      ?>
      <center> 
 
    <img alt="" src="admin/files/<?php echo $row["nom"]; ?>" width="500" height="300" />
    <br><br>
    <?php 
      echo "<hr>";
      echo "<br><br>";
    ?>
        </center>
    
      <?php } ?>
       

  </div>
  <br><br>
  
</div>
<br><br>
  
<!-- Footer -->
<?php 
require("include/footer.php");
?>