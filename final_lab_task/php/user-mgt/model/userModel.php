<?php
//include_once('db.php');
require_once('db.php');

echo "test";
function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}

function addUser($user){
    $con = getConnection();

    $sql = "INSERT INTO users VALUES (
        null,
        '{$user['name']}',
        '{$user['username']}',
        '{$user['password']}',
        '{$user['email']}'
    )";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getUserById($id){
    $con = getConnection();

    $sql = "SELECT * FROM users WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    $user = mysqli_fetch_assoc($result);
    return $user;

}

function updateUser($user){
     $con = getConnection();

    $sql = "UPDATE users SET 
        name='{$user['name']}',
        username='{$user['username']}',
        password='{$user['password']}',
        email='{$user['email']}'
        WHERE id='{$user['id']}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }

}

function deleteUser($id){
     $con = getConnection();

    $sql = "DELETE FROM users WHERE id='{$id}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

