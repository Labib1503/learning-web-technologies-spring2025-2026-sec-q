<?php
    require_once('../model/employeeModel.php');
    $emp = $_POST;
    if(addEmployee($emp)){
        header('location: ../view/employee_list.php');
    }else{
        echo "Failed to add employee!";
    }
?>