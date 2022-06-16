<?php
echo '<table border = 1>';
$num = $_POST["input1"];
if(is_numeric($num)){
 echo'<th>数字</th>';
 echo "<td>$num\n</td>";
} else {
echo'<th>数字以外<th>';
 echo "$num\n";
}
?>
<?php
$num2 = $_POST["input2"];
if(is_numeric($num2)){
 echo'<th>数字</th>';
 echo "<td>$num2\n</td>";
} else {
 echo'<th>数字以外<th>';
 echo "$num2\n";
}
?>
<?php
$num3 = $_POST["input3"];
if(is_numeric($num3)){
 echo'<th>数字</th>';
 echo "<td>$num3\n</td>";
} else {
 echo'<th>数字以外<th>';
 echo "$num3\n";
}
?>
<?php
$num4 = $_POST["input4"];
if(is_numeric($num4)){
 echo'<th>数字</th>';
 echo "<td>$num4\n</td>";
} else {
 echo'<th>数字以外<th>';
 echo "$num4\n";
}
?>
<?php
$num5 = $_POST["input5"];
if(is_numeric($num5)){
 echo'<th>数字</th>';
 echo "<td>$num5\n</td>";
} else {
  echo'<th>数字以外<th>';
 echo "$num5";
}
echo'</table>';
?>
