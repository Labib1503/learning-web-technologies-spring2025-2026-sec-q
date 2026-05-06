<?php
    require_once('db.php');

    function getAllEmployees(){
        $con       = getConnection();
        $sql       = "SELECT * FROM employee";
        $result    = mysqli_query($con, $sql);
        $employees = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($employees, $row);
        }
        return $employees;
    }

    function getEmployeeById($id){
        $con    = getConnection();
        $sql    = "SELECT * FROM employee WHERE ID='$id'";
        $result = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($result);
    }

    function addEmployee($emp){
        $con      = getConnection();
        $name     = $emp['name'];
        $contact  = $emp['contact'];
        $username = $emp['username'];
        $password = $emp['password'];
        $sql      = "INSERT INTO employee VALUES(null, '$name', '$contact', '$username', '$password')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateEmployee($emp){
        $con      = getConnection();
        $id       = $emp['id'];
        $name     = $emp['name'];
        $contact  = $emp['contact'];
        $username = $emp['username'];
        $password = $emp['password'];
        $sql      = "UPDATE employee SET Employee='$name', Contact='$contact', Username='$username', Password='$password' WHERE ID='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteEmployee($id){
        $con = getConnection();
        $sql = "DELETE FROM employee WHERE ID='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function searchEmployee($keyword){
        $con       = getConnection();
        $sql       = "SELECT * FROM employee WHERE Employee LIKE '%$keyword%' OR Contact LIKE '%$keyword%' OR Username LIKE '%$keyword%'";
        $result    = mysqli_query($con, $sql);
        $employees = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($employees, $row);
        }
        return $employees;
    }
?>