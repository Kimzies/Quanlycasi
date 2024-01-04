<html>
<head>
    <meta charset="UTF-8">
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("#macasi").change(function(){
    var macasi=$("#macasi").val();  
    $.post("lietkealbum1.php",
    {
      ma:macasi, 
      ten:macasi 
    },
    function(data,status){
      if(status=="success")
      {
        $("#iddiv").html(data);  
        $("#maalbum").change(function(){
            var maalbum=$("#maalbum").val();
            $.post("lietkebaihat.php",
            {
                maalbum:maalbum 
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
        $str="select * from casi";
        $rs=mysql_query($str,$conn);
        echo "Ca sĩ:";
        echo "<select id='macasi'>"; 
        echo "<option>Chọn ca sĩ</option>";
        while($row=  mysql_fetch_row($rs))
        {
            echo "<option value='$row[0]'>".$row[1]."</option>";
        }
        echo "</select>";
   
    ?>
   <br>
   <div id="iddiv"></div><br>
   <div id="iddiv1"></div>
</body>
</html>
