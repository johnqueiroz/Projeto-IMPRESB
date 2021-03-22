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

              function validar(){
                var inputData_recebimento = form_equipamentos.inputData_recebimento.value;
                var inputTipo = form_equipamentos.inputTipo.value;
                var inputpatrimonio = form_equipamentos.inputpatrimonio.value;
                var checkbox = form_equipamentos.checkbox.value;
                var inputserie = form_equipamentos.inputserie.value;
                var botaoteste = form_equipamentos.botaoteste.value;

                  if(inputData_recebimento ==""){
                    alert('Preencha o campo Data de recebimento.');
                    form_equipamentos.inputData_recebimento.focus();
                    return false;
                  }
                  if(inputTipo =="Escolher"){
                    alert('Escolha o campo tipo.');
                    form_equipamentos.inputTipo.focus();
                    return false;
                  }
                  if(inputpatrimonio == ""){
                    form_equipamentos.inputpatrimonio.focus();
                    alert('Preencha o campo Patrimônio');
                    return false;
                  } 
                  if(inputserie == "" ){
                    form_equipamentos.inputserie.focus();
                    return false;
                  }
                  if(checkbox == 0){
                    form_equipamentos.botaoteste.focus();
                    return false;
                  }
              }


              function validar2(){
                var inputData_recebimento = form_equipamentos_sem_patrimonio.inputData_recebimento.value;
                var inputTipo = form_equipamentos_sem_patrimonio.inputTipo.value;
                var inputQuantidade_sem_patrimonio = form_equipamentos_sem_patrimonio.inputQuantidade_sem_patrimonio.value;
              


                  if(inputData_recebimento ==""){
                    alert('Preencha o campo Data de recebimento.');
                    form_equipamentos_sem_patrimonio.inputData_recebimento.focus();
                    return false;
                  }
                  if(inputTipo =="Escolher"){
                    alert('Escolha o campo tipo.');
                    form_equipamentos_sem_patrimonio.inputTipo.focus();
                    return false;
                  }
                  if(inputQuantidade_sem_patrimonio == ""){
                    form_equipamentos_sem_patrimonio.inputQuantidade_sem_patrimonio.focus();
                    alert('Preencha o campo Quantidade');
                    return false;
                  }
                 
              }





              
              function validar3(){
                var inputTipo_equipamento = form_previsao_chegada.inputTipo_equipamento.value;
                var inputPrevisao_chegada = form_previsao_chegada.inputPrevisao_chegada.value;
                var inputQuantidade_equipamentos = form_previsao_chegada.inputQuantidade_equipamentos.value;
             

                  if(inputTipo_equipamento =="Escolher"){
                    alert('Preencha o campo Tipo de equipamento.');
                    form_previsao_chegada.inputTipo_equipamento.focus();
                    return false;
                  }
                  if(inputPrevisao_chegada ==""){
                    alert('Escolha o campo Previsão de chegada.');
                    form_previsao_chegada.inputPrevisao_chegada.focus();
                    return false;
                  }
                  if(inputQuantidade_equipamentos == ""){
                    form_previsao_chegada.inputQuantidade_equipamentos.focus();
                    alert('Preencha o campo Quantidade');
                    return false;
                  }
                
              }






              function validar4(){
                var inputTipo_de_equipamento = form_tipo_equipamentos.inputTipo_de_equipamento.value;
              
                  if(inputTipo_de_equipamento == ""){
                    form_tipo_equipamentos.inputTipo_de_equipamento.focus();
                    alert('Preencha o campo Tipo de equipamento');
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
                  } ?>" id="nav-Dependentes-tab" data-toggle="tab" href="#nav-Dependentes" role="tab"
                      aria-controls="nav-Dependentes" aria-selected="false">Dependentes</a>




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

                                        <form id="formCard" name="form_servidor" action="banco_servidor.php" method="POST">

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
                                         <select name="sexo_servidor" class="form-control" id="sexo_servidor">
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
                                      <input name="_valo_base_calculop_servidor" autocomplete="off" type="number" class="form-control" id="input_valo_base_calculo" placeholder="Ex.:1455,00">
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
                                        <label for="input_dependentes">Quantidade de dependentes</label>
                                         <input name="dependentes_servidor" autocomplete="off" type="number" class="form-control" id="input_dependentes" placeholder="Ex.:3">
                                        </div>

                                        </div>


                                        <input type="submit" id="botaoteste" onclick="return validar()" class="btn btn-primary">

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
                                      <input name="valor_aposentadoria" autocomplete="off" type="number" class="form-control" id="input_valor_aposentadoria" placeholder="Ex.:1455,00">
                                        </div>
                                        </div>

                                        
                                       
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_compensacao_previd">Valor compensacão da previdência</label>
                                         <input name="valor_compensacao_previd" autocomplete="off" type="number" class="form-control" id="input_valor_compensacao_previd" placeholder="Ex.:1254,00">
                                        </div>
                                  
                                        <div class="form-group col-md-6 ">
                                        <label for="input_valor_contribuicao_aposentado">Valor contribuição</label>
                                         <input name="valor_contribuicao_aposentado" autocomplete="off" type="number" class="form-control" id="input_valor_contribuicao_aposentado" placeholder="Ex.: 139,75">
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

                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                        <label for="input_dependentes_aposentado">Quantidade de dependentes</label>
                                         <input name="dependentes_aposentado" autocomplete="off" type="number" class="form-control" id="input_dependentes_aposentado" placeholder="Ex.:3">
                                        </div>

                                        </div>
                      <input type="submit" onclick="return validar2()" class="btn btn-primary">

                      </form>

                    </div>

                      

                    </div>












<!-- formulário de previsao de chegada que é ativado quando clicado -->
                    <div class="<?php if($_SESSION['formulario'] == 3){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-previsao_chegada" role="tabpanel" aria-labelledby="nav-previsao_chegada-tab">
                    <div>

                      <form id="formCard3" name="form_previsao_chegada" action="Cadastro_previsao_chegada.php" method="POST">

                      <div class="form-row">

                        <div class="form-group col-md-6">
                          
                          <label for="inputTipo_equipamento">Tipo do equipamento</label>
                        <select name="tipo_equipamento_escolha2" id="inputTipo_equipamento" class="form-control">
                           <option selected>Escolher</option>

                           <?php
                             /* Código que trás o select de tipos de equipamentos, onde se inicia a conexao com o banco, depois cria o tipo de busca que será feita no banco e cria
                a variavel que junta a conexao com a busca e depois um laço de repetição para enquanto tiver dado no banco, continue buscando. */

                           $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");

                           $result_tipo_equipamento = "SELECT * FROM tipo ORDER BY tipo_equipamento ASC";

                           $result_tipo_equipamento = mysqli_query($conexao, $result_tipo_equipamento);

                           while($row_tipo_equipamento = mysqli_fetch_assoc($result_tipo_equipamento) ) {
                             ?>

                             <option value="<?php echo $row_tipo_equipamento['ID_tipo']; ?>"><?php echo $row_tipo_equipamento ['tipo_equipamento']; ?>
                             </option> <?php
                            }
                          ?>
                          
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="inputPrevisao_chegada2">Previsão de chegada</label>
                        <input name="previsao_chegada2" autocomplete="off" type="date" class="form-control" id="inputPrevisao_chegada" placeholder="Ex: 27/12/2021">
                      </div>
                      </div>

                        <div class="form-group">
                          <label for="inputQuantidade_equipamentos">Quantidade de equipamentos</label>
                          <input name="Quantidade_equipamento2" autocomplete="off" type="number" class="form-control" id="inputQuantidade_equipamentos" placeholder="Ex.: 10">
                        </div>

                     

                     
                    
                      <input type="submit" onclick="return validar3()" class="btn btn-primary">

                    </form>
                  </div>
                 </div>












<!-- formulário de tipo de equipamento que é ativado quando clicado -->
                 
                    <div class="<?php if($_SESSION['formulario'] == 4){
                    echo(' tab-pane fade show active');
                  } else{
                    echo(' tab-pane fade');
                  } ?>" id="nav-tipoEquipamento" role="tabpanel" aria-labelledby="nav-tipoEquipamento-tab">

                      <div>

                        <form id="formCard4" name="form_tipo_equipamentos" action="Cadastro_tipo_Equipamento.php" method="POST">

                       

                          <div class="form-group">
                            <label for="inputTipo_de_equipamento">Tipo de equipamento</label>
                            <input name="tipo" type="text" class="form-control" id="inputTipo_de_equipamento" placeholder="Ex.: DMC Quantum">
                          </div>
                        
                         

              
                        <input type="submit" onclick="return validar4()"  class="btn btn-primary">

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