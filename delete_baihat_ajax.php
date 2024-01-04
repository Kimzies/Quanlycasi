<?php
    include "connect.php";
    $mabaihat=$_POST['mbh'];
    $sql = "DELETE FROM baihat where MaBaiHat='$mabaihat'";
    $results = $connect->query($sql );
?>