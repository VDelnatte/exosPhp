
<form method="POST", action="">
    <label for="Prénom">Prénom :</label>
        <input name="prenom" type="text" placeholder="Saisissez votre prénom" id="Prénom" required><br>
    <label for="Age">Age :</label>
        <input name="Age" type="number" placeholder="Saisissez votre age" id="Age" required><br>
    <input type="submit" value="Soumettre">
</form>


<?php
if (isset($_POST['Age']) && $_POST['Age'] >= 18) {
    echo 'Bienvenue '.$_POST['prenom'].' Vous etes majeur';
}else {
    echo 'Désolé '.$_POST['prenom'].', vous etes mineur';
}