<?php
    setcookie('status', '', time()-3600);
    header('location: ../view/login.html');
?>