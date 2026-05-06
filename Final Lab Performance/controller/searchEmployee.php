<?php
    require_once('../model/employeeModel.php');
    $keyword   = $_GET['keyword'];
    $employees = searchEmployee($keyword);
?>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Contact</th>
        <th>Username</th>
        <th>Action</th>
    </tr>
    <?php if(count($employees) == 0){ ?>
    <tr><td colspan=5>No employee found!</td></tr>
    <?php } ?>
    <?php foreach($employees as $emp){ ?>
    <tr>
        <td><?=$emp['ID']?></td>
        <td><?=$emp['Employee']?></td>
        <td><?=$emp['Contact']?></td>
        <td><?=$emp['Username']?></td>
        <td>
            <a href="../view/edit_employee.php?id=<?=$emp['ID']?>">EDIT</a> |
            <a href="deleteEmployee.php?id=<?=$emp['ID']?>" onclick="return confirm('Are you sure?')">DELETE</a> |
            <a href="../view/detail_employee.php?id=<?=$emp['ID']?>">DETAILS</a>
        </td>
    </tr>
    <?php } ?>
</table>