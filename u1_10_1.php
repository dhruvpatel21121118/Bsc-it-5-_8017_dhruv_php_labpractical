<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$array1 = array("Red", "Green", "Blue");

$array2 = array("Yellow", "Black", "White");


$mergedArray = array_merge($array1, $array2);

foreach($mergedArray as $array)

echo $array."<br>";
?>
</body>
</html>