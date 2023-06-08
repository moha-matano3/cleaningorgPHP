<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include_once "navbar.php" ?>
    <?php include_once "header.php" ?>

    <div class = "reg">
        <h2> Register here </h2>

        <form action="signup.php" method = "post">
            <label> Name: </label> <input type = "text" name = "name" placeholder = "Enter your name"></br></br>
            <label> Username: </label> <input type = "username" name = "username" placeholder = "Enter your username"></br></br>
            <label> Email: </label><input type = "email" name = "email" placeholder = "Enter your email"></br></br>
            <label> Password: </label><input type = "password" name = "password" placeholder = "Create Password"></br></br>
            <input type = "submit" name = "signup" value = "Sign Up">
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST['signup'])) {
        echo "Saved in Server";
        echo "<br>";
        $name = $_POST ['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once "db-connect.php";

        $sql = "INSERT INTO users(name, username, email, password) VALUES ('$name','$username','$email','$password')";
        $db_connect -> query($sql);

    }
?>

<?php include_once "contact_footer.php" ?>