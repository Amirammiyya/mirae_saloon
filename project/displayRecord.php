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
//escape special characters in a string
$advisor = mysqli_real_escape_string($conn, $_POST['customer_name']);
//create and execute query
$sql = "SELECT * FROM booking WHERE customerName= '$customer'";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo 'Selected record as the following: <br><br>';
echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
echo '<tr><td align="center"><b>No</b></td>
<td align="center"><b>Customer Name</b></td>
<td align="center"><b>Customer Contact</b></td>

<td align="center"><b>Customer Services</b></td>
<td align="center"><b>another services</b></td>
<td align="center">&nbsp&nbsp</td>
</tr>';
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["bil"].'</td>';
echo '<td align="center">'.$row["customerName"].'</td>';
echo '<td align="center">'.$row["customerContact"].'</td>';
echo '<td align="center">'.$row["services"].'</td>';
echo '<td align="center">'.$row["anotherservices"].'</td>';
echo "<td align='center'><a href='updateRecord.php?pid=$row[customerName]'> UPDATE </a>
</td>";
echo '</tr>';
}
echo '</table></p>';
}
else {
echo '<font color=red>No record found';
}
//close connection
$conn->close();
?>