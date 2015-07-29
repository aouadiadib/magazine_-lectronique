<?php 
session_start();
if ( ($_SESSION["login"] =="") || ($_SESSION["pass"] =="") || ($_SESSION["code"] !="xaxatunisoft")  )
{
	header("Location: index.php");
}
?>
<?php
 include ('config.php');

?>
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
border-radius: 5px; }
 </style>
 <?php
 include ('config.php');

?>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/xstyle.css" type="text/css" media="all" />
		
</head>
<body>
	 <div style=" border-radius: 8px;  width:100%;height:65px;max-width:100%;overflow:hidden;border:2px solid #22427C ;padding:0;margin:0 auto;display:block;background-color:#22427C ;" marginheight="0" marginwidth="0">


<img src="../images/home.png" width="45" height="45"></img>
<font size="+3" color="white"><b><a href="accueil.php" style="text-decoration:none;color:#FFFFFF;">Administration</a></b></font>
<a href="index.php"><img src="../images/dec.png" width="65" height="65" align="right"></img></a>

</div>
<div style=" border-radius: 8px; width:100%;height:27px;max-width:100%;overflow:hidden;border:2px solid #209D9D ;padding:0;margin:0 auto;display:block;background-color:#209D9D;" marginheight="0" marginwidth="0">

  <center>  
&nbsp;&nbsp;
<font  color="white" size="+2"><a href="contact.php" style="text-decoration:none;color:#FFFFFF;">contact</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="+2" color="white"><a href="gallerie.php" style="text-decoration:none;color:#FFFFFF;">Gallerie</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="+2" color="white"><a href="slide.php" style="text-decoration:none;color:#FFFFFF;">Slide</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="+2" color="white"><a href="projet.php" style="text-decoration:none;color:#FFFFFF;">Projet</a></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</div>

    <br> 
<div>
  

			<center><br>
        <h1 style="color: #2C75FF;  text-align: center;">Changer mot de passe</h1> <br>
	
    <br><br><br><br>
		<form method="post" action="#">
			<table>
			 
			<td><b>Mot de passe actuel</b></td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="pass" ></td>
			</tr>
                            <tr>
                                <td><b> Nouveau mot de passe</b></td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="password" name="npass" ></td>
			</tr>
                            <tr>
                                <td> <b>Retaper nouveau mot de passe</b></td>  <td>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="password" name="rnpass" ></td>
			</tr>
			<tr>
			<td></td>  <td>
			<br><br><input type="reset" value="annuler"> <input type="submit" value="modifier"> </td>
			</tr>
			</table>
			<?php
                        if ( isset ($_POST['pass']) || isset ($_POST['npass']) || isset ($_POST['rnpass'])){
						
                   if ( empty ($_POST['pass']) || empty ($_POST['npass']) || empty ($_POST['rnpass'])){
				       echo '<br><br><b>vueil remplire tous les champs</b>';
				   }
				   else{
								
                            
			
                 

			$log=$_SESSION['login'];
			$pass=$_SESSION['pass'];
			
                        
                        
                        $tpass=md5($_POST["pass"]);
			$npass=md5($_POST["npass"]);
			$rnpass=md5($_POST["rnpass"]);
                        
                        
                        if(($pass!=$tpass)){
                            echo '<br><b> ancien mot de passe incorrecte</b>';
							}
							
							

                            if ($npass!=$rnpass){
                              echo '<br><b>retaper le mot de passe corractement</b>';
                                }
								
								if (($pass==$tpass) && ($npass==$rnpass) ){
$sql = "UPDATE `admin` SET `mot_de_pass`='$npass' WHERE  login= '$log'  ";
			$result = mysql_query($sql) or die ("Error in query: $query. " . mysql_error());
                        
				if (($result)){
                                    
			 $_SESSION['pass']=$npass;
                       header('location:suc_change.php');
			
				}
                            }
                            

                        }
                        
                        }
                        
                        
                        ?>
			
			</form>
			</center>
</div>
<?php
include ('footer.php');
?>