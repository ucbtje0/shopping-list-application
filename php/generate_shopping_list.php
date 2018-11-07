<?php
 
include('../php/connection.php');

$checklist = $_POST['check_list'];
$qty = $_POST['number'];

$ingredients = "SELECT ingredient, SUM(quantity) AS QuantityOfIngredient FROM Ingredients WHERE ref IN(".implode(',',$checklist).") GROUP BY ingredient";
     
$result = $conn->query($ingredients);



if ($result->num_rows > 0) {              
// output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td class=\"margin\" align=center><input type=\"checkbox\"  onclick = \"toggle_highlight(this)\"></td>
            <td align=center>";
    $total_qty = $row["QuantityOfIngredient"] * $qty;
    $ceil_total_qty = ceil($total_qty);
    if ($ceil_total_qty == "0") {
      echo "";
    } else {
      echo "$ceil_total_qty";
    }
            
    echo    " "
            .$row["ingredient"].
            "</td>
          </tr>";
  }
} 
else {
  echo "<tr>
          <td align=center></td>
          <td align=center>0 results</td>";
        
}

$conn->close();
?>
