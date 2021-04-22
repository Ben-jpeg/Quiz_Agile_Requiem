<?php 
  require 'components/header.php';
?>

<div id="bloc-centre">
    <img src="./img/velo.png" alt="Cycliste">
    <h1>Quiz</h1>
  
   <?php 
   require 'database/connexion_bdd.php';

    // Affiche 1 définition aléatoire de la base de données

    $requete = $bdd->query("SELECT * FROM  `words` ORDER BY rand() LIMIT 1");
    
    $definition = $requete->fetch();
    $bonne_reponse =  $definition['wordname'];
    echo '<p class="definition">'. $definition['definition'] .'</p>';
    

    $id = $definition['id'];
    
    // Affiche 3 mots aléatoires de la base de données
    $requete = $bdd->query("SELECT * FROM  `words` WHERE id != $id ORDER BY rand() ");
    
    for ($i= 0; $i < 3; $i++) {

      $donnees = $requete->fetch();
      $tableau[] = $donnees['wordname'];
      // echo($tableau[$i] ) .'<br />'  ;
      }
      array_push($tableau, $bonne_reponse);
      shuffle($tableau);
//formulaire DEBUT --->
   echo '<form action="" method="POST">';
   echo '<input type="hidden" name="idquestion" value='.$id.'>';
      foreach ($tableau as $reponse ) {

        echo '<input required value="'. $reponse .'" name="reponse" type="radio"> <label class="reponse" for="'. $reponse . '">'. $reponse . '</label>';
      
        }

        
//btn radio (input)
echo '<button type="submit" name="valider">Valider</button>';

session_start();
  echo '</form>';
//formulaire FIN --->


  if (isset($_POST["valider"])){

    $idquestion = $_POST["idquestion"];

    $requete = $bdd->query("SELECT * FROM  `words` WHERE id = ".$idquestion."");
    
    $donnees = $requete->fetch();
    $bonne_reponse = $donnees['wordname'];

    if ($_POST["reponse"] != $bonne_reponse){
      
        echo "<p style=color:red;font-weight:bold;font-size:25px;text-align:center>Mauvaise réponse</p>";
        echo "<br>";

        // header( "refresh:5;" ); Rafraichit automatiquement la page après un délai
        
        echo '<br>';
        // echo $_POST['reponse'];
        // echo '<br>';
        // echo $bonne_reponse;
    } else {
        echo "<p style=color:green;font-weight:bold;font-size:25px;text-align:center>Bonne réponse</p>" ;
        echo "<br>";
    }
  }

  if(!isset($_SESSION['counter'])) {
    $counter = $_SESSION['counter'] = 0;
  }
  
  if(isset($_POST['valider'])) {
    ++$_SESSION['counter'];

  }         
  echo $_SESSION['counter'];
  //formulaire FIN --->

  if($_SESSION['counter']>=10){
    session_destroy();
    $_SESSION['counter'] = 0;

  }
    ?>
  </div>

<?php 
  require 'components/footer.php';
?>





