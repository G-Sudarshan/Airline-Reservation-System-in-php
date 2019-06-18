
<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background="2.jpg">
	<h4><center>

	<?php

$username=$_POST['u_name'];
$pswd2=$_POST['p2'];
$pswd3=md5($pswd2);

$con=mysqli_connect("localhost","id7135141_sudarshan","project#11");
if($con){
mysqli_select_db($con,"id7135141_a2");

// Main Process
$sql="SELECT pswd FROM User_db where email='$username'";

if(mysqli_query($con,$sql)){
	
	$result=mysqli_query($con,$sql);
	if (!$result){
    die(" Smething went wrong");
}
if (mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    if($row['pswd']==$pswd3){
    	echo "Log In Succesfull";
    	

    	

    }
    else
    {
    	echo "Invalid password";

    	
    }

}
	else {
		echo "NO such user is registered.";
	
	}
	
		
	
	
	
    mysqli_close($con);
}
else {
	echo "An error occured.";
	}

}
else 
echo "Unable to establish database connection";

?>



	<br><br><br><br>

<a href="book_flight.php" class="btn btn-primary">BOOK FLIGHT NOW!</a>

</center></h4>



</body>
</html>