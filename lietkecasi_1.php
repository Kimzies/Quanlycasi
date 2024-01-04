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
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql);
            echo "<table border='1'>";
                echo "<tr><td>Mã ca sĩ</td><td>Tên ca sĩ</td></tr>";
                while($rows = $results->fetch_row())
                {
                    echo "<tr>";
                        //echo "<td>".$rows['MaCaSi']."</td>";
                        //echo"<td>".$rows['TenCaSi']."</td>";
                    echo "<td>".$rows[0]."</td>";
                    echo"<td>".$rows[1]."</td>";
                    echo "</tr>";
                }
            echo "</table>";
            echo "Số dòng truy xuất được". $results->num_rows; 
            //Đóng kết nối CSDL.
            $connect->close();
            

        ?>
    </body>
</html>
