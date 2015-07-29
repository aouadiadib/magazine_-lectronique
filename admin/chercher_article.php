<?php 
include('include/header_journaliste.php')
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Recherche Article</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Recherche Article</h1>
			</div>
		</div><!--/.row-->
		<br><br>
		
		<script>
		
		</script>
		<form class="form-horizontal" id="recherche" role="form" method="post">
		<div class="form-group">
      <label for="firstname" class="col-sm-3 control-label">Chercher Article</label>
      <div class="col-sm-7">
         <input type="text" class="form-control" id="titre" name="titre" placeholder="">
      <span class="error"></span>
	  </div>
	  <div class="col-sm-2">
	
	<img id="load" width="50" src="l.gif">

	  </div>
	   </div>
		</form>
		<div id="affichage">
		
		</div>
		
			
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script>

	$("document").ready(function(){
		$("#load").hide();
	$("#titre").keyup(function(){
	  var formData=$("#recherche").serialize();
	
	var titre = $("#titre").val();
	$.ajax({
		type: "POST",
		url: "chercher.php",
		cache:false,
		data: formData,
		 beforeSend: function() {
        // setting a timeout
        $("#load").show();
    },
		success:onSucces,
		error:onErro,
		complete: function() {
        // setting a timeout
        $("#load").hide();
    },
  });
	function onSucces(data,status){
		$("#affichage").html(data);
			}
	function onErro(data,status){
		alert('erreur');
			}
	
	});
	});
	
	</script>
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
