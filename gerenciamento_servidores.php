<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
session_name("teste");
session_start();
$_SESSION['formulario'] = 6;
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


             function validar_gerenciar_servidor(){
                var input_gerenciar_nome_servidor = form_gerenciamento_servidores.input_gerenciar_nome_servidor.value;
                var input_gerenciar_CPF_servidor = form_gerenciamento_servidores.input_gerenciar_CPF_servidor.value;
                var input_gerenciar_matricula_servidor = form_gerenciamento_servidores.input_gerenciar_matricula_servidor.value;
                var input_gerenciar_sexo_servidor = form_gerenciamento_servidores.input_gerenciar_sexo_servidor.value;
                var input_gerenciar_data_nascimento_servidor = form_gerenciamento_servidores.input_gerenciar_data_nascimento_servidor.value;
                var input_gerenciar_data_ingresso_serv_pub_servidor = form_gerenciamento_servidores.input_gerenciar_data_ingresso_serv_pub_servidor.value;
                var input_gerenciar_cargo_servidor = form_gerenciamento_servidores.input_gerenciar_cargo_servidor.value;

                  if(input_gerenciar_nome_servidor == "" && input_gerenciar_CPF_servidor == "" && input_gerenciar_matricula_servidor == "" && input_gerenciar_sexo_servidor == "" && input_gerenciar_data_nascimento_servidor == "" && input_gerenciar_data_ingresso_serv_pub_servidor == "" && input_gerenciar_data_ingresso_serv_pub_servidor ==""){
                    alert('Preencha algum campo.');
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

                <div style="margin-left: 39%;">
                        Gerenciamento de servidores ativos
                </div>
<br>
                <nav>

<!-- Nav que contém a variavel de sessao para setar os formulários de equipamento, equipamento sem patriônio, previsão de chegada e tipo de equipamento, respectivamente.
     Quando clica eles entram no formulário escolhido -->

                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                

                  <a class="<?php if($_SESSION['formulario'] == 6){
                    echo($_SESSION['formulario']);
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?>" id="nav-gerenciamento_servidores-tab" data-toggle="tab" href="#nav-gerenciamento_servidores" role="tab"
                      aria-controls="nav-gerenciamento_servidores" aria-selected="true" >Gerenciamento de servidores ativos</a>

                  </div>
              
                </nav>
         
               
                <div class="tab-content" id="nav-tabContent">


                <!-- Formulário de cadastro de servidores ativos que será exibido na primeira entrada na página -->
                
                                <div class="<?php if($_SESSION['formulario'] == 6){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-gerenciamento_servidores" role="tabpanel" aria-labelledby="nav-gerenciamento_servidores-tab">

                                      <div>

                                        <form id="formCard" name="form_gerenciamento_servidores" action="gerenciando_servidores.php" method="POST">

                                        <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="input_gerenciar_nome_servidor">Nome do servidor</label>
                                          <input name="gerenciar_nome_servidor" type="text" value="" class="form-control" id="input_gerenciar_nome_servidor" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_gerenciar_CPF_servidor">CPF</label>
                                          <input name="gerenciar_CPF_servidor" type="number" value="" class="form-control" id="input_gerenciar_CPF_servidor" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>
                                      
                                        <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="input_gerenciar_matricula_servidor">Matrícula</label>
                                          <input name="gerenciar_matricula_servidor" type="number" value="" class="form-control" id="input_gerenciar_matricula_servidor" placeholder="Ex.: 1234">
                                        </div>

                                        <div class="form-group col-md-6 ">
                                        <label for="input_gerenciar_sexo_servidor">Sexo</label>
                                         <select name="gerenciar_sexo_servidor" class="form-control" id="input_gerenciar_sexo_servidor">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                      </select>
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_gerenciar_data_nascimento_servidor">Data de nascimento</label>
                                         <input name="gerenciar_data_nascimento_servidor" type="date" class="form-control" id="input_gerenciar_data_nascimento_servidor">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_gerenciar_data_ingresso_serv_pub_servidor">Data de ingresso no serviço público</label>
                                         <input name="gerenciar_data_ingresso_serv_pub_servidor" type="date" class="form-control" id="input_gerenciar_data_ingresso_serv_pub_servidor">
                                        </div>
                                        </div>
                                   
                                        <div class="form-group">
                                        <label for="input_gerenciar_cargo_servidor">Cargo</label>
                                         <input name="gerenciar_cargo_servidor" type="text" class="form-control" id="input_gerenciar_cargo_servidor" placeholder="Ex.: Vigilante">
                                        </div>

                                        <input type="submit" id="botaoteste" onclick="return validar_gerenciar_servidor()" class="btn btn-primary">

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