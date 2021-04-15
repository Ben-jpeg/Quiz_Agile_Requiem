<?php
require 'database/connexion_bdd.php';

// ici je sélectionne dans ma bdd deux colonnes de la table 'words'
$reponse = $bdd->query('SELECT wordname, definition FROM words ORDER BY ID DESC');


    while ($donnees = $reponse->fetch())
{
   echo '<p><strong>' . htmlspecialchars($donnees['wordname']) . '</strong> : ' . htmlspecialchars($donnees['definition']) . '</p>';
}


$reponse->closeCursor();
?>










