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
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $(".tencasi").change(function(){
                    macasi=$(this).val();
                    //alert(macasi);
                    $.post("lietkealbum_ajax.php",
                    {
                        mcs:macasi 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                            $(".danhsachalbum").html(data);
                        }
                    }); 
                });
            });   
        </script>
    </head>
    <body>
        <?php
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql);
            echo "Tên ca sĩ:";
            echo "<select class='tencasi'>";
                while($row= $results->fetch_row())
                {
                    echo "<option value='$row[0]'>$row[1]</option>";
                }
            echo "</select>";
            $connect->close();
        ?>
        <div class="danhsachalbum">Danh sach album</div>
    </body>
</html>
