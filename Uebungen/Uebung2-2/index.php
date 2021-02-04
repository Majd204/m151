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
<th>order</th>
<th>lastn  </th>
<th>firstn </th>
<th>company </th>
<th>job</th>
</tr>
</table>   
<?php
$sql = "SELECT * FROM customers";
foreach ($conn->query($sql) as $row)


{ 
  ?>
  
<tr>
<td><a href="Uebungen/Uebung2-3/bestellungen.php">orders</a></td>
 <?php
   echo $row['last_name']."<td/> <td/> ";
   echo $row['first_name']."<td/> <dr/>  ";
   echo $row['company']."<td/>  <tr/>  ";
   echo $row['job_title']."<br/> ";
   ?>
   <br> 
</tr>

  <?php
}

?>
