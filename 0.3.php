
<form method="POST", action="">
    <label for="Nom">Nom :</label>
        <input name="Nom" type="text" placeholder="Saisissez votre nom" id="Nom" required><br>
    <label for="Age">Age :</label>
        <input name="Age" min="0" type="number" placeholder="Saisissez votre age" id="Age" required><br>
    <label for="Email">Email :</label>
        <input name="Email" type="email" placeholder="Saisissez votre email" id="Email" required><br>
    <input type="submit" value="Soumettre">
</form>

<?php

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if (str_contains($key, ";")) {
            echo 'Les champs doivent être exempts du caractère ";"';
        }
    }
    $string = $_POST['Nom'].', '.$_POST['Age'].', '.$_POST['Email'].'; '.PHP_EOL;
    file_put_contents('infos.txt',$string,FILE_APPEND).PHP_EOL;
    $content = file_get_contents('infos.txt');
    $array = explode(";",$content);
}

?>

<table>
    <tr>
        <td></td>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
    </tr>

<?php

    echo '<tr>'.PHP_EOL;
    echo '<th scope="row"></th>'.PHP_EOL;

    $array1 = (explode(',', $array));
        foreach ($array1 as $key => $value) {
            echo '<td>'.$value.'</td>'.PHP_EOL;
        }

    echo '</tr>';
?>

</table>
