<?php
    $host   = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "online shop management";

    function getConnection(){
        $con = mysqli_connect(
            $GLOBALS['host'],
            $GLOBALS['dbuser'],
            $GLOBALS['dbpass'],
            $GLOBALS['dbname']
        );
        if(!$con){
            die("DB Connection Error!");
        }
        return $con;
    }
?>