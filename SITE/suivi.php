<?php   

include "conn.php";
session_start();
$IDuser = $_SESSION['IDuser'];


$sql = "SELECT document.nomd, document.dated,document.IDstatus,document.IDuser,document.id,status.type FROM `document` INNER JOIN status ON status.IDstatus = document.IDstatus
WHERE document.IDuser='$IDuser'" ;
$res= mysqli_query($conn, $sql);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        display: flex;
        justify-content: center;
        align-content: center;


    }

    .suivre h1 {
        text-align: center;

        width: 100%;
    }

    .suivre {
        width: 100%;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: 50px 70px 700px;

    }

    .suivre #ul {
        display: grid;
        grid-template-columns: 40% 20% 20% 20%;
        grid-template-rows: 100%;
        justify-items: center;
        align-items: center;
        width: 1350px;

    }

    .suivre #ul li {

        border-bottom: 3px solid black;
        list-style-type: none;

    }

    .suivre #ul #de {
        border: none;
        list-style-type: none;
        width: 55%;
        margin-top: -30px;
        font-size: 18px;
    }

    .suivre #ul #da {
        border: none;
        list-style-type: none;
        width: 100%;
        margin-right: -170px;
        margin-top: -30px;
        font-size: 18px;
    }

    .suivre #ul #di {
        border: none;
        margin-top: -30px;
        margin-right: 10px;
        font-size: 18px;
    }

    .suivre #ul #du {
        border: none;
        margin-top: -30px;
        margin-right: -15px;
        font-size: 18px;
    }

    .suivre #ul li h1 {

        font-size: inherit;
        text-align: left;
        font-size: inherit;
        text-align: left;
        width: fit-content;
        border-bottom: 3px solid black;
    }

    .suivre .music {
        width: 100%;
        height: 100%;

    }

    .suivre .music ul {
        display: grid;
        grid-template-columns: 40% 20% 20% 20%;
        grid-template-rows: 50px;
        justify-items: center;
        align-items: center;
        width: 100%;
        /*border-bottom: 3px solid rgba(0, 0, 0, 0.482);*/
    }

    .suivre .music ul li {
        width: 100%;
        height: 100%;

    }

    .suivre .music ul #le {

        margin-left: 230px;
        list-style-type: disclosure-closed;
        font-size: 18px;


    }

    .suivre .music ul #li {

        background: red;
        color: white;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        margin-right: 220px;
        margin-top: -35px;
        display: flex;
        justify-content: center;
        align-items: center;


    }

    .suivre .music ul #lo {

        background: green;
        color: white;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        margin-right: 220px;
        margin-top: -35px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .suivre .music ul #loo {

        background: #e85aaf;
        color: white;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        margin-right: 220px;
        margin-top: -35px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .suivre .music ul #bo {
        color: rgb(117, 182, 247);
        list-style-type: none;
        font-size: 18px;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="suivre">
        <h1> Les document demmandés</h1>

        <ul id="ul">
            <li id="de">
                <h1>Nom du document</h1>
            </li>
            <li id="di">
                <h1>Date</h1>
            </li>
            <li id="du">
                <h1>Status</h1>
            </li>
            <li id="da">
                <h1>Telecharger le document</h1>
            </li>
        </ul>
        <div class="music">
            <?php
if(mysqli_num_rows($res)>0){
foreach ($res as $row) {
    # code...

?>
            <ul>
                <li id="le"><?=$row["nomd"]?></li>
                <li><?=$row["dated"]?></li>
                <?php
                    if($row['IDstatus']==1 ){
                        
                    ?>
                <li id="lo"><?=$row['type']?></li>
                <?php
                    }elseif ($row['IDstatus']==2) {
                        ?>
                <li id="loo"><?=$row['type']?></li>
                <?php 
                    
                    }else{
                        ?>
                <li id="li"><?=$row['type']?></li>
                <?php
                    }
                    ?>

                <?php
                    if($row['IDstatus']==1){
                  
                        ?>
                <li id="bo"><a href="#"> Telecharger</a></li>
                <?php
                    }else {
                        ?>
                <li>Document non disponible</li>
                <?php
                    }
                    ?>
            </ul>
            <?php 
}
}
 ?>
        </div>


</body>

</html>