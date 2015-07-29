<?php 
require("include/header.php");
?>

  
<div id="section_header">

  
  <h2><span>NEWS LETTRE</span></h2>
</div>
<div id="main-services">
  <div class="container">
    <div class="row">
      <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">



<center>
Pour inscrire au newslettre vueillez ecrire votre email
</center>
<br><br><br><br>
     <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">Ecrire votre email</label>
      <div class="col-sm-8">
         <input type="email" required class="form-control" id="firstname" name="email" placeholder="">
    
      <span class="error"></span>
</div>
</div>
<br><br>
<div class="form-group">
      <label class="col-sm-5 control-label"></label>

    <input type="reset" value="Annuler" class="btn btn-default">
     <input type="submit" value="Inscrire" class="btn btn-success">
  
   </div>
   <?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
  $email = $_POST['email'];
  $ajout = $art->ajouter_newslettre($email);
 
   $link='suc_news.php';
          $user->location($link);
 
}
?>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
     </div>
</div>
</div>




<br><br>
  
<!-- Footer -->
<?php 
require("include/footer.php");
?>