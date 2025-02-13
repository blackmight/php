<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$a = rand(1,20);
$b = rand(1,20);
if($a>$b){
    $t=$a;
    $a=$b;
    $b=$t;
  }
for ($i=0;$i < $b ; $i++) { 
    $x[]=rand($a,$b);
}
echo "Wartość a:".($a)."<br>";
echo "Wartość b:".($b)."<br>";
echo "Wartość x:".($x[0])."<br>";

echo ("<table border='1'>");
echo("<tbody>");

$f1=(2*$x[$i])-3;
$f2=pow(2*$x[$i], 2) - (3*$x[$i]);
$f3=pow($x[$i], 4) - pow($x[$i]-1, 4);

for ($i=0;$i<$x[$i];$i++) {
echo("<tr>");
echo("<td>$x[$i]</td>");
echo("<td>$f1</td>");
echo("<td>$f2</td>");
echo("<td>$f3</td>");
echo("</tr>");
}

echo("</tbody>");
echo("</table>");
?>   
</body>
</html>
