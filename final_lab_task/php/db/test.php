<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    if(!$con){
        echo "DB Connection Error!";
    }
    //insert
    $sql2= "insert into users values(null, 'AIUB', 'AIUB', 'aiub@gmail.com')";
    if(mysqli_query($con, $sql2)){
        echo "Inserted";
    }else{
        echo "not added!<br>";
    }

    //select
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users =[];
    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     array_push($users, $row);
    // }

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    foreach($users as $u){
        print_r($u);
        echo "<br>";
    }
?>