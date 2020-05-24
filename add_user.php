<?php

    $db = mysqli_connect('127.0.0.1', 'root','', 'sing_in');
    if ($db == false){
        echo "connection error";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $age = (int)$_POST['age'];

        $query = "INSERT INTO users (id, first_name, last_name, email, passwords, age) VALUES (null,'$first_name','$last_name','$email','$pass',$age)";
        $result = $db -> query($query);

        if ($result == false){
            echo "insert error<br>";
            echo $db -> error."<br>";
            echo $query;
        }
        echo "<li>user has been added</li>";
        header("location: index.php");
        exit();
    }
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>ADD USERS</title>
</head>
<body>
    <div class="container m-5">
        <form action="" method="POST">
            <div>
                <label for="first_name">First Name: </label>
                <input id="first_name" type="text" name="first_name">
            </div>
            <div>
                <label for="last_name">Last Name: </label>
                <input id="last_name" type="text" name="last_name">
            </div>
            <div>
                <label for="email">Email: </label>
                <input id="email" type="email" name="email">
            </div>
            <div>
                <label for="password">Password: </label>
                <input id="password" type="password" name="password">
            </div>
            <div>
                <label for="age">Age: </label>
                <input id="age" type="number" name="age">
            </div>
            <div>
                <button class="btn btn-success">ADD USER</button>
            </div>
        </form>
    </div>
</body>
</html>
