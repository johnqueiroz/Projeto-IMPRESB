<?php 
// inicia a sessao na pagina e é preciso ter em todas as outras para continuar na mesma sessao
  session_name("teste");
  session_start();
// variaveis superglobais que possibilitam o uso das mesmas em todas as partes do codigo e tem funcoes importantes para os equipamentos
  $_SESSION['formulario'] = 0;
  $_SESSION['checkbox'] = false;
  $_SESSION['formulario_localidade'] = 1;
  $_SESSION['ID_tipo'] = 0;
  $_SESSION['data_recebimento'] = date('aaaa/mm/dd');
  $_SESSION['ID_area'] = 0;
  $_SESSION['option'] = 0;
  $_SESSION['data_saida'] = date('aaaa/mm/dd');


  //gerenciamento equipamento
  $_SESSION['patrimonio'] = 0;
  $_SESSION['numero_de_serie'] = 0;
  $_SESSION['Tipo_equipamento'] = 0;
  $_SESSION['ID_status'] = 0;
  $_SESSION['area'] = 0;
  $_SESSION['ID_equipamento'] = 0;
?>

<html>
    <head>
    
      <!-- Cabeçalho da página -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

             <title>Sistema de Controle de Previdênciários</title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

             <link rel="stylesheet" href="estilo.css" type="text/css">


             <link rel="icon" type="imagem/png" href="são bento 3.png" />

    </head>

<body>
<style>
body {
  background-image: url('sb.png');
  background-repeat: no-repeat;
  
  background-size: 100% 100%;
}
</style>
        <div class="container">

 
                <br>
                <div>
                    <!---    <img src="são bento 3.png" alt="IMPRESB" style="margin-left: 3%;" height="30%" width="95%"> --->

                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
   <!-- Formulário para envio de informações de login com siape e senha -->
                <form id="ajeitada" name="form_entrada" action="entrada_impresb.php" method="POST">
                  <label class="sr-only" for="inlineFormInputSiape">CPF</label>

                 
                 
                 <input name="CPF_funcionario" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputSiape" placeholder="Seu CPF">
             
                  <label class="sr-only" for="inlineFormInputSenha">Senha</label>
                  <div class="input-group mb-2 mr-sm-2">
                   
                    <input name="senha_funcionario" autocomplete="off" type="password" class="form-control" id="inlineFormInputSenha" placeholder="Senha">
                  </div>
                
                 
                  <input type="submit" class="btn btn-primary mb-2" value="Entrar" id="ajeitada3">
               
                </form>
                
                  
                </a>
                <br>
                <br>
                <br>
                


                
        </div>
              
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    
</html>