<?php

    include "functions.php";

    $tab_usuario = lercsv("tab_usuario.csv");

    $user = $_POST["usuario"];
    $pass = $_POST["password"];
    
    
    
    $valide = val_usuario($user,$pass,$tab_usuario);
    
    if($valide=="admin") {
        header('Location: admin.php');    
    }
    else {
        if($valide=="user") {
            header('Location: home.php');  
        }
        else {
            if($valide=="guest") {
                header('Location: sobre.php');  
            }
            else {
                if($valide=="invalido") {
                    header('Location: login.php');  
                }
                else {
                    echo '
                    <!DOCTYPE html>
                    <html lang="en">
                    <body>
                        <form action="cadastro.php" method="post">
                        <p>Voce ainda nao é um usuario</p>
                        <input type="submit" value="cadastre-se"> 
                    </body>
                    </html>';
                    }
                }   
            }
        }

    echo "<br>";

?>
