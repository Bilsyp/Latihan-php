<?php
$servername = "localhost";
$username  = "STIGER-R1";
$password  = "5678";
$database = "phpdasar";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo die("Connection failed" . mysqli_connect_error($conn));
} else {
    echo "<h1>Connected</h1>";
}

function query($query)
{

    global $conn;
    $row = [];

    $result = mysqli_query($conn, $query);

    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }

    return $row;
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>