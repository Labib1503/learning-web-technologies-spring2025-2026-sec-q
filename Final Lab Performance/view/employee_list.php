<?php
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
    require_once('../model/employeeModel.php');
    $employees = getAllEmployees();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>
    <a href='home.php'>Home</a> |
    <a href='add_employee.php'>Add Employee</a> |
    <a href='../controller/logout.php'>Logout</a>
    <br><br>

    Search: <input type="text" id="searchInput" onkeyup="searchEmployee()" placeholder="Search name, contact, username...">
    <br><br>

    <div id="searchResult"></div>

    <table border=1 id="employeeTable">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Contact</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php foreach($employees as $emp){ ?>
        <tr>
            <td><?php echo $emp['ID']; ?></td>
            <td><?php echo $emp['Employee']; ?></td>
            <td><?php echo $emp['Contact']; ?></td>
            <td><?=$emp['Username']?></td>
            <td>
                <a href="edit_employee.php?id=<?=$emp['ID']?>">EDIT</a> |
                <a href="../controller/deleteEmployee.php?id=<?=$emp['ID']?>" onclick="return confirm('Are you sure?')">DELETE</a> |
                <a href="detail_employee.php?id=<?=$emp['ID']?>">DETAILS</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <script>
        function searchEmployee(){
            var keyword = document.getElementById('searchInput').value;

            if(keyword == ''){
                document.getElementById('employeeTable').style.display = 'table';
                document.getElementById('searchResult').innerHTML = '';
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../controller/searchEmployee.php?keyword=' + keyword, true);
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById('employeeTable').style.display = 'none';
                    document.getElementById('searchResult').innerHTML = xhr.responseText;
                }
            }
            xhr.send();
        }
    </script>
</body>
</html>