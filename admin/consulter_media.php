<?php 
include('include/header_admin.php')
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Responsable media</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Responsable media</h1>
			</div>
		</div><!--/.row-->
		<?php 
		$id = $_GET['id'];
		$liste = $med->select_media($id);
		foreach($liste as $row) {

		?>
		
		<br><br>
<table class="table table-responsive table-bordered table-hover">
<tr>
<td>
ID :  
</td>
<td>
<?php echo $row['id_media']; ?>
</td>
</tr>

<tr>
<td>
Nom : 
</td>
<td>
<?php echo $row['nom']; ?>	
</td>
</tr>
<tr>
<td>	
Prénom :
</td>
<td>
  <?php echo $row['prenom']; ?>
</td>
</tr>  

<tr>
<td> 
Login : 
</td>
<td>
 <?php echo $row['login']; ?>
</td> 
</tr>
<tr>
<td>
Mot de passe :
</td> 
<td>
<?php echo $row['pass']; ?>	
</td>	
</tr>

</table>
	<?php } ?>				
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
