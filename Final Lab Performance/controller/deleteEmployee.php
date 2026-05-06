<?php
    require_once('../model/employeeModel.php');
    $id = $_GET['id'];
    if(deleteEmployee($id)){
        header('location: ../view/employee_list.php');
    }else{
        echo "Failed to delete employee!";
    }
?>