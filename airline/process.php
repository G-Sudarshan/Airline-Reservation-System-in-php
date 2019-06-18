<!DOCTYPE html>
<html>
<head>
	<title>Accoout Created</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background="2.jpg">



<?php
$first_name=$_POST['fn'];
$last_name=$_POST['ln'];
$mail=$_POST['mail'];
$ps=$_POST['p2'];
$pswd=md5($ps);
$DOB=$_POST['DOB'];

//step 1 : connect t data base.
$con=mysqli_connect("localhost","id7135141_sudarshan","project#11");
if($con){
mysqli_select_db($con,"id7135141_a2");

//$sql2="SELECT * FROM User_db where email='$mail";

	//$result2=mysqli_query($con,$sql2);
	//if(mysqli_num_rows($result2)>=1)
		//{echo "User already exists";
	//	header('Location: /index.php');
		//}
	
    


//step 2: Execute query on database.
$sql = "INSERT INTO User_db(f_name,l_name,email,pswd,DOB
) VALUES('$first_name','$last_name','$mail','$pswd','DOB')";

if(mysqli_query($con,$sql)){
	echo "<center><h3>Account created  Successfully!</h3></center>";
	
    mysqli_close($con);
}
else {
	echo "An error occured.";
}


}
else 
echo "Unable to establish database connection";

?>
<center><a href="log_in.php" class="btn btn-success">Log in Here</a></center>

</body>
</html>