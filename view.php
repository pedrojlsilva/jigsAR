<?php

$dir = scandir("grid");

$index = 0;

?>

<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="1">
<body>

<canvas id="myCanvas" width="360" height="640" style="border:1px solid #c3c3c3;"></canvas>

<script>

var elements = new Array();

<?php

foreach ($dir as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
        echo "elements[" . $index . "] =" . str_replace(".txt", "", $value) . ";\n";
        $index++;
      }
   }

?>

var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.fillStyle = "#FF0000";

//ctx.fillRect(0,0,150,75);

elements.forEach(myFunction);

function myFunction(value, index, array) {
  var indexx = value % 1440;
  var indexy = value/1440;

  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  ctx.beginPath();
  ctx.arc(indexx/4, indexy/4, 2, 0, 2 * Math.PI);
  ctx.fill();
  ctx.stroke();
}

</script>

</body>
</html>