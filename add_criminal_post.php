<?php
// Calls for the config file
include( "config.php" );



// Insert the information
//$req = $bdd->prepare('INSERT INTO casier (nom, telephone, steam, crime, sanction) VALUES(?, ?, ?, ?, ?)');
//$req->execute(array($_POST['nom'], $_POST['telephone'], $_POST['steam'], $_POST['crime'], $_POST['sanction']));


$req = $bdd->prepare('INSERT INTO casier (nom, permis) VALUES(?, ?)');
$req->execute(array($_POST['nom'], $_POST['permis']));

$req = $bdd->prepare('INSERT INTO lspd (nom, matricule, delits, amendes, prison) VALUES(?,?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['matricule'], $_POST['delits,'], $_POST['amendes'], $_POST['prison']));

// Rediriger l'utilisateur vers les casiers judiciaires
header('Location: add.php');

?>
