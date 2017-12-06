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

$sql = "SELECT ref,descrip FROM Meals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<li>
			  <input type=\"checkbox\" id=\"".$row["ref"]."\"/>
			  <label for=\"".$row["ref"]."\">
			  <img src=\"./pictures/".$row["ref"].".jpg\" alt=\"No Image available\" />
			  </label>			
			  <p class=\"caption\">".$row["descrip"]."</p>		
			  </li>";
		}
} else {
    echo "0 results";
}
 
$conn->close();
?>
