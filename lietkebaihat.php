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
                $(".delete").click(function(){
                    mabaihat=$(this).attr('mabaihat');
                    $(this).parent().parent().remove();
                    $.post("delete_baihat_ajax.php",
                    {
                        mbh:mabaihat 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                            
                        }
                    }); 
                });
                
                $(".view").click(function(){
                    mabaihat=$(this).attr('mabaihat');
                    $.post("view_baihat_ajax.php",
                    {
                        mbh:mabaihat 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                            $(".formupdate").html(data);
                            $(".update").click(function(){
                                alert("test");
                            });
                        }
                    }); 
                });
            });   
        </script>
    </head>
    <body>
        <?php
           include "connect.php";
            $sql = "SELECT * FROM baihat";
            $results = $connect->query($sql);
            echo "<table border='1' cellspacing='0'>";
                while($row= $results->fetch_row())
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td>";
                    echo "<td><button class='delete' mabaihat='$row[0]'>Delete</button>";
                    echo "<td><button class='view' mabaihat='$row[0]'>View</button>";
                    echo "</td></tr>";
                }
            echo "</table>";
            $connect->close();
        ?>
        <br>
        <div class="formupdate"></div>
    </body>
</html>
