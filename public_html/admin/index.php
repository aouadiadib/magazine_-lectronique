

<!DOCTYPE HTML>
<html>
<head>
<title>Administration</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	<style>
   
    input[type=submit] {padding:5px 15px; background:#209D9D; border:0 none;
cursor:pointer;
color: white;
-webkit-border-radius: 5px;
border-radius: 5px; }

input[type=reset] {padding:5px 15px; background:#209D9D; border:0 none;
cursor:pointer;
  color: white;
-webkit-border-radius: 5px;
border-radius: 5px; }
button {padding:5px 15px; background:#209D9D; border:0 none;
cursor:pointer;
  color: white;
-webkit-border-radius: 5px;
border-radius: 5px;

 }
form#myform label { display:inline-block; width:100px; }
form#myform input { display:inline-block; width:200px; }
form#myform input[type=submit] { color:#fff; background-color:#BA3018; }

</style>
</head>
<body>

  <div class="main"><center>
	 <br><br><br>
	      
            
                        <img src="../images/sigle.png" width="380" height="200"></img>
                 
					<h1 style="color: blue; "><font size="+2">Connexion</font></h1>
        
		
		<form id="myform" method="post" action="#">
	<p>
		<label for="idUn">Login :</label>
		<input  type="text" name="login" size="6" ><br/>
	</p>
	<p>
		<label for="idDeux">Mot de Passe :</label>
		<input  type="password" name="pass" size="6" /><br/>
 	</p>
	<p>
		<label></label>
		<input type="submit" value="Connexion"  />
 	</p>
</form>
		
			
                                <?php
include('config.php');
			if (( isset ($_POST['login'])) || (isset ($_POST['pass']))){
                            
			 if (( empty ($_POST['login'])) || (empty ($_POST['pass']))){
			 
                         echo '<br><b>Veuil remplire tous les champs </b>';
		}
		else{
                        
				$log=$_POST["login"];
				$pass=md5($_POST["pass"]);
			
			
			$sql = "SELECT  `login`,'mot_de_passe' FROM `admin` WHERE `login` = '$log' AND `mot_de_pass` = '$pass' ";
			$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
			$data = (mysql_fetch_array($result) );
                      
			if (mysql_num_rows($result) >0) {
			
	 
                                session_start();

			$_SESSION['login'] =$_POST['login']; 
			$_SESSION['pass'] =$pass;        
              $_SESSION['code']="xaxatunisoft" ;                     
				
				 echo "
                    <script>
                   location.replace('accueil.php');
                   </script>
                     ";
                                   
                        }
				else{ echo "<br><b>Erreur d'authentification</b>";}
}
			}
			
			?>
			
			
		</form>
	</center>
				  </div>
  				</div>
			
				
			
	</div>
	
	
</body>
</html>

    	
    	
            