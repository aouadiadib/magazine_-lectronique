<?php 
require("include/header.php");
?>
<!-- Slider -->
<div class="header-banner"> 
  <script src="js/responsiveslides.min.js"></script> 
  <script>
       $(function () {
        $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
        });
       });
       </script>
  <div class="container">
    <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides" id="slider">
          <li> <img src="images/bleu.jpg" height="200" alt="">
            <div class="caption">
              <h1><font color="white">POLITIQUE</font></h1>
              <p><font color="white" size="+2">Tous les articles et les actualités politique</font></p>
        </div>
          </li>
          <li> <img src="images/vert.jpg" alt="">
            <div class="caption">
              <h1><font color="white">SOCIALE</font></h1>
              <p><font color="white">Tous les informations Sociale</font></p>
       
    

      </div>
          </li>
           <li> <img src="images/gri.jpg" alt="">
            <div class="caption">
              <h1><font color="white">SPORT</font></h1>
              <p><font color="white" size="+2">Tous les resultat et les actualité sportif</font></p>
       
      </div>
          </li>
           <li> <img src="images/rose.jpg" alt="">
            <div class="caption">
              <h1><font color="white">TECHNOLOGIE</font></h1>
              <p><font color="white" size="+2">Tous les nouvelles technologie</font></p>
       
        </div>
          </li>
           <li> <img src="images/move.jpg" alt="">
            <div class="caption">
              <h1><font color="white">CULTURE</font></h1>
              <p><font color="white" size="+2">Tous les nouveauté et les évenement culturelle</font></p>
       
 </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="section_header">
<?php 

$liste = $med->liste_pub();
      foreach ($liste as $row) {

?>
  <img src="admin/files/<?php echo $row["img"]; ?>" >
  <?php  } ?>
<br>
  <h2><span>Les Nouveaux Articles</span></h2>
</div>
<div id="main-services">
  <div class="container">
<?php 

 $liste = $art->liste_article();
      foreach ($liste as $row) {
?>
    <div class="col-lg-4 centered"> 
        
      <img alt="" src="admin/files/<?php echo $row["img"]; ?>" width="270" height="200" />
       
        <h3> <?php echo $row["titre"]; ?></h3>
       <p>
        <?php echo $row["type"]; ?>
       </p> 
    <a href="afficher_article.php?id=<?php echo $row["id_article"]; ?>" class="btn">Lire article</a> 

  </div>
    
      
      
      <?php } ?>
       


  <br><br><br>
  <center>
        <a href="">Voir Plus</a>
      </center>
</div>



<div id="section_header">
  <h2><span>Les Nouveaux photo</span></h2>
</div>
<div id="main-services">
  <div class="container">
    <div class="row">

      <?php 
      $liste = $med->liste_photo();
      foreach ($liste as $row) {
      
      
      ?>
      <div class="col-lg-3 centered"> 
 
    <img alt="" src="admin/files/<?php echo $row["nom"]; ?>" width="270" height="200" />
        </div>
    
      <?php } ?>
       

  </div>
  <br><br>
  <center>
        <a href="photo.php">Voir Plus</a>
      </center>
</div>
</div>
<br><br>
  
<!-- Footer -->
<?php 
require("include/footer.php");
?>