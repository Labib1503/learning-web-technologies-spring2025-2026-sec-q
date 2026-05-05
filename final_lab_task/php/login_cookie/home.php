<?php
        
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
?>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home! </h1>
        <a href='logout.php'>Logout</a>
</body>
</html>
