<?php
session_start();
include "nav.php";
require_once "db.php";
?>
<br>
<H2>Gestion des produits :</H2>
<br>

<?php

$sql = "SELECT * FROM `ordinateur` WHERE 1";
mysqli_query($mysqli, $sql);

$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($result)) {
    ?>
    <form action="modifyproduct.php" method="post">

    <input type="hidden" value="<?= $row["ID_PC"]; ?>" name="idpc">
Marque :
    <input type="text" value="<?= $row["Marque"]; ?>" name="marque">
Prix : 
    <input type="text" value="<?= $row["Prix"]; ?>" name="prix">
Nom :
    <input type="text" value="<?= $row["Nom"]; ?>" name="nom">
Nom complet :
    <input type="text" value="<?= $row["NomComplet"]; ?>" name="nomcomplet">
Configuration :
    <input type="text" value="<?= $row["Config"]; ?>" name="config">

    <input class="edit" type="submit" name="submit" value="Modifier">
    </form>
    
    <br> <?php
    ?> <br> <?php
    ?> <br> <?php


}

?>



<?php
include "footer.php";
?>