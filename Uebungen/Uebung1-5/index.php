<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $select = $_POST['ja'];
        echo "Hallo {$select}!";
    }
?>

<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername"/>
    <select name="ja" >
      <option>Richi</option>
      <option>ich ha</option>
      <option>die gseit</option>
      <option>du setsch</option>
      <option>dich guet hebe</option>
    </select>
    <input type="submit" value="Absenden" />
    