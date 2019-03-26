<?php
$rows = 5;
$columns = 3;
$i = 1;
$j = 1;

echo "<table border='1'>";
while ($i <= $rows)
{ //row count
    echo "<tr>";
    $j =1;
    while ($j <= $columns)
    {//column count
        echo "<td>$i,$j</td>";
        $j++;
    }
  echo "</tr>";
  $i++;
}
echo "</table>";
?>
