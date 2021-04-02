<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
session_name("teste");
session_start();
$_SESSION['formulario'] = 5;
?>


<html>
    <head>
      <!-- Cabeçalho da página -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

             <title>Sistema de Controle de Previdênciários</title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

             <link rel="stylesheet" href="estilo.css" type="text/css">


             <link rel="icon" type="imagem/png" href="são bento 3.png" />

         

             <script type="text/javascript">

             // Validações feitas em javascript para os forumários de cadastramento de equipamentos, equipamentos sem patrimonio, previsão de chegada e tipo de equipamento, respectivamente.

              function validar_funcionario(){
                var input_nome_funcionario = form_funcionario.input_nome_funcionario.value;
                var input_CPF_funcionario = form_funcionario.input_CPF_funcionario.value;
                var input_senha = form_funcionario.input_senha.value;
          

                  if(input_nome_funcionario ==""){
                    alert('Preencha o campo Nome do funcionário.');
                    form_funcionario.input_nome_funcionario.focus();
                    return false;
                  }
                  if(input_CPF_funcionario ==""){
                    alert('Preencha o campo CPF do funcionário.');
                    form_funcionario.input_CPF_funcionario.focus();
                    return false;
                  }
                  if(input_senha == "" ){
                    alert('Preencha o campo de senha.');
                    form_funcionario.input_senha.focus();
                    return false;
                  }
              }





          </script>



                   



    </head>

<body>



                      

        <div class="container">
               
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <!-- Div com container para usar um certo tamanho da tela e dentro tem a navbar que é a parte azul da tela com os menus de cadastramento, busca e gereciamento e sair -->

            <a href="cadastro_pessoas.php" class="navbar-brand" style="color: aliceblue;" >Sistema de Controle de Previdênciários</a>

            <div class= "collapse navbar-collapse" id="navbarSite">
              <ul class="navbar-nav ml-auto">
      

                  
                   
              <li class="nav-item">
                            <a class="nav-link" href="relatorios.php" style="color: aliceblue;">Relátorios</a>
                        </li>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gerenciamento
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <a href="gerenciamento_servidores.php">    <input type="submit" value="Servidores" class="dropdown-item"></a>  
                                <a href="gerenciamento_aposentados.php">  <input type="submit" value="Aposentados" class="dropdown-item"></a>
                                <a href="gerenciamento_pensionistas.php">    <input type="submit" value="Pensionistas" class="dropdown-item"></a>
                                <a href="gerenciamento_dependentes.php">    <input type="submit" value="Dependentes" class="dropdown-item"></a>
                                <a href="gerenciamento_funcionarios.php">    <input type="submit" value="Funcionários IMPRESB" class="dropdown-item"></a>
                              </div>
                              </div>
                              <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastros
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="cadastro_pessoas.php">    <input type="submit" value="Cadastros previdência" class="dropdown-item"></a>
                                <a href="cadastro_funcionarios.php">    <input type="submit" value="Funcionários IMPRESB" class="dropdown-item"></a>
                              </div>
                              </div>

                          <li class="nav-item">
                            <a class="nav-link" href="index.php" style="color: aliceblue;">Sair</a>
                        </li>
              </ul>

          </div>


         

       
       

      </nav>
        <br>

                <div style="margin-left: 44%;">
                        Cadastro de funcionários
                </div>
<br>
                <nav>

<!-- Nav que contém a variavel de sessao para setar os formulários de equipamento, equipamento sem patriônio, previsão de chegada e tipo de equipamento, respectivamente.
     Quando clica eles entram no formulário escolhido -->

                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                

                  <a class="<?php if($_SESSION['formulario'] == 5){
                    echo($_SESSION['formulario']);
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?>" id="nav-funcionario-tab" data-toggle="tab" href="#nav-funcionario" role="tab"
                      aria-controls="nav-funcionario" aria-selected="true" >Funcionários do IMPRESB</a>

                  </div>
              
                </nav>
         
               
                <div class="tab-content" id="nav-tabContent">


                <!-- Formulário de cadastro de servidores ativos que será exibido na primeira entrada na página -->
                
                                <div class="<?php if($_SESSION['formulario'] == 5){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-funcionario" role="tabpanel" aria-labelledby="nav-funcionario-tab">

                                      <div>

                                        <form id="formCard" name="form_funcionario" action="cadastro_funcionario_impresb.php" method="POST">

                                        <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="input_nome_funcionario">Nome do funcionário</label>
                                          <input name="nome_funcionario" type="text" value="" class="form-control" id="input_nome_funcionario" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_CPF_funcionario">CPF</label>
                                          <input name="CPF_funcionario" type="number" value="" class="form-control" id="input_CPF_funcionario" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>
                                      


                                       
                                        <div class="form-group">
                                        <label for="input_senha">Senha</label>
                                         <input name="senha" autocomplete="off" type="password" class="form-control" id="input_senha">
                                        </div>
                                   

                                        <input type="submit" id="botaoteste" onclick="return validar_funcionario()" class="btn btn-primary">

                                        </form>

                                      </div>

                                        

                                      </div>


                  </div>
              
        </div>
              
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>