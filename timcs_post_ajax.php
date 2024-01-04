<?php
    include "connect.php";
    $ten=$_POST['ten'];
    $sql = "SELECT * FROM casi where TenCaSi='$ten'";
    $results = $connect->query($sql );
    if($results->num_rows>0)
        echo "Tìm Thấy";
    else
        echo "Tìm không thấy";
?>