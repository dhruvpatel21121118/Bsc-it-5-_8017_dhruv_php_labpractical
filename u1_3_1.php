<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 258;
        function local_var(){
            $num =45;
            echo"local variable:".$num ."<br>";
            global $a;
            echo"global variable:".$num;

        }
        local_var();

    ?>
</body>
</html>