<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1> My Profile </h1>

    <div class = "container">
        <div class="card" style="width: 24rem;">
            <img src="./images/IMG_9569.JPG" class="card-img-top img-thumbnail" width = 500 height = 600 alt="Profile picture">
            <div class="card-body">

                <?php 
                    include_once "db-connect.php";
                    $logged_in_user = $_SESSION['username'];
                    $sql = "SELECT * FROM users WHERE username = '$logged_in_user'";
                    $result = $db_connect -> query($sql);
                    $row = $result -> fetch_assoc();
                ?>
                <div> 
                    <form action = "profile.php" method = post>
                        <input type = "text" name = "username" value = "<?php echo $row['username'] ?>">
                        <input type = "submit" name = "update" value = "Update">
                    </form>  
                </div>
                <?php 
                    if (isset($_POST['update'])) {

                        $username = $_POST ['username'];
                        include_once "db-connect.php";
                        //$logged_in_ID = $_SESSION['User_ID'];
                        $sql = "UPDATE users SET username = '$username' WHERE User_ID = '1'"; 
                        if ($db_connect -> query($sql) === TRUE) {
                            echo "Username updated";
                        }else {
                           echo "Update failed";
                        }
                    }
                ?>
                <h5> <?php echo $row['email']?> <span><a href = ""> Edit </a></span> </h5>
                <h5> Reset Password </h5>
                <h5><span><a href = "delete.php?id=<?php echo $row['username']?>"> Delete Account </a></span></h5>

            </div>
        </div>
    </div>
    

</body>
</html>