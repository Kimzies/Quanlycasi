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
                $(".macasi").change(function(){
                    macasi=$(this).val();
                    $.post("lietke_album.php",
                    {
                        macasi:macasi 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                           $(".album").html(data); 
                           /*---*/
                           $(".maalbum").change(function(){
                                maalbum=$(this).val();
                                $.post("lietke_baihat.php",
                                {
                                    maalbum:maalbum 
                                },
                                function(data,status){
                                    if(status=="success")
                                    {
                                       $(".baihat").html(data); 
                                       
                                       $(".delete").click(function(){
                                            var mabaihat = attr('mabaihat');
                                            alert("mabaihat");
                                       });
                                    }
                                }); 
                            });
                           /*----*/
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
            echo "<select class='macasi'>";
                echo "<option>Chọn ca sỹ</option>";
                while($row= $results->fetch_row())
                {
                    echo "<option value='$row[0]'>$row[1]</option>";
                }
            echo "</select>";
            $connect->close();
        ?>
        <br><br>
        <div class="album"></div><br>
        <div class="baihat"></div>
    </body>
</html>
