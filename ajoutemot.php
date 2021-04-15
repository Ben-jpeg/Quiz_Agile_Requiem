<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>QUIZ</title>
    <link rel="stylesheet" href="./assets/style.css"> 
</head>
<body>

<h1 class="saveWord"> Enregistrez un nouveau mot <br/>
        et sa définition
</h1>

<form method="POST" action="ajoutemot_bdd.php">
  

  <div class="form-group">
    <label for="exampleInputPassword1">Mot</label>
    <input type="text" name="wordname" class="form-control" id="wordname" placeholder="Mot" required>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Définition</label>
    <textarea type="text" name="definition" class="form-control" id="definition" placeholder="Définiton" required> </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter ce mot</button>
</form>

<button><a href = 'deconnexion.php'>Voir la page Lexique</a></button>
<br/>

</body>
</html>