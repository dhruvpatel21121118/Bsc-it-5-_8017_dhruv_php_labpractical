<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $i =array('cold','hot','rain');

    $j = array_reverse($i);

    foreach($i as $d){
        echo $d."<br>";
        
    }
    ?>
</body>
</html>