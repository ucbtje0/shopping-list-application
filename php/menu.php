<?php
include('php/connection.php');

$sql = "SELECT ref,descrip FROM Meals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<li>
			  <input type=\"checkbox\" id=\"".$row["ref"]."\" name=\"check_list[]\" value=\"".$row["ref"]."\"/>
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
