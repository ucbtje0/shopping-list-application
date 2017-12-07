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
      
$sql = "SELECT * FROM Ingredients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1 cellpadding=\"10\">
		    <tr>
		      <th>Ingredient</th>
		      <th>Quantity</th>
		      <th>Units</th>
		    </tr>";
		  
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["ingredient"]."</td>";
        echo "<td>".$row["quantity"]."</td>";
        echo "<td>".$row["units"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
