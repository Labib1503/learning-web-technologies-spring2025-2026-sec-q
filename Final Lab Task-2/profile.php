<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username: <?php echo $_SESSION['user']['username']; ?></p><br>
    <?php if($_SESSION['user']['image'] != '')
        {?>
        <img src="<?php echo $_SESSION['user']['image']; ?>" alt="Profile Image" width="100">
        <?php}?>