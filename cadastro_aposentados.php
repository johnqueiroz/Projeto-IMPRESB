<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
 session_name("teste");
 session_start();

   //Faz retornar ao formulário de cadastro sem patrimonio depois enviar o formulário na página de cadastros.
 $_SESSION['formulario'] = 2;

// cria a conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');

// recebe as informações que foram enviadas pelo formulário
$nome_aposentado = $_POST["nome_aposentado"];//
$CPF_aposentado = $_POST["CPF_aposentado"];//
$matricula_aposentado = $_POST["matricula_aposentado"];//
$pis_pasep_aposentado = $_POST["pis_pasep_aposentado"];//
$sexo_aposentado = $_POST["sexo_aposentado"];//
$estado_civil_aposentado = $_POST["estado_civil_aposentado"];//
$data_nascimento_aposentado = $_POST["data_nascimento_aposentado"];//
$data_ingresso_serv_pub_aposentado = $_POST["data_ingresso_serv_pub_aposentado"];//
$data_inicio_aposentadoria = $_POST["data_inicio_aposentadoria"];//
$valor_aposentadoria = $_POST["valor_aposentadoria"];//
$valor_compensacao_previd = $_POST["valor_compensacao_previd"];//
$valor_contribuicao_aposentado = $_POST["valor_contribuicao_aposentado"];//
$tipo_cargo_aposentado = $_POST["tipo_cargo_aposentado"];//
$tipo_aposentadoria = $_POST["tipo_aposentadoria"];//
$dependentes_aposentado = $_POST["dependentes_aposentado"];

// recebe as informações que foram enviadas pelo formulário
$sql = "INSERT INTO aposentados (nome_aposentado, tipo_cargo_aposentado, tipo_aposentadoria, cpf_aposentado, pis_pasep_aposentado, sexo_aposentado, estado_civil_aposentado, data_nascimento_aposentado, data_ingresso_serv_pub_aposentado, data_inicio_aposentadoria, valor_aposentadoria, valor_contribuicao, valor_compensacao_previd, matricula, dependentes)
 VALUES ('$nome_aposentado', '$tipo_cargo_aposentado', '$tipo_aposentadoria', '$CPF_aposentado', '$pis_pasep_aposentado', '$sexo_aposentado', '$estado_civil_aposentado', '$data_nascimento_aposentado', '$data_ingresso_serv_pub_aposentado', '$data_inicio_aposentadoria', '$valor_aposentadoria', '$valor_contribuicao_aposentado', '$valor_compensacao_previd', '$matricula_aposentado', '$dependentes_aposentado')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}


//envia para a página de cadastro de equipamentos 
header('Location:http://localhost/IMPRESB/cadastro_pessoas.php');

?>