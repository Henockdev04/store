<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            body {
  background-color: rebeccapurple;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  font-family: "Playfair Display", serif;
  font-optical-sizing: auto;
  font-weight: bold;
  font-style: normal;
}
form {
  background-color: rgba(0, 0, 0, 0.6);
  padding: 100px;
  width:250spx;
  height: 400px;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 255);
  border-radius: 40px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap:10px;
}
.form-control {
  border-radius: 50px;
  width: 100%;
  height: 30px;
  background: transparent;
  color: aliceblue;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.2);
  
  box-sizing: border-box;
  padding: 0 30px;
  line-height: 50px
  
  
}
.live {
  position: absolute;
  
  background: transparent;
  border-radius: 40px;
  height: 40px;
  color: aliceblue;
  bottom: -70px;
  left: -50px;
}
.arrangement {
  position: relative;
}
.boy {
  text-align: center;
  color: aliceblue;
  margin-top: -50px;
  position: relative;
  

}
.guitar {
  position: relative;
  line-height: 40px;
  
}
.fa-solid {
  position: absolute;
  top: 35%;
  left: 3%;
  color:aliceblue;
  
}
h2.boy{
  top:-60px;
}
.arrangement a{
  position: absolute;
  border-bottom: none;
  
  color:aqua;
  font-size:15px;
  top: -355px;
  left: -170px;
   

}
.text-center{
  display: flex;
  max-width: 300px;
  margin-top:50px;
}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connection</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <script src="JS/sweetAlert2.js"></script>
        
    </head>
<body>  
                    <form method="POST" action="verify.php">
                    <h2 class="boy"> Connexion </h2>
                    <div class="guitar">
                        <input type="text" name="nom" id = "nom1" class="form-control" placeholder="Nom" required>
                        <i class="fa-solid fa-user"></i></span>
                    </div>
                    <div class="guitar">
                        <input type="text"  name="prenom" id = "prenom1" class="form-control" placeholder="Prénom" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                        <div class="guitar">
                            <input type="password"  name="motdepasse" id = "motpass" class="form-control" placeholder="Mot de passe" required>
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="arrangement">
                            <input type="submit" name = "valider" id="conn" class="live" value=" Se connecter" />
                            
                        </div>
</div>

                    </form>
                 
    </div>
    </div>
    </div>
    
   
</body>
<?php 
$resu = $_GET['reussi'];
        if ($resu == 1) {
           ?>
                <script>
                    Swal.fire(
                    'Mercie',
                    'Votre inscription réussi',
                    'succes'
                    )
                </script>
           <?php
        }
               if ($resu == 2) {
           ?>
                <script>
                    Swal.fire(
                    'Mercie',
                    'Votre inscription réussi',
                    'error'
                    )
                </script>
           <?php
        }
        ?>
<script src="JS/script.js"></script> 
</html>