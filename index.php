<?php 
require 'components/header.php';

   $expression = false; 
   if ($expression == true): 
  ?>

    <!-- CAS PAGE 2 BLOCS -->
    <!-- BLOC DE GAUCHE -->
      <div id="bloc-gauche">
        <h1>Ceci est un titre</h1>
        <form method="POST" action="insert.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="InputPseudo" required>
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" name="motdepasse" class="form-control" id="InputPassword" required>
          </div>
        
          <div id="button-group">
            <button type="submit" class="btn btn-primary rounded-0">Valider</button> <button class="btn rounded-0">S'enregistrer</button>
          </div>
        </form>
      </div>

    <!-- BLOC DE DROITE -->
      <div id="bloc-droite">
        <img src="./img/velo.png" alt="Cycliste">
      </div>
    <!-- FIN CAS PAGE 2 BLOCS -->
  <?php else: ?>
 
  <div id="bloc-centre">
     <img src="./img/velo.png" alt="Cycliste">
     <h1>Lexique</h1>
    
    
     <?php require 'affichemot.php';?>
  </div>
  
  <?php endif;


require 'components/footer.php'?>
