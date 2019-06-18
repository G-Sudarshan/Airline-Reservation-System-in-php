

<!DOCTYPE html>
<html>
<head>
	<title>Accoout Created</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background="2.jpg">


<ul class="list-group">
  <li class="list-group-item list-group-item-success">Spicejet<span class="badge">Available &nbsp;&nbsp;&nbsp;&nbsp;    Rs.24,999</li>
  <li class="list-group-item list-group-item-danger">indigo<span class="badge">Already Booked!&nbsp;&nbsp;&nbsp;&nbsp;      Rs15,999</li>
  <li class="list-group-item list-group-item-danger">Go Air<span class="badge">Already Booked!&nbsp;&nbsp;&nbsp;&nbsp;      Rs.28,999</li>
  <li class="list-group-item list-group-item-danger">Jet Airways<span class="badge">Already Booked!&nbsp;&nbsp;&nbsp;&nbsp;      Rs. 35,999</li>
<li class="list-group-item list-group-item-danger">Air India<span class="badge">Already Booked!&nbsp;&nbsp;&nbsp;&nbsp;Rs.20,999 </li>
	<li class="list-group-item list-group-item-danger">Vistara Airlines<span class="badge">Already Booked! &nbsp;&nbsp;&nbsp;&nbsp; Rs. 32,999</li>
		</ul>


<?php
$a=$_POST['arrival'];
$d=$_POST['departure'];
$first_name=$_POST['fn'];
$last_name=$_POST['ln'];
$mail=$_POST['mail'];

 




$con=mysqli_connect("localhost","id7135141_sudarshan","project#11");
if($con){
mysqli_select_db($con,"id7135141_a2");

$sql="INSERT INTO spicejet(a_city,d_city,f_name,l_name,email) VALUES('$a','$d','$first_name','$last_name','$mail')";
if(mysqli_query($con,$sql)){
	
    mysqli_close($con);
}
else {
	echo "An error occured.";
}


}
else 
echo "Unable to establish database connection";

?>
<h4><center>
<form action="process4.php" method="POST">
	Select Payment Method&nbsp;&nbsp; :<br><br>
	<input type="radio" name="payment" value="Paytm">Paytm<br><br>
	<input type="radio" name="payment" value="Net Banking">Net Banking<br><br>
	<input type="radio" name="payment" value="Credit/Debit Card">Credit/Debit Card<br><br>
	<input type="radio" name="payment" value="JioMoney">JioMoney<br><br>
	<input type="radio" name="payment" value="Google Pay" pl>Google Pay<br><br>
	<input type="hidden" name="a" value="<?php echo $_POST['arrival']; ?>">
    <input type="hidden" name="d" value="<?php echo $_POST['departure']; ?>">
    <input type="hidden" name="f" value="<?php echo $_POST['fn']; ?>">
    <input type="hidden" name="l" value="<?php echo $_POST['ln']; ?>">
    <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
    

	
	
	<input type="submit" value="BOOK FLIGHT IN SPICJET" class="btn btn-success">
</form></center></h4>











	</body>
</html>