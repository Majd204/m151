
<?php
require 'DB.php';
$db = DB::get();
?>


<table>
<tr>
    <td><b>id</b></td>
    <td><b>surname</b></td>
    <td><b>lastname</b></td>
    <td><b>Job</b></td>
    
</tr>
<?php


$sql = "SELECT * FROM customers";
foreach (select($sql,[]) as $row) { ?>
<table>
<tr>
<td><?= $row['id'];?></td>
<td><?= $row['first_name'];?></td>
<td><?= $row['last_name'];?></td>
<td><?= $row['job_title'];?></td>
</tr>
</table>
<?php
}
?>