<?php
$server= 'localhost';
$user= 'root';
$password= '';
$db= 'coronadb';
$con = mysqli_connect($server, $user, $password, $db);
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{

	if(isset($_POST['submit'])) {

	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$symp=$_POST['coronasym'];
	$message=$_POST['message'];

	$chk="";
	foreach ($symp as $chk1 ) {
		$chk .=$chk1." ,";
	}
	$insertquery = " insert into coronacase(user, email, mobile, symp, message) values('$username', '$email', '$mobile','$chk','$message')  ";

	$query = mysqli_query($con,$insertquery);
	mysqli_close($con);
	?>
	<script >
		alert("inserted successfully");
	</script>
	<?php
	
} 

}


?>