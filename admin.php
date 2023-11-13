<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php
    echo "admin.php";

    function lercsv($nome_arq) {
    

        $file_name = $nome_arq;
        if (($handle = fopen($file_name, "r")) !== FALSE) {
            $i=0;
            while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
                $tab_arq[$i]=$row;
                $i++;
            }
            fclose($handle);
        }
        return $tab_arq;
    }

    $tab_usuario = lercsv("tab_usuario.csv");

    function lista_usuario($tab_usuario) {
    echo "<table>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td>usuario</td>";
    echo "<td>senha</td>";
    echo "<td>perfil</td>";
    echo "</tr>";
    for($i=0;$i<count($tab_usuario);$i++) {
        echo "<tr>";
        echo "<td>";
        echo $tab_usuario[$i][0];
        echo "</td>";
        echo "<td>";
        echo $tab_usuario[$i][1];
        echo "</td>";
        echo "<td>";
        echo $tab_usuario[$i][2];
        echo "</td>";
        echo "<td>";
        echo $tab_usuario[$i][3];
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br>";
    }

    // rotina de inclusao de usuario
    $qtduser=count($tab_usuario);
    $tab_usuario[$qtduser][0]=$qtduser+1;
    $tab_usuario[$qtduser][1]="admin2";
    $tab_usuario[$qtduser][2]="admin2123";
    $tab_usuario[$qtduser][3]="admin";

    lista_usuario($tab_usuario);



    function savecsv($nome_arq,$tab_arq) {
        $handle = fopen($nome_arq,"w");

        foreach ($tab_arq as $line) {
            fputcsv($handle, $line);
        }

        fclose($handle);
    }

    savecsv("tab_usuario.csv", $tab_usuario);

?> 
</body>
</html>
