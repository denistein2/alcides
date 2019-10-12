<?php
//INICIO A SESSÃO
session_start();
 
//Verifico se o usuário está logado no sistema
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: login.php");
}
else {
    echo "<h1>Seja bem-vindo, ".$_SESSION['email']."</h1>";


  
}


echo '<table border="1">';
echo    '<tr>';
echo        '<td>CPF</td>';


foreach($_SESSION['nome'] as $row){
    echo'<tr>';
    echo    '<td>'.$row; 
    echo '</td>';
    echo '</tr>';

}



 

echo '<a href="sair.php">Sair</a>';



echo '<table border="1">';
echo    '<tr>';
echo        '<td>CPF</td>';
echo        '<td>Nome</td>';
echo        '<td>Sexo</td>';

echo    '</tr>';
while($dado = $_SESSION->fetch_array()){
        echo'<tr>';
        echo    '<td>'; $dado['nome']; echo '</td>';
        echo    '<td>'; $dado['email'];echo '</td>';
        echo    '<td>'; $dado['senha'];echo '</td>';
            
        echo '</tr>';
} 
echo '</table>';
?>