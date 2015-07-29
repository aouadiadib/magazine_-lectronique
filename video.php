<?php 
require("include/header.php");
?>

  
<div id="section_header">


  <h2><span>VIDEO</span></h2>
</div>
<div id="main-services">
  <div class="container">
    <div class="row">
      <center>
    <?php
        $liste = $med->liste_video();
    foreach ($liste as $row) {
     $id_video = $row["id_video"];


    ?>

 
 <br>
 Titre : <?php echo $row["titre"]; ?>
 <br>
 <?php 
        
        ?>
 <br><br>
   <object type="text/html" data="http://www.youtube.com/embed/<?php echo $row["ident"]; ?>" style="width:500px;height:350px;"></object>
<br><br>


<?php } ?>


</center>
    <br><br><br><br>
    </div>
     </div>
</div>
</div>




<br><br>
  
<!-- Footer -->
<?php 
require("include/footer.php");
?>