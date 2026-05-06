<?php
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
    require_once('../model/employeeModel.php');
    $id  = $_GET['id'];
    $emp = getEmployeeById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <a href='employee_list.php'>Back</a> |
    <a href='../controller/logout.php'>Logout</a>
    <br><br>

    <form method="post" action="../controller/updateEmployee.php" enctype="multipart/form-data" onsubmit="return validate()">
        <fieldset>
            <legend>Edit Info</legend>
            ID:            <input type="text"     name="id"       readonly      value="<?=$emp['ID']?>"> <br><br>
            Employee Name: <input type="text"     name="name"     id="name"     value="<?=$emp['Employee']?>"> <br><br>
            Contact No:    <input type="text"     name="contact"  id="contact"  value="<?=$emp['Contact']?>"> <br><br>
            Username:      <input type="text"     name="username" id="username" value="<?=$emp['Username']?>"> <br><br>
            Password:      <input type="password" name="password" id="password" value="<?=$emp['Password']?>"> <br><br>
                           <input type="submit"   name="submit"   value="Update">
        </fieldset>
    </form>

    <script>
        function validate(){
            var name     = document.getElementById('name').value;
            var contact  = document.getElementById('contact').value;
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if(name == '' || name == null){
                alert('Employee Name cannot be empty!');
                return false;
            }
            if(contact == '' || contact == null){
                alert('Contact cannot be empty!');
                return false;
            }
            if(username == '' || username == null){
                alert('Username cannot be empty!');
                return false;
            }
            if(password == '' || password == null){
                alert('Password cannot be empty!');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>