<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
        }

        form{
            height: 300px auto;
            margin: 0;
            border: 1px solid rgb(0, 0, 0);
        }

        #num1,#num2,#operation{
            padding: 6px;
            margin: 10px;
        }

        #in,#operation{
            padding: 10px;
            margin: 10px;
            padding-right: 145px;
        }

    </style>
</head>
<body>
    <form action="post">
        <input type="number" id="num1" placeholder="enter number">
        <br>
        <input type="number" id="num2"placeholder="enter number">
        <br>
        <select value="" id="operation">
            <option name="add" id="add">+</option>
            <option name="sub" id="sub">-</option>
            <option name="mul" id="mul">*</option>
            <option name="div" id="div">/</option>
        </select>
        <br>
        <input type="submit" value="DONE" id="in">
    </form>
        <?php
            function calculate ($num1,$num2,$operation){
                switch($operation){
                    case '+':
                        return $num1 + num2;
                    case '-':
                        return $num1 - num2;
                    case '*':
                        return $num1 * num2;
                    case '/':
                        return $num2 !=0 ? $num1 / $num2 : "Cannot Divide By Zero!!";
                    default:
                        return "Invalid Operation";
                }
            }
            if (isset($_POST['Submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                $result = calculate($num1,$num2,$operation);
                echo "<h3> Result: $result</h3>";
            }
        ?>

</body>
</html>