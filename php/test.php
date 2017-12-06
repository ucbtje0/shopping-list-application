<?php
$servername = "localhost";
$username = "root";
$password = "AuRe/;an";
$dbname = "Meals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Meals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
		    <tr>
		      <th></th>
		      <th>Meal</th>
		      <th>Serves</th>
		    </tr>";
		  
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><input type=\"checkbox\" name=".$row["ref"]."></td>";
        echo "<td>".$row["descrip"]."</td>";
        echo "<td>".$row["nos"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
