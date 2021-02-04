<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";
    }
?>

<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername"/>
    <select name="ja" >
      <option>gerg</option>
      <option>ddd</option>
      <option>die ddf</option>
      <option>du ds</option>
      <option>dich sf hebe</option>
    </select>
    <input type="submit" value="Absenden" />