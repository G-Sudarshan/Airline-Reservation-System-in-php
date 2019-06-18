
<html>
<head>
	<title>Flight Booked</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background="2.jpg">



<centre>
<?php

$p1=$_POST['payment'];
$f=$_POST['f'];
$l=$_POST['l'];
$a=$_POST['a'];
$d=$_POST['d'];
$mail=$_POST['mail'];



 echo"<centre><h1>FLIGHT DETAILS</h1> <br> First name : $f $l <br> Email: $mail <br> Departure City :  $d <br> Arrival City: $a <br> fight No. :JS2844 Date : 15 OCTOBER 2018 Time: 10:00:00 AM <br>Payment method : $p1 <h2 > Happy Journey!<h2><centre>";
 echo "<br><br><br><br><br><br><br><h6>This Airline Reservation System project is developed By CM 2nd Year Students Of GOVT. POLYTECHNIC NASHIK For Demonstration of Airline Reservation<br> GUIDANCE :<br> Hon.Y.B.SANAP Sir (HOD COMPUTER TECHNOLOGY DEPT. WEBPAGE DESIGNING)<br>
          Resp. Kavita Garse Mam (DATABASE MANAGEMENT SYSTEM) <br><br>Project Members :
          <br>176114 : Sudarshan Gawale<br>176126 : Karan Koli<br>166142 : Dhananjay Salunke <br>186177 : Pratik Patil <br> 176101 : Suraj Ahire <br> 186179 : Rushikesh Kurpade<br><br>TECHNOLOGIES USED: HTML,BOOTSTRAP,PHP</h6><br><br><h2>THANK YOU!</h2>";
 

?>




</centre>


	</body>
</html>