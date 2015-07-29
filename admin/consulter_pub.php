<?php 
include('include/header_admin.php')
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Publicité</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Publicité</h1>
			</div>
		</div><!--/.row-->
		<?php 
		$id = $_GET['id'];
		$liste = $pub->select_pub($id);
		foreach($liste as $row) {

		?>
		
		<br><br>
<table class="table table-responsive table-bordered table-hover">
<tr>
<td>
ID :  
</td>
<td>
<?php echo $row['id_pub']; ?>
</td>
</tr>

<tr>
<td>
Societé :  
</td>
<td>
<?php echo $row['societe']; ?>
</td>
</tr>
</table>
<br><br>

<center>
			
<img src="files/<?php echo $row['img'] ?>" widht="150" height="150">
</center>
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
