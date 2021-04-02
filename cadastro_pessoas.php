<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
session_name("teste");
session_start();
$_SESSION['formulario'] = 1;
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

              function validar_servidor(){
                var input_nome_servidor = form_servidor.input_nome_servidor.value;
                var input_CPF_servidor = form_servidor.input_CPF_servidor.value;
                var input_matricula = form_servidor.input_matricula.value;
                var input_sexo = form_servidor.input_sexo.value;

                  if(input_nome_servidor ==""){
                    alert('Preencha o campo Nome do servidor.');
                    form_servidor.input_nome_servidor.focus();
                    return false;
                  }
                  if(input_CPF_servidor ==""){
                    alert('Preencha o campo CPF do servidor.');
                    form_servidor.input_CPF_servidor.focus();
                    return false;
                  }
                  if(input_matricula == ""){
                    form_servidor.input_matricula.focus();
                    alert('Preencha o campo Matricula');
                    return false;
                  } 
                  if(input_sexo == "Escolher" ){
                    alert('Escolha o sexo do servidor');
                    form_servidor.input_sexo.focus();
                    return false;
                  }
                }

                function validar_aposentado(){
                var input_nome_aposentado = form_aposentados.input_nome_aposentado.value;
                var input_CPF_aposentado = form_aposentados.input_CPF_aposentado.value;
                var input_matricula_aposentado = form_aposentados.input_matricula_aposentado.value;
                var input_sexo_aposentado = form_aposentados.input_sexo_aposentado.value;

                  if(input_nome_aposentado ==""){
                    alert('Preencha o campo Nome do aposentado.');
                    form_aposentados.input_nome_aposentado.focus();
                    return false;
                  }
                  if(input_CPF_aposentado ==""){
                    alert('Preencha o campo CPF do aposentado.');
                    form_aposentados.input_CPF_aposentado.focus();
                    return false;
                  }
                  if(matricula_aposentado == ""){
                    form_aposentados.input_matricula_aposentado.focus();
                    alert('Preencha o campo Matricula');
                    return false;
                  } 
                  if(input_sexo_aposentado == "Escolher" ){
                    alert('Escolha o sexo do aposentado');
                    form_aposentados.input_sexo_aposentado.focus();
                    return false;
                  }
                }


                function validar_pensionista(){
                var input_nome_pensionista = form_pensionistas.input_nome_pensionista.value;
                var input_CPF_pensionista = form_pensionistas.input_CPF_pensionista.value;
                var input_matricula_pensionista = form_pensionistas.input_matricula_pensionista.value;
                var input_sexo_pensionista = form_pensionistas.input_sexo_pensionista.value;

                  if(input_nome_pensionista ==""){
                    alert('Preencha o campo Nome do pensionista.');
                    form_pensionistas.input_nome_pensionista.focus();
                    return false;
                  }
                  if(input_CPF_pensionista ==""){
                    alert('Preencha o campo CPF do pensionista.');
                    form_pensionistas.input_CPF_pensionista.focus();
                    return false;
                  }
                  if(input_matricula_pensionista == ""){
                    form_pensionistas.input_matricula_pensionista.focus();
                    alert('Preencha o campo Matricula');
                    return false;
                  } 
                  if(input_sexo_pensionista == "Escolher" ){
                    alert('Escolha o sexo do pensionista');
                    form_pensionistas.input_sexo_pensionista.focus();
                    return false;
                  }
                }



                function validar_dependente(){
                var input_nome_dependente = form_dependentes.input_nome_dependente.value;
                var input_CPF_dependente = form_dependentes.input_CPF_dependente.value;
                var input_sexo_dependente = form_dependentes.input_sexo_dependente.value;
                var input_cpf_dependente_serv_ativo = form_dependentes.input_cpf_dependente_serv_ativo.value;
                var input_CPF_aposentado_dependente = form_dependentes.input_CPF_aposentado_dependente.value;
                var input_cpf_pensionista = form_dependentes.input_cpf_pensionista.value;

                  if(input_nome_dependente ==""){
                    alert('Preencha o campo Nome do pensionista.');
                    form_dependentes.input_nome_dependente.focus();
                    return false;
                  }
                  if(input_CPF_dependente ==""){
                    alert('Preencha o campo CPF do pensionista.');
                    form_dependentes.input_CPF_dependente.focus();
                    return false;
                  }
                  if(input_sexo_dependente == "Escolher" ){
                    alert('Escolha o sexo do pensionista');
                    form_dependentes.input_sexo_dependente.focus();
                    return false;
                  }
                  if(input_cpf_dependente_serv_ativo == "" && input_CPF_aposentado_dependente == "" && input_cpf_pensionista == ""){
                    alert('Preencha o campo CPF do titular do dependente.');
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

                <div style="margin-left: 29%;">
                        Cadastro de servidores, aposentados, pensionistas e dependentes
                </div>
<br>
                <nav>

<!-- Nav que contém a variavel de sessao para setar os formulários de equipamento, equipamento sem patriônio, previsão de chegada e tipo de equipamento, respectivamente.
     Quando clica eles entram no formulário escolhido -->

                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                

                  <a class="<?php if($_SESSION['formulario'] == 1){
                    echo($_SESSION['formulario']);
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?>" id="nav-servidor-tab" data-toggle="tab" href="#nav-servidor" role="tab"
                      aria-controls="nav-servidor" aria-selected="true" >Servidores</a>
              
                      <a class="<?php if($_SESSION['formulario'] == 2){
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?>" id="nav-aposentados-tab" data-toggle="tab" href= "#nav-aposentados" role="tab"
                      aria-controls="nav-aposentados" aria-selected="false">Aposentados</a>

                    <a class="<?php if($_SESSION['formulario'] == 3){
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?> "id="nav-pensionistas-tab" data-toggle="tab" href="#nav-pensionistas" role="tab"
                      aria-controls="nav-pensionistas" aria-selected="false">Pensionistas</a>
              
                      <a class="<?php if($_SESSION['formulario'] == 4){
                    echo('nav-item nav-link active');
                  } else{
                    echo('nav-item nav-link');
                  } ?>" id="nav-dependentes-tab" data-toggle="tab" href="#nav-dependentes" role="tab"
                      aria-controls="nav-dependentes" aria-selected="false">Dependentes</a>




                  </div>
              
                </nav>
         
               
                <div class="tab-content" id="nav-tabContent">


                <!-- Formulário de cadastro de servidores ativos que será exibido na primeira entrada na página -->
                
                                <div class="<?php if($_SESSION['formulario'] == 1){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-servidor" role="tabpanel" aria-labelledby="nav-servidor-tab">

                                      <div>

                                        <form id="formCard" name="form_servidor" action="cadastro_servidor.php" method="POST">

                                        <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="input_nome_servidor">Nome do servidor</label>
                                          <input name="nome_servidor" type="text" value="" class="form-control" id="input_nome_servidor" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_CPF_servidor">CPF</label>
                                          <input name="CPF_servidor" type="number" value="" class="form-control" id="input_CPF_servidor" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>
                                      


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_matricula">Matrícula</label>
                                         <input name="matricula_servidor" autocomplete="off" type="number" class="form-control" id="input_matricula" placeholder="Ex.:1234">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_pis_pasep">Pis Pasep</label>
                                      <input name="pis_pasep_servidor" autocomplete="off" type="text" class="form-control" id="input_pis_pasep" placeholder="Ex.: 186.18618.99-3">
                                        </div>
                                        </div>

                                        

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_sexo">Sexo</label>
                                         <select name="sexo_servidor" class="form-control" id="input_sexo">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                      </select>
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_estado_civil">Estado Civil</label>
                                         <select name="estado_civil_servidor" class="form-control" id="input_estado_civil">
                                             <option selected>Escolher</option>
                                             <option value="1">Solteiro (a)</option>
                                             <option value="2">Casado (a)</option>
                                             <option value="3">Viúvo (a)</option>
                                             <option value="4">Separado (a) judicialmente</option>
                                             <option value="5">Divorciado (a)</option>
                                             <option value="6">União estável</option>
                                             <option value="9">Outros</option>
                                      </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_nascimento">Data de nascimento</label>
                                         <input name="data_nascimento_servidor" type="date" class="form-control" id="input_data_nascimento">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_ingresso_serv_pub">Data de ingresso no serviço público</label>
                                         <input name="data_ingresso_serv_pub" type="date" class="form-control" id="input_data_ingresso_serv_pub">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_cargo">Cargo</label>
                                         <input name="cargo_servidor" autocomplete="off" type="text" class="form-control" id="input_cargo" placeholder="Ex.:Vigilante">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valo_base_calculo">Valor base cálculo</label>
                                      <input name="valor_base_calculo_servidor" autocomplete="off" type="number" class="form-control" id="input_valo_base_calculo" placeholder="Ex.:1455,00">
                                        </div>
                                        </div>

                                        
                                       
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_remuneracao">Remuneração</label>
                                         <input name="remuneracao_servidor" autocomplete="off" type="number" class="form-control" id="input_remuneracao" placeholder="Ex.:1254,00">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_contribuicao">Valor contribuição</label>
                                         <input name="valor_contribuicao_servidor" autocomplete="off" type="number" class="form-control" id="input_valor_contribuicao" placeholder="Ex.: 139,75">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_tipo_cargo">Tipo de cargo</label>
                                        <select name="tipo_cargo_servidor" class="form-control" id="input_tipo_cargo">
                                             <option selected>Escolher</option>
                                             <option value="2">Professor (a)</option>
                                             <option value="7">Demais servidores</option>                                            
                                      </select>
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_criterio_elegibilidade">Critério de elegibilidade</label>
                                        <select name="criterio_elegibilidade_servidor" class="form-control" id="input_criterio_elegibilidade">
                                             <option selected>Escolher</option>
                                             <option value="1">Sem critério diferenciado para aposentadoria</option>
                                             <option value="3">Critério para aposentadoria como professor</option> 
                                      </select>
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col">
                                        <label for="input_dependentes">Quantidade de dependentes</label>
                                         <input name="dependentes_servidor" autocomplete="off" type="number" class="form-control" id="input_dependentes" placeholder="Ex.:3">
                                        </div>
                                  
                                        </div>

                                      


                                       


                                        <input type="submit" id="botaoteste" onclick="return validar_servidor()" class="btn btn-primary">

                                        </form>

                                      </div>

                                        

                                      </div>

               





<!-- formulário de equipamento sem patrimonio que é ativado quando clicado. -->

                    <div class="<?php if($_SESSION['formulario'] == 2){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-aposentados" role="tabpanel" aria-labelledby="nav-aposentados-tab">

                    <div>

                      <form id="formCard2" name="form_aposentados" action="cadastro_aposentados.php" method="POST">

                    
                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="input_nome_aposentado">Nome do aposentado</label>
                                          <input name="nome_aposentado" type="text" value="" class="form-control" id="input_nome_aposentado" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_CPF_aposentado">CPF</label>
                                          <input name="CPF_aposentado" type="number" value="" class="form-control" id="input_CPF_aposentado" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>
                                      


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_matricula_aposentado">Matrícula</label>
                                         <input name="matricula_aposentado" autocomplete="off" type="number" class="form-control" id="input_matricula_aposentado" placeholder="Ex.:1234">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_pis_pasep_aposentado">Pis Pasep</label>
                                      <input name="pis_pasep_aposentado" autocomplete="off" type="text" class="form-control" id="input_pis_pasep_aposentado" placeholder="Ex.: 186.18618.99-3">
                                        </div>
                                        </div>

                                        

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_sexo_aposentado">Sexo</label>
                                         <select name="sexo_aposentado" class="form-control" id="input_sexo_aposentado">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                      </select>
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_estado_civil_aposentado">Estado Civil</label>
                                         <select name="estado_civil_aposentado" class="form-control" id="input_estado_civil_aposentado">
                                             <option selected>Escolher</option>
                                             <option value="1">Solteiro (a)</option>
                                             <option value="2">Casado (a)</option>
                                             <option value="3">Viúvo (a)</option>
                                             <option value="4">Separado (a) judicialmente</option>
                                             <option value="5">Divorciado (a)</option>
                                             <option value="6">União estável</option>
                                             <option value="9">Outros</option>
                                      </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_nascimento_aposentado">Data de nascimento</label>
                                         <input name="data_nascimento_aposentado" type="date" class="form-control" id="input_data_nascimento_aposentado">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_ingresso_serv_pub_aposentado">Data de ingresso no serviço público</label>
                                         <input name="data_ingresso_serv_pub_aposentado" type="date" class="form-control" id="input_data_ingresso_serv_pub_aposentado">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_inicio_aposentadoria">Data do inicio da aposentadoria</label>
                                         <input name="data_inicio_aposentadoria" autocomplete="off" type="date" class="form-control" id="input_data_inicio_aposentadoria" placeholder="Ex.:Vigilante">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_aposentadoria">Valor aposentadoria</label>
                                      <input name="valor_aposentadoria" autocomplete="off" type="text" class="form-control" id="input_valor_aposentadoria" placeholder="Ex.:1455,00">
                                        </div>
                                        </div>

                                        
                                       
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_compensacao_previd">Valor compensacão da previdência</label>
                                         <input name="valor_compensacao_previd" autocomplete="off" type="text" class="form-control" id="input_valor_compensacao_previd" placeholder="Ex.:1254,00">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_contribuicao_aposentado">Valor contribuição</label>
                                         <input name="valor_contribuicao_aposentado" autocomplete="off" type="text" class="form-control" id="input_valor_contribuicao_aposentado" placeholder="Ex.: 139,75">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_tipo_cargo_aposentado">Tipo de cargo</label>
                                        <select name="tipo_cargo_aposentado" class="form-control" id="input_tipo_cargo_aposentado">
                                             <option selected>Escolher</option>
                                             <option value="2">Professor (a)</option>
                                             <option value="7">Demais servidores</option>                                            
                                      </select>
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_tipo_aposentadoria">Tipo de aposentadoria</label>
                                        <select name="tipo_aposentadoria" class="form-control" id="input_tipo_aposentadoria">
                                             <option selected>Escolher</option>
                                             <option value="1">Aposentadoria por Idade</option>
                                             <option value="2">Aposentadoria por Tempo de Contribuição</option> 
                                             <option value="3">Aposentadoria Compulsória</option> 
                                             <option value="4">Aposentadoria por Invalidez</option> 
                                             <option value="5">Aposentadoria como Professor</option> 
                                             <option value="6">Aposentadoria Especial - atividade de risco (Art. 40, § 4º, inc. II, CF)</option> 
                                             <option value="7">Aposentadoria Especial - atividade prejudiciais à saúde ou integridade física (Art. 40, § 4º, inc. III, CF)</option> 
                                             <option value="9"> Militares Inativos - Reserva Remunerada</option> 
                                             <option value="10">Militares Inativos - Reforma</option> 

                                      </select>
                                        </div>
                                        </div>

                                       
                                        <div class="form-group">
                                        <label for="input_dependentes_aposentado">Quantidade de dependentes</label>
                                         <input name="dependentes_aposentado" autocomplete="off" type="number" class="form-control" id="input_dependentes_aposentado" placeholder="Ex.:3">
                                        </div>

                                     
                      <input type="submit" onclick="return validar_aposentado()" class="btn btn-primary">

                      </form>

                    </div>

                      

                    </div>












<!-- formulário de previsao de chegada que é ativado quando clicado -->
                    <div class="<?php if($_SESSION['formulario'] == 3){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-pensionistas" role="tabpanel" aria-labelledby="nav-pensionistas-tab">
                    <div>

                      <form id="formCard3" name="form_pensionistas" action="cadastro_pensionistas.php" method="POST">

 
                      <div class="form-row">
                                        <div class="form-group col-md-6">

                                          <label for="input_nome_instituidor">Nome do instituidor</label>
                                          <input name="nome_instituidor" type="text" value="" class="form-control" id="input_nome_instituidor" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_tipo_instituidor">Tipo do instituidor</label>
                                          <select name="tipo_instituidor" class="form-control" id="input_tipo_instituidor">
                                             <option selected>Escolher</option>
                                             <option value="1">Servidor ativo</option>
                                             <option value="2">Aposentado</option>
                                             <option value="3">Militar - ativo</option>
                                             <option value="4">Militar - inativo</option>
                                      </select>
                                        </div>
                                        </div>
                                      

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_obito">Data de óbito do instituidor</label>
                                         <input name="data_obito" autocomplete="off" type="date" class="form-control" id="input_data_obito">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_cpf_instituidor">CPF instituidor</label>
                                      <input name="cpf_instituidor" autocomplete="off" type="number" class="form-control" id="input_cpf_instituidor" placeholder="Ex.: 016864235879">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_matricula_instituidor">Matrícula do instituidor</label>
                                         <input name="matricula_instituidor" autocomplete="off" type="number" class="form-control" id="input_matricula_instituidor" placeholder="Ex.:1234">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_pis_pasep_instituidor">Pis Pasep do instituidor</label>
                                      <input name="pis_pasep_instituidor" autocomplete="off" type="text" class="form-control" id="input_pis_pasep_instituidor" placeholder="Ex.: 186.18618.99-3">
                                        </div>
                                        </div>

                                        

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_sexo_instituidor">Sexo do instituidor</label>
                                         <select name="sexo_instituidor" class="form-control" id="input_sexo_instituidor">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                      </select>
                                        </div>
                                          <div class="form-group col-md-6 ">
                                               <label for="input_dependentes_aposentado">Quantidade de dependentes</label>
                                               <input name="dependentes_aposentado" autocomplete="off" type="number" class="form-control" id="input_dependentes_aposentado" placeholder="Ex.:3">
                                        </div>

                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_nascimento_instituidor">Data de nascimento do instituidor</label>
                                         <input name="data_nascimento_instituidor" type="date" class="form-control" id="input_data_nascimento_instituidor">
                                        </div>
                                  
                                        <div class="form-group col-md-6">
                                              <label for="input_nome_pensionista">Nome do pensionista</label>
                                              <input name="nome_pensionista" type="text" value="" class="form-control" id="input_nome_pensionista" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>
                                        </div>

                                        
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_matricula_pensionista">Matrícula do pensionista</label>
                                         <input name="matricula_pensionista" autocomplete="off" type="number" class="form-control" id="input_matricula_pensionista" placeholder="Ex.:1234">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_pis_pasep_pensionista">Pis Pasep do pensionista</label>
                                      <input name="pis_pasep_pensionista" autocomplete="off" type="text" class="form-control" id="input_pis_pasep_pensionista" placeholder="Ex.: 186.18618.99-3">
                                        </div>
                                        </div>

                                        

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_sexo_pensionista">Sexo do pensionista</label>
                                         <select name="sexo_pensionista" class="form-control" id="input_sexo_pensionista">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                      </select>
                                        </div>
                                          <div class="form-group col-md-6 ">
                                               <label for="input_CPF_pensionista">CPF do pensionista</label>
                                               <input name="cpf_pensionista" autocomplete="off" type="number" class="form-control" id="input_CPF_pensionista" placeholder="Ex.:01657832482">
                                        </div>

                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_nascimento_pensionista">Data de nascimento do pensionista</label>
                                         <input name="data_nascimento_pensionista" type="date" class="form-control" id="input_data_nascimento_pensionista">
                                        </div>

                                        <div class="form-group col-md-6 ">
                                        <label for="input_data_inicio_pensao">Data do inicio da pensão</label>
                                         <input name="data_inicio_pensao" autocomplete="off" type="date" class="form-control" id="input_data_inicio_pensao" placeholder="Ex.:Vigilante">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_pensao">Valor pensão</label>
                                        <input name="valor_pensao" autocomplete="off" type="number" class="form-control" id="input_valor_pensao" placeholder="Ex.:1455,00">
                                        </div>


                                        <div class="form-group col-md-6 ">
                                        <label for="input_tipo_relacao_pensionista">Tipo relação do pensionista</label>
                                         <select name="tipo_relacao_pensionista" class="form-control" id="input_tipo_relacao_pensionista">
                                             <option selected>Escolher</option>
                                             <option value="1">Cônjunge</option>
                                             <option value="2">Filho com menos de 21 anos</option>
                                             <option value="3">Filho inválido</option>
                                             <option value="4">Pais</option>
                                             <option value="5">Irmão menor de 21 anos ou com deficiência</option>
                                             <option value="6">Outros</option>

                                         </select>
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_total_pensao">Valor total da pensão</label>
                                         <input name="valor_total_pensao" type="number" class="form-control" id="input_valor_total_pensao" placeholder="Ex.:1254">
                                        </div>

                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_pct_quota">Valor percentual da quota</label>
                                         <input name="valor_pct_quota" autocomplete="off" type="number" class="form-control" id="input_valor_pct_quota" placeholder="Ex.:5">
                                        </div>
                                        </div>
                         

                                       
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_contribuicao_pensao">Valor da contribuição</label>
                                         <input name="valor_contribuicao_pensao" type="number" class="form-control" id="input_valor_contribuicao_pensao" placeholder="Ex.:1254">
                                        </div>

                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_compens_previd">Valor da compensação previdêciária</label>
                                         <input name="valor_compens_previd" autocomplete="off" type="number" class="form-control" id="input_valor_compens_previd" placeholder="Ex.:5">
                                        </div>
                                        </div>


                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_duracao_beneficio">Duração do benefício</label>
                                        <select name="duracao_pensionista" class="form-control" id="input_condicao_pensionista">
                                             <option selected>Escolher</option>
                                             <option value="1">Vitalício</option>
                                             <option value="2">Temporário</option>
                                         </select>
                                        </div>


                                        <div class="form-group col-md-6 ">
                                        <label for="input_condicao_pensionista">Condição do pensionista</label>
                                         <select name="condicao_pensionista" class="form-control" id="input_condicao_pensionista">
                                             <option selected>Escolher</option>
                                             <option value="1">Válido</option>
                                             <option value="2">Inválido</option>
                                         </select>
                                        </div>
                                        </div>

                                  
                                        <div class="form-group">
                                        <label for="input_tempo_beneficio">Tempo de duração do beneficio</label>
                                         <input name="tempo_beneficio" type="number" class="form-control" id="input_tempo_beneficio" placeholder="Ex.:1254">
                                        </div>

                                        
                                      
                                        

                     
                    
                      <input type="submit" onclick="return validar_pensionista()" class="btn btn-primary">

                    </form>
                  </div>
                 </div>












<!-- formulário de tipo de equipamento que é ativado quando clicado -->
                 
                    <div class="<?php if($_SESSION['formulario'] == 4){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-dependentes" role="tabpanel" aria-labelledby="nav-dependentes-tab">

                      <div>

                        <form id="formCard4" name="form_dependentes" action="cadastro_dependentes.php" method="POST">

                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="input_nome_dependente">Nome do dependente</label>
                                          <input name="nome_dependente" type="text" value="" class="form-control" id="input_nome_dependente" placeholder="Ex.: John Emerson Ferreira Regis Filho">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_CPF_dependente">CPF do dependente</label>
                                          <input name="CPF_dependente" type="number" value="" class="form-control" id="input_CPF_dependente" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="input_data_nascimento_dependente">Data de nascimento do dependente</label>
                                          <input name="data_nascimento_dependente" type="date" value="" class="form-control" id="input_data_nascimento_dependente">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_sexo_dependente">Sexo do dependente</label>
                                          <select name="sexo_dependente" class="form-control" id="input_sexo_dependente">
                                             <option selected>Escolher</option>
                                             <option value="1">Feminino</option>
                                             <option value="2">Masculino</option>
                                         </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_tipo_dependencia">Tipo de dependência</label>
                                        <select name="tipo_dependencia" class="form-control" id="input_tipo_dependencia">
                                             <option selected>Escolher</option>
                                             <option value="1">Cônjuge</option>
                                             <option value="2">Companheiro (a)</option>
                                             <option value="3">Filho (a) menor de 21 anos</option>
                                             <option value="4">Filho (a) inválido</option>
                                             <option value="5">Pai (mãe) com dependência econômica</option>
                                             <option value="6">Enteado menor de 21 anos com dependência econômica</option>
                                             <option value="7">Enteado inválido com dependência econômica</option>
                                             <option value="8">Irmão menor de 21 anos com dependência econômica</option>
                                             <option value="9">Irmão inválido com dependência econômica</option>
                                             <option value="10">Menor tutelado</option>
                                             <option value="11">Neto</option>
                                             <option value="12">Ex-cônjuge que receba pensão de alimentos</option>
                                         </select>
                                        </div>


                                        <div class="form-group col-md-6 ">
                                        <label for="input_condicao_dependente">Condição do dependente</label>
                                         <select name="condicao_dependente" class="form-control" id="input_condicao_dependente">
                                             <option selected>Escolher</option>
                                             <option value="1">Válido</option>
                                             <option value="2">Inválido</option>
                                         </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="input_cpf_dependente_serv_ativo">CPF do titular (servidor ativo)</label>
                                          <input name="cpf_dependente_serv_ativo" type="number" value="" class="form-control" id="input_cpf_dependente_serv_ativo" placeholder="Ex.: 05975316859">
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label for="input_CPF_aposentado_dependente">CPF do titular (aposentado)</label>
                                          <input name="CPF_dependente_aposentado" type="number" value="" class="form-control" id="input_CPF_aposentado_dependente" placeholder="Ex.: 05975316859">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="input_cpf_pensionista">CPF do titular (pensionista)</label>
                                          <input name="cpf_dependente_pensionista" type="number" value="" class="form-control" id="input_cpf_pensionista" placeholder="Ex.: 05975316859">
                                        </div>
                         

              
                        <input type="submit" onclick="return validar_dependente()"  class="btn btn-primary">

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