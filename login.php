<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include_once "navbar.php" ?>
    <?php include_once "header.php" ?>
    <?php include_once "contact_footer.php" ?>

    <div class = "log">
        <h2> Log in </h2>

        <form action="login.php" method = "post">
            <label> Username: </label> <input type = "username" name = "username" placeholder = "Enter your username"></br></br>
            <label> Password: </label><input type = "password" name = "password" placeholder = "Enter Password"></br></br>
            <input type = "submit" name = "login" value = "Log in">
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once "db-connect.php";

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db_connect -> query($sql);

        if ($result -> num_rows > 0) {
            $_SESSION['username'] = $username;
            header ("Location: dashboard.php");
        } else {
            echo "Username or Password inserted is incorrect";
        }
    }
?>