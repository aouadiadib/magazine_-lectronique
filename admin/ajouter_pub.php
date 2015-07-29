<?php 
include('include/header_admin.php')
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Ajouter Publicité</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter Publicité</h1>
			</div>
		</div><!--/.row-->
		
		<br><br>
		<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
 <?php
 
 $societeE=$imgE="";
 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			
if( $_FILES["fileToUpload"]["name"]=="")
{
	$imgE=" * Ajouter l'image de pub";

}	

if( $controle->vide($_POST["societe"])) 
{
	$societeE=" * champ obligatoire";

}	
	if( $_FILES["fileToUpload"]["name"]!="" &&  $controle->no_vide($_POST["societe"]) )
{

	move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "files/" . $_FILES['fileToUpload']['name']);


			 
			
			
	
	
	
$societe = $_POST["societe"];
$img = $_FILES["fileToUpload"]["name"];

			$ajout=$pub->ajouter_pub($societe,$img);
			
			if($ajout)
			{
					$link='liste_pub.php?message=add';
					$user->location($link);		
			}
		}}
	?>	
 <div class="form-group">
      <label for="firstname" class="col-sm-3 control-label">Ajouter votre image</label>
      <div class="col-sm-6">
         <input type="file" name="fileToUpload" />
         <span class="error"><?php echo $imgE;?></span>
   
	  </div>
	   </div>
	   
	   <div class="form-group">
      <label for="firstname" class="col-sm-3 control-label">Societé</label>
      <div class="col-sm-6">
         <input type="text" class="form-control" id="firstname" name="societe" placeholder="">
     <span class="error"><?php echo $societeE;?></span>
	  </div>
	   </div>
	   
	  
	   
	  
	   <br><br>
	    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
	  <input type="submit" value="Ajouter" class="btn btn-primary">
	
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
