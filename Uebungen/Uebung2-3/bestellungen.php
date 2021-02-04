<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<table>
    <tr>
        <th>orderdate</th>
        <th>shipname</th>
        <th>shipadress</th>
        <th>ship_city</th>
       
    </tr>
<?php
$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM orders WHERE employee_id = :id");
$sql->execute(array(':id' => $id));
while($row = $sql->fetch()) {
    ?>
    <tr>
        <td><?= $row['order_date']; ?></td>
        <td><?= $row['ship_name']; ?></td>
        <td><?= $row['ship_address']; ?></td>
        <td><?= $row['ship_city']; ?></td>
        <td><a href="delete.php?id=<?= $row['id']?>">-></a></td>
    </tr>
    <?php
}
?>
</table>
