<?php 
include('include/header_admin.php')
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
	$id = $_GET["id"];
	
	$liste = $med->select_rss($id);
	foreach ($liste as  $row) {
	 	$id = $row["id_rss"];
	 	$titre = $row["titre"];
	 	$lien = $row["lien"];
	 	
	 } 
		?>
		<br><br>
		<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>">
 <?php
 
 $titreE=$lienE="";
 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$erreur = true ; 
if( $controle->vide($_POST["titre"])) 
{
	$titreE=" * champ obligatoire";

}	






if( $controle->vide($_POST["lien"])) 
{
	$lienE=" * champ obligatoire";
}





if($controle->no_vide($_POST["titre"],$_POST["lien"]))
{		

			$id = $_POST['id'];
			
			$titre = $_POST['titre'];
			$lien = $_POST['lien'];
		
			
			 
			
			
			$ajout=$med->modifier_rss($id,$titre,$lien);
			
			if($ajout)
			{
					$link='liste_rss.php?message=update';
					$user->location($link);
			
			}
		}}
	?>	
	  <input type="hidden" name="id" value="<?php echo $id; ?>">
 <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">Titre</label>
      <div class="col-sm-6">
     <input type="text" value="<?php echo $titre ?>" class="form-control" id="firstname" name="titre" placeholder="">
      <span class="error"><?php echo $titreE;?></span>
	  </div>
	   </div>
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">Lien</label>
      <div class="col-sm-6">
         <input type="link" value="<?php echo $lien ?>" class="form-control" id="firstname" name="lien" placeholder="">
      <span class="error"><?php echo $lienE;?></span>
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
