<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
 session_name("teste");
 session_start();

   //Faz retornar ao formulário de cadastro sem patrimonio depois enviar o formulário na página de cadastros.
 $_SESSION['formulario'] = 4;

// cria a conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');

// recebe as informações que foram enviadas pelo formulário
$nome_dependente = $_POST["nome_dependente"];
$CPF_dependente = $_POST["CPF_dependente"];
$data_nascimento_dependente = $_POST["data_nascimento_dependente"];
$sexo_dependente = $_POST["sexo_dependente"];
$tipo_dependencia = $_POST["tipo_dependencia"];
$condicao_dependente = $_POST["condicao_dependente"];
$cpf_dependente_serv_ativo = $_POST["cpf_dependente_serv_ativo"];
$CPF_dependente_aposentado = $_POST["CPF_dependente_aposentado"];
$cpf_dependente_pensionista = $_POST["cpf_dependente_pensionista"];

if(isset($_POST["cpf_dependente_serv_ativo"])){
  $cpf_dependente_serv_ativo = $_POST["cpf_dependente_serv_ativo"];
}else{
  $cpf_dependente_serv_ativo = 0;
}

if(isset($_POST["CPF_dependente_aposentado"])){
  $CPF_dependente_aposentado = $_POST["CPF_dependente_aposentado"];
}else{
  $CPF_dependente_aposentado = 0;
}

if(isset($_POST["cpf_dependente_pensionista"])){
  $cpf_dependente_pensionista = $_POST["cpf_dependente_pensionista"];
}else{
  $cpf_dependente_pensionista = 0;
}

// recebe as informações que foram enviadas pelo formulário
$sql = "INSERT INTO dependente (nome_dependente, cpf_dependente, data_nascimento_dependente, sexo_dependente, condicao_dependente, tipo_dependencia, cpf_aposentado, cpf, cpf_pensionista)
 VALUES ('$nome_dependente', '$CPF_dependente', '$data_nascimento_dependente', '$sexo_dependente', '$condicao_dependente', '$tipo_dependencia', '$CPF_dependente_aposentado', '$cpf_dependente_serv_ativo', '$cpf_dependente_pensionista')";

$dados = mysqli_query($conexao, $sql) or die(' Erro na query:' . $sql . ' ' . mysqli_error($conexao));

//envia para a página de cadastro de equipamentos 
header('Location:http://localhost/IMPRESB/cadastro_pessoas.php');

?>