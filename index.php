<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Users</title>
</head>
<body>
<div class="container mt-5 ml-auto mr-auto">
    <h1 class="mb-5">ALL USERS</h1>
    <?php

    $db = @mysqli_connect('localhost','root','','sing_in');
    if ($db === false){
        echo "Error connecting to mysql";
    }
    $db -> query("SET NAMES 'utf8'");

    $result = $db -> query("SELECT * From users");
    if ($result == false){
        echo "Error in query";
        exit();
    }
    $users = $result -> fetch_all(MYSQLI_ASSOC);
    $i = 1;
    foreach ($users as $user){
        echo "
                <li class='list-group-item'>$i</li>
                <ul class='list-group'>
                <li class='list-group-item'>
                <a class='btn btn-primary' target='_blank' href='update.php?id=$user[id]&first_name=$user[first_name]&last_name=$user[last_name]&email=$user[email]&passwords=$user[passwords]&age=$user[age]' title='Click Here For Edit'>
                $user[first_name] $user[last_name]
                </a>
                <a href='remove.php?id=$user[id]'>
                <i class='fas fa-trash-alt fa-2x pl-3' style='color: #ff0000'></i>
                </a>
                </li>
                <br>
              </ul>";
        $i++;
    };
    ?>
</div>
<div class="container">
    <h3><a href="add_user.php"><i class="fas fa-user-plus pl-3"></i>ADD USERS</a></h3>
</div>
<!--script-->
<script src="https://kit.fontawesome.com/15068d35f7.js" crossorigin="anonymous"></script>

</body>
</html>
