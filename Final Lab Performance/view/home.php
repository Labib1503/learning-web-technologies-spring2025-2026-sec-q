<?php
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome Admin!</h1>
    <a href='employee_list.php'>Employee List</a> |
    <a href='add_employee.php'>Add Employee</a> |
    <a href='../controller/logout.php'>Logout</a>
</body>
</html>