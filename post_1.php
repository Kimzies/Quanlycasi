<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("#makhoa").change(function(){
    var makhoa=$("#makhoa").val();  
    $.post("post.php",
    {
      ma:makhoa
    },
    function(data,status){
      if(status=="success")
      {
        $("#iddiv").html(data);  
        $("#mabomon").change(function(){
            var mabomon=$("#mabomon").val();
            $.post("lkgv.php",
            {
                mabm:mabomon
            },
            function(data,status){
                $("#iddiv1").html(data);
            })
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
   $str="select * from khoa";
   $rs=mysql_query($str,$conn);
   echo "Khoa:";
   echo "<select id='makhoa'>";
   echo "<option> Chọn khoa</option>";
   while($row=  mysql_fetch_row($rs))
   {
       echo "<option value='$row[0]'>".$row[1]."</option>";
   }
   echo "</select>";
   
?>
   <br>
   <div id="iddiv"></div>
   <div id="iddiv1"></div>
    
</body>
</html>
