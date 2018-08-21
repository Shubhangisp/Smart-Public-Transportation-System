<?php
$servername = "localhost";
$username = "root";
$password = "S12@patil";
$dbname = "phpmyadmin";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
 //$con=mysqli_connect("localhost","phpmyadmin","Reshma@92mo","phpmyadmin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM demo");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
