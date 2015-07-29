<?php 
require("include/header.php");
?>

  
<div id="section_header">

 
<?php
      $lien = $art->select_rss();

      $url = $lien;
      $xml = simplexml_load_file($url);
      $rss = $xml->channel;
    ?>
  <h2><span><?php echo $rss->title; ?></span></h2>
</div>
<div id="main-services">
  <div class="container">
    <div class="row">
      <?php foreach ($rss->item as $item) { ?>
        <div>
          <h1><?php echo $item->title;?></h1>
          <br>
           <font color="blue" size="+1">
            <?php echo $item->category;?>
          </font>
           <br><br>
          
           <div>

            <p>
              <font color="blue" size="+1">
            <?php echo $item->description;?>
          </font>
          </p>
          <br>
          <font color="blue" size="+1">
            <?php echo $item->pubDate;?>
          </font>
          <br><br>
           <a href="<?php echo $item->link;?>" targer="blank">
            <font color="green" size="+1">
              Voir plus
            </font>
            </a>
          </div>
               
        </div>
        

        <br>
<hr>
        <br><br>
    <?php } ?>
  </div>
</div>





<br><br>
  
<!-- Footer -->
<?php 
require("include/footer.php");
?>