

<!DOCTYPE html>

<html>
<head>
	<title>Accoout Created</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background="2.jpg">
	<h4> <center><form action="process3.php" method="POST">

		 Departure City :<select name="departure" placeholder="from" required="">
	<option value="">From</option>
	<option value="AIP">Adampur (AIP)</option>
	<option value="AMD">Ahmedabad (AMD)</option>
	<option value="ATQ">Amritsar (ATQ)</option>
	<option value="IXB">Bagdogra (IXB)</option>
	<option value="BKK">Bangkok (BKK)</option>
	<option value="BLR">Bengaluru (BLR)</option>
	<option value="IXC">Chandigarh (IXC)</option>
	<option value="MAA">Chennai (MAA)</option>
	<option value="CJB">Coimbatore (CJB)</option>
	<option value="CMB">Colombo (CMB)</option>
	<option value="DED">Dehradun (DED)</option>
	<option value="DEL">Delhi (DEL)</option>
	<option value="DAC">Dhaka (DAC)</option>
	<option value="DHM">Dharamshala (DHM)</option>
	<option value="DIB">Dibrugarh (DIB)</option>
	<option value="DXB">Dubai (DXB)</option>
	<option value="GOI">Goa (GOI)</option>
	<option value="GOP">Gorakhpur (GOP)</option>
	<option value="GAU">Guwahati (GAU)</option>
	<option value="HKG">Hong Kong,Intl Apt, SAR China (HKG)</option>
	<option value="HBX">Hubli (HBX)</option>
	<option value="HYD">Hyderabad (HYD)</option>
	<option value="JLR">Jabalpur (JLR)</option>
	<option value="JAI">Jaipur (JAI)</option>
	<option value="JSA">Jaisalmer (JSA)</option>
	<option value="IXJ">Jammu (IXJ)</option>
	<option value="JDH">Jodhpur (JDH)</option>
	<option value="KBL">Kabul (KBL)</option>
	<option value="IXY">Kandla (IXY)</option>
	<option value="KNU">Kanpur (KNU)</option>
	<option value="KQH">Kishangarh (KQH)</option>
	<option value="COK">Kochi (COK)</option>
	<option value="CCU">Kolkata (CCU)</option>
	<option value="CCJ">Kozhikode (CCJ)</option>
	<option value="IXL">Leh (IXL)</option>
	<option value="IXM">Madurai (IXM)</option>
	<option value="MLE">Male (MLE)</option>
	<option value="IXE">Mangaluru (IXE)</option>
	<option value="BOM">Mumbai (BOM)</option>
	<option value="MCT">Muscat (MCT)</option>
	<option value="PYG">Pakyong (PYG)</option>
	<option value="PAT">Patna (PAT)</option>
	<option value="PNY">Pondicherry (PNY)</option>
	<option value="PBD">Porbandar (PBD)</option>
	<option value="IXZ">Port Blair (IXZ)</option>
	<option value="PNQ">Pune (PNQ)</option>
	<option value="RJA">Rajahmundry (RJA)</option>
	<option value="SAG">Shirdi (SAG)</option>
	<option value="IXS">Silchar (IXS)</option>
	<option value="SXR">Srinagar (SXR)</option>
	<option value="STV">Surat (STV)</option>
	<option value="TRV">Thiruvananthapuram (TRV)</option>
	<option value="TIR">Tirupati (TIR)</option>
	<option value="TCR">Tuticorin (TCR)</option>
	<option value="UDR">Udaipur (UDR)</option>
	<option value="VNS">Varanasi (VNS)</option>
	<option value="VGA">Vijayawada (VGA)</option>
	<option value="VTZ">Vishakhapatnam (VTZ)</option>
</select>

&nbsp;&nbsp;
Arrival City:<select name="arrival" placeholder="Destination" required="">
	<option value="">Destination</option>
	<option value="AIP">Adampur (AIP)</option>
	<option value="AMD">Ahmedabad (AMD)</option>
	<option value="ATQ">Amritsar (ATQ)</option>
	<option value="IXB">Bagdogra (IXB)</option>
	<option value="BKK">Bangkok (BKK)</option>
	<option value="BLR">Bengaluru (BLR)</option>
	<option value="IXC">Chandigarh (IXC)</option>
	<option value="MAA">Chennai (MAA)</option>
	<option value="CJB">Coimbatore (CJB)</option>
	<option value="CMB">Colombo (CMB)</option>
	<option value="DED">Dehradun (DED)</option>
	<option value="DEL">Delhi (DEL)</option>
	<option value="DAC">Dhaka (DAC)</option>
	<option value="DHM">Dharamshala (DHM)</option>
	<option value="DIB">Dibrugarh (DIB)</option>
	<option value="DXB">Dubai (DXB)</option>
	<option value="GOI">Goa (GOI)</option>
	<option value="GOP">Gorakhpur (GOP)</option>
	<option value="GAU">Guwahati (GAU)</option>
	<option value="HKG">Hong Kong,Intl Apt, SAR China (HKG)</option>
	<option value="HBX">Hubli (HBX)</option>
	<option value="HYD">Hyderabad (HYD)</option>
	<option value="JLR">Jabalpur (JLR)</option>
	<option value="JAI">Jaipur (JAI)</option>
	<option value="JSA">Jaisalmer (JSA)</option>
	<option value="IXJ">Jammu (IXJ)</option>
	<option value="JDH">Jodhpur (JDH)</option>
	<option value="KBL">Kabul (KBL)</option>
	<option value="IXY">Kandla (IXY)</option>
	<option value="KNU">Kanpur (KNU)</option>
	<option value="KQH">Kishangarh (KQH)</option>
	<option value="COK">Kochi (COK)</option>
	<option value="CCU">Kolkata (CCU)</option>
	<option value="CCJ">Kozhikode (CCJ)</option>
	<option value="IXL">Leh (IXL)</option>
	<option value="IXM">Madurai (IXM)</option>
	<option value="MLE">Male (MLE)</option>
	<option value="IXE">Mangaluru (IXE)</option>
	<option value="BOM">Mumbai (BOM)</option>
	<option value="MCT">Muscat (MCT)</option>
	<option value="PYG">Pakyong (PYG)</option>
	<option value="PAT">Patna (PAT)</option>
	<option value="PNY">Pondicherry (PNY)</option>
	<option value="PBD">Porbandar (PBD)</option>
	<option value="IXZ">Port Blair (IXZ)</option>
	<option value="PNQ">Pune (PNQ)</option>
	<option value="RJA">Rajahmundry (RJA)</option>
	<option value="SAG">Shirdi (SAG)</option>
	<option value="IXS">Silchar (IXS)</option>
	<option value="SXR">Srinagar (SXR)</option>
	<option value="STV">Surat (STV)</option>
	<option value="TRV">Thiruvananthapuram (TRV)</option>
	<option value="TIR">Tirupati (TIR)</option>
	<option value="TCR">Tuticorin (TCR)</option>
	<option value="UDR">Udaipur (UDR)</option>
	<option value="VNS">Varanasi (VNS)</option>
	<option value="VGA">Vijayawada (VGA)</option>
	<option value="VTZ">Vishakhapatnam (VTZ)</option>
</select>
             
             <br/><br/>

             Departure Date:<input type="date" name="dedate" placeholder="Enter Your departure date" required=""><br><br>
              Class: <input type="radio" name="class" value="Economy" checked> Economy&nbsp;&nbsp;
                     <input type="radio" name="class" value="Business"> Business<br><br>

                     Please Eneter Your Details for CONFIRMATION:<br><br>
                     FIrst name:<input type="text" name="fn" required="" placeholder="Eneter Your first name"><br><br>
                     last name:<input type="text" name="ln" required="" placeholder="Enter Your Last name">
                     <br><br>

                     email : <input type="email" name="mail" required="" placeholder="Enter Email you used for Creating Account"><br>
                     Flight details will be conveyed on above email.
                     <br>
                     <br>
                     password: <input type="password" name="p3" required="">
                     <br><br>




		<input type="submit"  value="Search Flights" class="btn btn-success">



	</form></center></h4>



</body>
</html>