<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>QUIZ</title>
    <link rel="stylesheet" href="/assets/style.css"> 
</head>
<body>

<h1> Connectez vous</h1>

<form method="POST" action="auth.php">
  

  <div class="form-group">
    <label for="exampleInputPassword1">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="InputPseudo" placeholder="Pseudo" required>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de Passe</label>
    <input type="password" name="motdepasse" class="form-control" id="InputPassword" placeholder="Mot de passe" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<button><a href = 'deconnexion.php'>Revenir vers l'accueil</a></button>

</body>
</html>