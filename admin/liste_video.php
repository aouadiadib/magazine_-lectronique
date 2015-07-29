<?php 
include('include/header_media.php')
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Liste Video</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste Video</h1>
			</div>
		</div><!--/.row-->
		<br><br>
		
		

 <?php 

 
 $user->affichage();
 

 ?>

 <br>
	
	<div class="container">
   <?php 

   $res_media = $med->select_media_login($login);

		foreach ($res_media as $key) 
		{
			$id = $key["id_media"];
		}

		$liste = $med->liste_video($id);
		foreach ($liste as $row) {
		 $id_video = $row["id_video"];


		?>

 ID : <?php echo $row["id_video"];  ?>
 <br>
 Titre : <?php echo $row["titre"]; ?>
 <br>
 <?php 
        echo "<a class='links' href='supprimer_video.php?id=$id_video'  onclick='if (confirm(&quot;Voulez vous vraiment supprimer le photo ?&quot;)) { return true; } return false;'>"; 
		echo " <img src='img/del.png' width='30' height='30'></img> </a>";                    
			
        ?>
 <br><br>
   <object type="text/html" data="http://www.youtube.com/embed/<?php echo $row["ident"]; ?>" style="width:500px;height:350px;"></object>
<br><br>


<?php } ?>
</div>				
				
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
