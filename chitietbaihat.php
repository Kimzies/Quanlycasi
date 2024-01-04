<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mabaihat=$_GET['mabaihat'];
            include "connect.php";
            $sql = "SELECT * FROM baihat where MaBaiHat='$mabaihat'";
            $results = $connect->query($sql);
            $row=$results->fetch_row();
            echo "<form method='get' action='#'>";
                echo "Mã bài hát:";
                echo "<input type='text' value='$row[0]' name='mabaihat'></input><br>";
                echo "Tên bài hát:";
                echo "<input type='text' value='$row[1]' name='tenbaihat'></input><br>";
                echo "Thể loại:";
                echo "<input type='text' value='$row[2]' name='theloai'></input><br>";
                echo "Mã Album";
                echo "<input type='text' value='$row[3]' name='maalbum'></input><br>";
                echo "<input type='Submit' name='Submit' value='Update'></input>";
            echo "</form>";
        ?>
        <?php 
            if(isset($_GET['Submit'])&&($_GET['Submit']=='Update'))
            {  $mabaihat=$_GET['mabaihat'];
               $tenbaihat=$_GET['tenbaihat'];
               $theloai=$_GET['theloai'];
               
               $maalbum=$_GET['maalbum'];
               echo $tenbaihat;
               echo $mabaihat;
               $sql = "update baihat set TenBaiHat='$tenbaihat',TheLoai='$theloai',MaAlBum='$maalbum' where MaBaiHat='$mabaihat'";
               if($connect->query($sql)>0)
                   echo "Thanh cong";
               else 
                   echo "No thanh cong";
            }
        ?>
    </body>
</html>
