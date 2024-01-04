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
            $macasi=$_POST['macasi'];
            include "connect.php";
            $sql = "SELECT * FROM album where MaCaSi='$macasi'";
            $results = $connect->query($sql);
            echo "<select class='maalbum'>";
                echo "<option>Chọn album</option>";
                while($row=$results->fetch_row())
                {
                    echo "<option value='$row[0]'>$row[1]</option>";

                }
            echo "</select>";
        ?>
    </body>
</html>
