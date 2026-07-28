<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "test");
        if($conn->connect_error)
        {
            die("Connnection Failed : " . $conn->connect_error);
        }
        $queries = [
        "SELECT SECOND(NOW()) AS Second",
        ];

        foreach($queries as $sql){
            echo"<br>";
            $result = $conn->query($sql);
            if($result){
                while($row = $result->fetch_assoc()){
                    foreach($row as $key => $value){
                        echo"<br>$key :</br> $value <br>";
                    }
                }
            }
        else 
        {
            echo "Query Error";
        }    
    }
    ?>
</body>