<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
         body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;

        object-fit: cover;
        z-index: 0;
        background: rgba(0, 0, 0, 0.6);
        height: 500px;
      }
      .title{
        width: 350px;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 5px solid rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        gap:10px;
        padding: 10px;
        position: relative;

      }
        .title h2{
            font-size: medium;
            font-weight: 600;
            color: aliceblue;
            font-family: sans-serif;
            border-bottom: 2px solid white;
            padding: 10px;
            position:absolute;
            top:2px;

        }
        
        
        .form-control{
            width: 300px;
           height: 200px;
           position: absolute;
           top:80px;
           left:20px;
        }
        .live{
            width: 80px;
            height: 40px;
            background:white;
            border-radius:7px;
            padding: 10px;
            color:black;
            position:absolute;
            left: 240px;
            bottom:30px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action ="">
    <body>
                        <div class="title"><h2> Contacter nous </h2>
                           
                         
                            <div class="guitar">
                                <textArea type="text" name="nom" class="form-control" placeholder="...Écrivez ce que vous voulez nous dire"></textArea></div>
                                <div class="arrangement">
                                    <input type = "submit" name = "valider" id = "bouton" class="live"  value = "Envoyer">
                                 
                         
                     </div>
                 </div>
              
             
        </form>               
</body>
</html>