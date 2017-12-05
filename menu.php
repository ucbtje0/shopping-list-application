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
    echo "<table><tr><th>#</th><th>Meal</th><th>Serves</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>"." ".$row["ref"]." "."</td><td>"." ".$row["descrip"]." "."</td> <td>"." ".$row["nos"]." "."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
