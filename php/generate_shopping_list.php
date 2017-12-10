<?php 
include('../php/connection.php');

$checklist = $_POST['check_list'];
foreach($checklist as $meal) {
//  echo $meal;
}

$ingredients = "SELECT * FROM Ingredients WHERE meal IN(".implode(',',$checklist).")";
     
$result = $conn->query($ingredients);

if ($result->num_rows > 0) {
  echo "<table border=1 cellpadding=\"10\">
    <tr>
      <th></th>
      <th>Ingredient</th>
      <th>Quantity</th>
      <th>Units</th>
    </tr>";
              
// output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><input type=\"checkbox\"/></td>";
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
