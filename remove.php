<?php

$db = mysqli_connect('127.0.0.1', 'root','', 'sing_in');
if ($db == false){
    echo "connection error";
}

    $id = (int)$_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = $db -> query($query);

    if ($result == false){
        echo "insert error<br>";
        echo $db -> error."<br>";
        echo $query;
    }
    echo "user has been deleted";

    header("location: index.php");
    exit();