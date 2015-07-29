<?php 
include('include/header_admin.php')
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Modifier Responsable Media</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Modifier Responsable Media</h1>
			</div>
		</div><!--/.row-->
		<?php
		$id = $_GET["id"];
	
	$liste = $med->select_media($id);
	foreach ($liste as  $row) {
	 	$id = $row["id_media"];
	 	$nom = $row["nom"];
	 	$prenom = $row["prenom"];
	 	
	 	$login = $row["login"];
	 }  
		?>
		<br><br>
		<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>">
 <?php
 
 $loginE=$passE=$nomE=$prenomE="";
 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$erreur = true ; 
if( $controle->vide($_POST["login"])) 
{
	$loginE=" * champ obligatoire";

}	

if( $controle->vide($_POST["pass"])) 
{
	$passE=" * champ obligatoire";
}




if( $controle->vide($_POST["nom"])) 
{
	$nomE=" * champ obligatoire";
}
if( $controle->vide($_POST["prenom"])) 
{
	$prenomE=" * champ obligatoire";
}




if($controle->no_vide($_POST["prenom"],$_POST["nom"],$_POST["login"],$_POST["pass"]))
{		
			$id = $_POST['id'];
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
		
			
			 
			
			
			$ajout=$med->modifier_media($nom,$prenom,$login,$id);
			
			if($ajout)
			{
					$link='liste_media.php?message=update';
					$user->location($link);
			}
		}}
	?>	
 <input type="hidden" name="id" value="<?php echo $id; ?>">
 <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">Nom</label>
      <div class="col-sm-6">
     <input type="text" value="<?php echo $nom ?>" class="form-control" id="firstname" name="nom" placeholder="">
      <span class="error"><?php echo $nomE;?></span>
	  </div>
	   </div>
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">Prénom</label>
      <div class="col-sm-6">
         <input type="text" value="<?php echo $prenom ?>" class="form-control" id="firstname" name="prenom" placeholder="">
      <span class="error"><?php echo $prenomE;?></span>
	  </div>
	   </div>
	   
	  
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">login</label>
      <div class="col-sm-6">
         <input type="text" value="<?php echo $login ?>" class="form-control" id="firstname" name="login" placeholder="">
      <span class="error"><?php echo $loginE;?></span>
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
