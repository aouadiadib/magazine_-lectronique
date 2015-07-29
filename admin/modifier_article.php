<?php 
include('include/header_journaliste.php')
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Ajouter Journaliste</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter Journaliste</h1>
			</div>
		</div><!--/.row-->
		<?php 
		$id = $_GET['id'];
		$liste = $art->select_article($id);
		foreach($liste as $row) {
			$id = $row["id_article"];
			$titre = $row["titre"];
			$texte = $row["texte"];
			$imgx = $row["img"];
		?>
		<br><br>
		<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>">
 <?php
 
 $titreE=$texteE=$imgE="";
 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$erreur = true ; 
if( $controle->vide($_POST["titre"])) 
{
	$titreE=" * champ obligatoire";

}	

if( $controle->vide($_POST["texte"])) 
{
	$texteE=" * champ obligatoire";
}











if($controle->no_vide($_POST["titre"],$_POST["texte"]))
{		

			$titre = $_POST['titre'];
			$texte = $_POST['texte'];

			if($_FILES["fileToUpload"]["name"]==""){
				$img =$imgx;
					}else {

			$img = $_FILES["fileToUpload"]["name"];
			$file="files/".$imgx;
			unlink($file);

			move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "files/" . $_FILES['fileToUpload']['name']);

			}
			 
			
			
	
	$liste = $jour->select_journaliste_login($login);
	foreach ($liste as  $row) {
	 	
	 	$nom = $row["nom"];
	 	$prenom = $row["prenom"];
	 	$type = $row["type"];
	 	$login = $row["login"];
	 } 
	
		 
			$ajout=$art->modifier_article($id,$titre,$texte,$img);
			
			if($ajout)
			{
				$link='liste_article.php?message=update';
					$user->location($link);
			}
		}}}
	?>	
 <div class="form-group">
 	  <input type="hidden" name="id" value="<?php echo $id; ?>">
      <label for="firstname" class="col-sm-3 control-label">Image de l'article</label>
      <div class="col-sm-6">
         <input type="file" name="fileToUpload" />
         <br>
         <img src="files/<?php echo $row['img'] ?>" widht="150" height="150">
   
	  </div>
	   </div>
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-3 control-label">Titre</label>
      <div class="col-sm-6">
         <input type="text" value="<?php echo $titre; ?>" class="form-control" id="firstname" name="titre" placeholder="">
     <span class="error"><?php echo $titreE;?></span>
	  </div>
	   </div>
	   
	  
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-3 control-label">Texte</label>
      <div class="col-sm-8">
         <textarea class="form-control" name="texte"  rows="18" id="comment"><?php echo $texte; ?></textarea>
         <span class="error"><?php echo $texteE;?></span>
	  </div>
	   </div>
	   
	   
	  
	  
	   
	    
	   <br><br>
	    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
	  <input type="submit" value="Modifier" class="btn btn-primary">
	
   </div>
   
</form>	   
				
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
