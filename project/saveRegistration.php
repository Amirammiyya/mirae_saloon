<html>
<head>
<title>Mirae Saloon booking</title>
</head>
<body>
<?php
$date = date("d-m-Y");
//get input values from form
extract($_POST);
?>
<p>Date: <b><?php print($date) ?></b></p>
<h3>MIRAE SALOON BOOKING APPOIMENT</h3>
<table>
<tr><td>Customer Name</td>
<td>:</td>
<td><b><?php print($customerName) ?></b></td>
</tr>
<tr><td>Customer Contact</td>
<td>:</td>
<td><b><?php print($customerContact) ?></b></td>
</tr>
<tr><td>Services</td>
<td>:</td>
<td><b><?php print($services) ?></b></td>
</tr>
<tr><td>anotherservices</td>
<td>:</td>
<td><b><?php print($anotherservices) ?></b></td>
</tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mirae_saloon";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
//create query
$sql = "INSERT INTO booking (customerName, customerContact, services, anotherservices) VALUES ('$customerName', '$customerContact', '$services','$anotherservices')";

//execute query
if ($conn->query($sql) === TRUE) {
    echo "Booking successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //close connection
    $conn->close();
    ?>
    <br>
    <form>
    <input type="button" name="printButton" onClick="window.print()" value="Print">
    </form>
</body>
</html>