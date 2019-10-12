<?php

session_start();

$login = $_SESSION['usuario'];

$tamArray = count($login);
//Crio uma variável auxiliar
$msg = FALSE;
//Uso um loop para percorrer o array
for ($i = 0; $i < $tamArray; $i++) {
if ($_POST["email"] == $login[$i] ) {
$msg = TRUE;
break;
}
}

        if ($msg) {

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('E-mail já cadastrado!');
    window.location.href='cadastro.php';
    </script>");

    }


    else {
   
        if (empty($_SESSION['usuario'])) {
        $_SESSION['usuario'] = [];
    }
 
 
        array_push($_SESSION['usuario'], $_POST["email"]);
 
 
        if (empty($_SESSION['senha'])) {
        $_SESSION['senha'] = [];
    }
 
        array_push($_SESSION['senha'], $_POST["senha"]);
    
        if (empty($_SESSION['nome'])) {
        $_SESSION['nome'] = [];
    }
    
        array_push($_SESSION['nome'], $_POST["nome"]);
       
   
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Cadastro efetuado com sucesso!');
        window.location.href='cadastro.php';
        </script>");
    

}
?>