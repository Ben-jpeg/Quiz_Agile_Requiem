<?php


require './database/connexion_bdd.php';
require 'ajoutemot.php';

$wordname =  addslashes($_POST['wordname']);
$definition = addslashes($_POST['definition']);

$sql = "INSERT INTO words(wordname, definition) VALUES ('$wordname', '$definition' )";
          
try {
    $bdd->exec($sql);
    echo " Merci de contribuer à ce lexique !";
  }
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }




    require 'affichemot.php';


?>