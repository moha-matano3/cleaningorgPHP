<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
.lognav ul li {
display: inline;
padding: 60px;
}
.lognav ul{
text-align: center;
}
.lognav ul li a{
text-decoration: none;
color: white;
font-size: 25px;
}
.lognav ul li a:hover {
background-color: grey;
}
.lognav {
background-color: black;
}
.header2{
background-color: green;
}
    </style>
</head>
<body>
    <h1 class="header2"> Dashboard </h1>
    <?php echo "Welcome back ".$_SESSION['username']."..."; ?>
    <div class = "lognav">
        <ul>
            <li><a href = "dashboard.php?id=profile"> Profile </a></li>
            <li><a href = "dashboard.php?id=book"> Book our service </a></li>
            <li><a href = "dashboard.php?id=join"> Join our Team </a></li>
            <li><a href = "dashboard.php?id=done"> Previous work done </a></li>
            <li><a href = "dashboard.php?id=logout"> Log Out </a></li>
        </ul>
    </div>

</body>
</html>

<?php
    if (isset($_GET['id'])) {
        $choice = $_GET['id'];
        switch ($choice) {
            case 'profile':
                include_once "profile.php";
            break;
                
            case 'book':
                include_once "book.php";
            break;
            
            case 'join':
                include_once "join.php";
            break;
            
            case 'done':
                include_once "previous.php";
            break;

            case 'logout':
                include_once "logout.php";
            break;
            
            default:
                echo "<b> Error 404! </b>";
            break;
        }
    }
?>