<?php

$db = mysqli_connect('127.0.0.1', 'root','', 'sing_in');
if ($db == false){
    echo "connection error";
}


    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['passwords'];
    $age = (int)$_REQUEST['age'];
    $id = (int)$_REQUEST['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "UPDATE users SET first_name= '$first_name', last_name= '$last_name',email='$email',passwords='$pass', age= $age where id= $id ";
    $result = $db->query($query);

    if ($result == false) {
        echo "update error<br>";
        echo $db->error . "<br>";
        echo $query;
    }
    echo "<li>user has been Updated</li>";
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
    <title>UPDATE USER</title>
</head>
<body>
    <div class="container m-5">
        <form action="" method="POST">
            <div>
                <label for="first_name">First Name: </label>
                <input id="first_name" type="text" name="first_name" value="<?= $first_name?>">
            </div>
            <div>
                <label for="last_name">Last Name: </label>
                <input id="last_name" type="text" name="last_name" value="<?= $last_name ?>">
            </div>
            <div>
                <label for="email">Email: </label>
                <input id="email" type="email" name="email" value="<?= $email ?>">
            </div>
            <div>
                <label for="passwords">Passwords: </label>
                <input id="passwords" type="password" name="passwords" value="<?= $pass ?>">
            </div>
            <div>
                <label for="age">Age: </label>
                <input id="age" type="number" name="age" value="<?= $age?>">
            </div>
            <div>
                <button class="btn btn-primary">Update USER</button>
            </div>
        </form>
    </div>
</body>
</html>