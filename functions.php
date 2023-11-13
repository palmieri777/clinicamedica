<?php
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

function pesquisa($valor,$campo,$tabela) {
    $ret=-1;
    for($i=0;$i<count($tabela);$i++) {
        if($valor==$tabela[$i][$campo]) {
            if($ret<0) {
                $ret=$i;  
                break;
            }
        }
    }
    return $ret;
}

function val_usuario($user,$pass,$tab_usuario) {
    $id=pesquisa($user,1,$tab_usuario);
    if($id>=0) {
        if($pass==$tab_usuario[$id][2]) {
            return $tab_usuario[$id][3];   // retorna o perfil do usuário
        }
        else {
            return "invalido";    // Senha Inválida
        }
    }
    else {
        return "inexistente"; 
    }
}
?>