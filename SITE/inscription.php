
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Formulaire d'inscription</title>
    <link rel = "stylesheet" href = "Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<form method = "POST" action ="traitement.php">
<body>
                
                <div class="hello"><h1> Bienvenue Dans E-citoyen </h1>
                <p class="allo"> Vous pouvez créer votre compte</p>

                
                    <div class="guitar">
                        <input type="text" name="nom" id = "nom" class="form-control" placeholder="Nom" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="guitar">
                        
                        <input type="text"  name="prenom" id = "prenom" class="form-control" placeholder="Prénom" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="guitar">
                        
                        <input type="email"  name="email" id = "email" class="form-control" placeholder="E-mail" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="guitar">
                        
                        <input type="password"  id = "motdepass" name="motdepasse" class="form-control" placeholder="Mot de passe" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="guitar">
                        
                        <input type="password" id = "motdepasse" name="motdepasse" class="form-control" placeholder="Confirmer votre mot de passe" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="arrangement">
                        <input type = "submit" name = "valider" id = "bouton" class="live"  value = "Créer un compte">
                        
                      <p class="text-center">
                        Si vous avez un compte click sur :  <a href="connexion.php">Se Connecter</a>
                      </p>
                    </div>
                </form>
             
            </div>
        </div>
    </div>

  
  <script src="JS/verify.js"></script>   
  <script src="JS/sweetAlert2.js"></script> 
</body>
</html> 
