<?php
session_start();
$con = mysqli_connect("localhost","root","","db");
$mail=$_POST['t1'];
$password=$_POST['t2'];
$req="select * from user where (email='$mail' and pass='$password')";
$res=mysqli_query($con,$req);
$req1=mysqli_fetch_array($res);
$id=$req1[0];
$r=mysqli_num_rows($res);
if ($r==0) {?>
			<script>
				alert("Email ou Mot de Passe Incorrecte");
				window.location.href="login.html";
			</script>

<?php } 


else { 
	$_SESSION["userid"] = $id;
	?>
	
	<script>
		alert("Vous etes conneté");
	</script>

<?php 
header('location:/ghassen/profile.php');
 } ?>