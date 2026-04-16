<?php
session_start();
if(!isset($_SESSION['status'])){
    header('location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <a href="profile.php">View Profile</a><br>
    <a href="edit.html">Edit Profile</a><br>
    <a href="upload.html">Change Password</a><br>
    <a href ="password.html">Change Password</a><br>
    <a href="logout.php">Logout</a>
</body> 
</html>