<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function value($x)
{
    $x ++;
    echo "call by value in function : ". $x."<br>";
}
function refe($x)
{
    $x ++;
    echo "call by value in function : ". $x. "<br>";
}
$z = 10;
value($z);
echo"call by value outside :".$z. "<br>";
$b = 20;
refe($b);
echo"call by value outside :".$b. "<br>";




?>
</body>
</html>