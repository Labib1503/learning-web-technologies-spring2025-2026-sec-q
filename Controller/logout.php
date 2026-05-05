<?php
setcookie('status', '', time()-10, '/');
header('location: ../view/login.html');
?>