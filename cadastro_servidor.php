<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
 session_name("teste");
 session_start();

   //Faz retornar ao formulário de cadastro sem patrimonio depois enviar o formulário na página de cadastros.
 $_SESSION['formulario'] = 1;

// cria a conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');

// recebe as informações que foram enviadas pelo formulário
$nome_servidor = $_POST["nome_servidor"];
$CPF_servidor = $_POST["CPF_servidor"];
$matricula_servidor = $_POST["matricula_servidor"];
$pis_pasep_servidor = $_POST["pis_pasep_servidor"];
$sexo_servidor = $_POST["sexo_servidor"];
$estado_civil_servidor = $_POST["estado_civil_servidor"];
$data_nascimento_servidor = $_POST["data_nascimento_servidor"];
$data_ingresso_serv_pub = $_POST["data_ingresso_serv_pub"];
$cargo_servidor = $_POST["cargo_servidor"];
$valor_base_calculo_servidor = $_POST["valor_base_calculo_servidor"];
$remuneracao_servidor = $_POST["remuneracao_servidor"];
$valor_contribuicao_servidor = $_POST["valor_contribuicao_servidor"];
$tipo_cargo_servidor = $_POST["tipo_cargo_servidor"];
$criterio_elegibilidade_servidor = $_POST["criterio_elegibilidade_servidor"];
$dependentes_servidor = $_POST["dependentes_servidor"];

// recebe as informações que foram enviadas pelo formulário
$sql = "INSERT INTO servidor_ativo (nome, cpf, matricula, pis_pasep, sexo, estado_civil, data_nascimento, data_ingresso_ser_pub, cargo, valor_base_calculo, remuneracao, valor_contribuicao, tipo_cargo, criterio_elegibilidade, dependentes)
 VALUES ('$nome_servidor', '$CPF_servidor', '$matricula_servidor', '$pis_pasep_servidor', '$sexo_servidor', '$estado_civil_servidor', '$data_nascimento_servidor', '$data_ingresso_serv_pub', '$cargo_servidor', '$valor_base_calculo_servidor', '$remuneracao_servidor', '$valor_contribuicao_servidor', '$tipo_cargo_servidor', '$criterio_elegibilidade_servidor', '$dependentes_servidor')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}


//envia para a página de cadastro de equipamentos 
header('Location:http://localhost/IMPRESB/cadastro_pessoas.php');

?>