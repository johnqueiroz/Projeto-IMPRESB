<?php
  session_name("teste");
  session_start();
//conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');


//verifica se o siape e a senha enviados existem e caso sejam de um mesmo usuário autoriza a entrada no sistema.
    $nome_funcionario = $_POST["nome_funcionario"];
    $CPF_funcionario = $_POST["CPF_funcionario"];
    $senha = $_POST["senha"];

    $select = "INSERT INTO `funcionario_impresb` (nome_funcionario, cpf_funcionario, senha) VALUES ('$nome_funcionario', '$CPF_funcionario', '$senha')";
    $resultado_entrada = mysqli_query($conexao, $select) or die(' Erro na query:' . $select . ' ' . mysqli_error($conexao));
  

//envia para a página de cadastro de equipamentos 
header('Location:http://localhost/IMPRESB/cadastro_funcionarios.php');

?>