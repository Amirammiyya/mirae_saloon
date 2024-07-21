<html>
<head>
<title>Mirae Saloon Booking</title>
</head>
<body>
<h3 align="center">Mirae Saloon Booking</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mirae_saloon";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//create and execute query
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {

//create a table to display the record
echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
echo '<tr><td align="center"><b>No</b></td>
<td align="center"><b>Customer Name</b></td>
<td align="center"><b>Customer Contact</b></td>
<td align="center"><b>Services</b></td></tr>
<td align="center"><b>anotherServices</b></td></tr>';

// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["Bil"].'</td>';
echo '<td align="center">'.$row["customerName"].'</td>';
echo '<td align="center">'.$row["customerContact"].'</td>';
echo '<td align="center">'.$row["services"].'</td>';
echo '<td align="center">'.$row["anotherservices"].'</td>';
echo '</tr>';
}
}
else {
echo "0 results"; //if no record found in the database
}
//close connection
$conn->close();
echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>