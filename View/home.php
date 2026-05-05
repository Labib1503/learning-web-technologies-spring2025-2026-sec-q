<?php
if(!isset($_COOKIE['status'])){
    header('location: login.html');
}
$role = $_COOKIE['status'];
?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Welcome Home!</h1>
        <?php if($role == "admin"){?>
            <a href = 'user_list.php'>User List</a> |
        <?php } ?>
        <?php if($role == "user"){?>
            <a href = 'product.php'>View Products</a> |
        <?php } ?>
        <a href = '../Controller/logout.php'>Logout</a>
    </body>
</html>
