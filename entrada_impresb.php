<?php
  session_name("teste");
  session_start();
//conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'impresb');


//verifica se o siape e a senha enviados existem e caso sejam de um mesmo usuário autoriza a entrada no sistema.
if(isset($_POST["CPF_funcionario"]) && isset($_POST["senha_funcionario"])){
    $CPF_funcionario = $_POST["CPF_funcionario"];
    $senha_funcionario = $_POST["senha_funcionario"];

    $select = "SELECT * FROM `funcionario_impresb` WHERE cpf_funcionario = '$CPF_funcionario' AND senha = '$senha_funcionario'";
    $resultado_entrada = mysqli_query($conexao, $select) or die(' Erro na query:' . $select . ' ' . mysqli_error($conexao));
    $num = mysqli_num_rows($resultado_entrada);

    if($num == 1){
        echo'<script type="text/javascript">window.location = "cadastro_pessoas.php"</script>';
    }else{

        echo '<script type="text/javascript"> alert("CPF ou senha incorretos");</script>';
        echo'<script type="text/javascript">window.location = "index.php"</script>';

    }

}

?>