<?php
    $maalbum=$_POST['maalbum'];
    include "connect.php";
    $sql = "SELECT * FROM baihat where MaAlbum='$maalbum'";
    $results = $connect->query($sql);
    echo "<table border='1' cellspacing='0'>";
    while($row= $results->fetch_row())
    {
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td><button class='delete' mabaihat='$row[0]'>Delete</button></td></tr>";
        
    }
    echo "</table>";
    $connect->close();
?>