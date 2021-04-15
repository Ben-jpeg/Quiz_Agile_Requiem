<?php


require './database/connexion_bdd.php';

    $email =  addslashes($_POST['email']);
    
    
    $pseudo = addslashes($_POST['pseudo']);

    $password = addslashes($_POST['motdepasse']);

    $password_crypte = password_hash($password, PASSWORD_DEFAULT);

    
    // On insère dans la table " conversation " les valeurs des inputs " pseudo " et " message "

    $sql = "INSERT INTO user(name, email, password) 
          VALUES ('$pseudo', '$email', '$password_crypte')";
          header("Location: ");

try {
    $bdd->exec($sql);
    echo " Merci de t'être inscrit";
    
    header('Location: page_connexion.php');
    
    
  }

    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }



?>