<?php
if($_COOKIE['status'] != "user"){
    header('location: home.php');
}

$products = [
    ['name' => 'Laptop', 'price' => 50000],
    ['name' => 'Smartphone', 'price' => 20000],
    ['name' => 'Headphones', 'price' => 5000],
];
?>

<html>
    <body>
        <h1>Product List</h1>
        <a href="home.php">Back</a>
        <table border = 1>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
<?php foreach($products as $p){?>
<tr>
    <td><?php echo $p['name']; ?></td>
    <td><?php echo $p['price']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>