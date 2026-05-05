<?php
session_start();
if($_COOKIE['status'] != "admin"){
    header('location: home.php');
}

$users = [
    ['id' => 1, 'name' => 'Labib', 'email' => 'labib@gmail.com'],
    ['id' => 2, 'name' => 'Shahriar', 'email' => 'shahriar@gmail.com'],
    ['id' => 3, 'name' => 'Sammow', 'email' => 'sammow@gmail.com']

];

$_SESSION['users']=$users;
?>

<html>
    <body>
        <h1>User List</h1>
        <a href='home.php'>Back</a> |
        <a href='../Controller/logout.php'>Logout</a>
        
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

<?php foreach($users as $user){?>
<tr>
    <td><?php echo $u['id']; ?></td>
    <td><?php echo $u['name']; ?></td>
    <td><?php echo $u['email']; ?></td>
    <td>
        <a href="edit.php?id=<?= $user['id'] ?>">Edit</a> 
    </td>
</tr>
<?php } ?>
</table>
</body> 
</html>