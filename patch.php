<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp Database</title>
    <style>
        table, td, th{
            border:1px solid;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

       
    </style>
</head>

<body>



    <?php

    $host = '172.17.0.1';
    $user = 'root';
    $pass = "heihei";
    $db = "Trucorp-db";
    $port ="3306";
    $conn =  mysqli_connect($host, $user, $pass, $db, $port);
    $sql = "SELECT * FROM data";
    $res = $conn->query($sql);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($res->num_rows > 0) {
        echo $res->num_rows;
    } else {
        echo "0000 results";
    }
    $conn->close();
    ?>

</body>

</html>