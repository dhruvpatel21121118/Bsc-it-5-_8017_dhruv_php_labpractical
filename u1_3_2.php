<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a =2;
        $b =5;
        $sum =$a+$b;
        $sub =$a-$b;
        $mul =$a+$b;
        $div =$a/$b;
        $mod =$a%$b;
        $exp =$a**$b;
        echo $sum. "<br>";
        echo $sub. "<br>";
        echo $mul. "<br>";
        echo $div. "<br>";
        echo $mod. "<br>";
        echo $exp. "<br>";

        
       
        echo "<br>Assignment Operators<br>";
$x = 55;
$x += 55;   
echo "After +=  : $x<br>";
$x -= 15; 
echo "After -=  : $x<br>"; 
$x *= 25;
echo "After *=  : $x<br>";   
$x /= 15;  
echo "After /=  : $x<br>"; 
?>
    
</body>
</html>