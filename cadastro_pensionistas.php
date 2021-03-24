<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
 session_name("teste");
 session_start();

   //Faz retornar ao formulário de cadastro sem patrimonio depois enviar o formulário na página de cadastros.
 $_SESSION['formulario'] = 3;

// cria a conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');

// recebe as informações que foram enviadas pelo formulário
$nome_instituidor = $_POST["nome_instituidor"];
$tipo_instituidor = $_POST["tipo_instituidor"];
$data_obito = $_POST["data_obito"];
$cpf_instituidor = $_POST["cpf_instituidor"];
$matricula_instituidor = $_POST["matricula_instituidor"];
$pis_pasep_instituidor = $_POST["pis_pasep_instituidor"];
$sexo_instituidor = $_POST["sexo_instituidor"];
$dependentes_aposentado = $_POST["dependentes_aposentado"];
$data_nascimento_instituidor = $_POST["data_nascimento_instituidor"];
$nome_pensionista = $_POST["nome_pensionista"];
$matricula_pensionista = $_POST["matricula_pensionista"];
$pis_pasep_pensionista = $_POST["pis_pasep_pensionista"];
$sexo_pensionista = $_POST["sexo_pensionista"];
$cpf_pensionista = $_POST["cpf_pensionista"];
$data_nascimento_pensionista = $_POST["data_nascimento_pensionista"];
$data_inicio_pensao = $_POST["data_inicio_pensao"];
$valor_pensao = $_POST["valor_pensao"];
$tipo_relacao_pensionista = $_POST["tipo_relacao_pensionista"];
$valor_total_pensao = $_POST["valor_total_pensao"];
$valor_pct_quota = $_POST["valor_pct_quota"];
$valor_contribuicao_pensao = $_POST["valor_contribuicao_pensao"];
$valor_compens_previd = $_POST["valor_compens_previd"];
$duracao_pensionista = $_POST["duracao_pensionista"];
$condicao_pensionista = $_POST["condicao_pensionista"];
$tempo_beneficio = $_POST["tempo_beneficio"];

// recebe as informações que foram enviadas pelo formulário
$sql = "INSERT INTO pensionistas (nome_instituidor, tipo_instituidor, matricula_instituidor, cpf_instituidor, pis_pasep_instituidor, sexo_instituidor, data_nascimento_instituidor, data_obito_instituidor, nome_pensionista, matricula_pensionista, cpf_pensionista, pis_pasep_pensionista, sexo_pensionista, data_nascimento_pensionista, tipo_relacao_pensionista, data_inicio_pensao, valor_pensao, valor_total_pensao, valor_pct_quota, valor_contribuicao, valor_compens_previd, condicao_pensionista, duracao_beneficio, tempo_beneficio)
 VALUES ('$nome_instituidor', '$tipo_instituidor', '$matricula_instituidor', '$cpf_instituidor', '$pis_pasep_instituidor', '$sexo_instituidor', '$data_nascimento_instituidor', '$data_obito', '$nome_pensionista', '$matricula_pensionista', '$cpf_pensionista', '$pis_pasep_pensionista', '$sexo_pensionista', '$data_nascimento_pensionista', '$tipo_relacao_pensionista', '$data_inicio_pensao', '$valor_pensao', '$valor_total_pensao', '$valor_pct_quota', '$valor_contribuicao_pensao', '$valor_compens_previd', '$condicao_pensionista', '$duracao_pensionista', '$tempo_beneficio')";

mysqli_query($conexao, $sql) or die(' Erro na query:' . $sql . ' ' . mysqli_error($conexao));

/*if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}*/


//envia para a página de cadastro de equipamentos 
header('Location:http://localhost/IMPRESB/cadastro_pessoas.php');

?>