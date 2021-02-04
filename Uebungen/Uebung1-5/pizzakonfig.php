<?php
    session_start();

    $zutaten = $_SESSION['zutaten'];

    if (! is_array($zutaten)) {   

        $_Session['zutaten']= [];
        $zutaten=[];
    }
    $neue_zutat = $_Post['topping'];

    $zutaten=$neue_zutat;

    $_Session['zutaten']= $zutaten;
?>

<p>Pzza konfigurator</p>

<p>deine pizza besteht aus folgedem toppnigs</p>

<?php
foreach($zutaten as $zutat){  
if ($zutat){  
echo "<li>{ $zutat }<li>";
}

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
    