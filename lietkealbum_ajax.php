<?php
    include "connect.php";
    $macasi=$_POST['mcs'];
    $sql = "SELECT * FROM album where MaCaSi='$macasi'";
    $results = $connect->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Tên Album</th><th>Mã Album </th></tr>";
    while($row=$results->fetch_row())
    {
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        
    }
    echo "</table>";
?>
