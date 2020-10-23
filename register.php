<?php
$con=mysqli_connect("localhost","root","","db");
$nam=$_POST['t1'];
$mail=$_POST['t2'];
$adresse=$_POST['t3'];
$phone=$_POST['t4'];
$password=$_POST['t5'];
$occupation=$_POST['op'];
$req="select * from user where email='$mail' ";
$res=mysqli_query($con,$req);
$r=mysqli_num_rows($res);
if ($r!=0) {?>
			<script>
				alert("email already registred");
				window.location.href="register.html";
			</script>

<?php } 

else {
	$req1="insert into user (name,email,pass,phone,adresse,occupation) values ('$nam','$mail','$password','$phone','$adresse','$occupation');";
	$res1=mysqli_query($con,$req1); ?>
	<script>
		alert("registration complete");
		location='login.html';
	</script>
	

<?php
}

?>