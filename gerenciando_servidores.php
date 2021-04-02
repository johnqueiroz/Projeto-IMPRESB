<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e42d0736e1.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

		<script>       //funcao que captura os dados da linha que foi selecionada na tabela
			function testeajax(nome, CPF_servidor, matricula, sexo, valor_base_calculo, remuneracao, valor_contribuicao, tipo_cargo, criterio_elegibilidade, data_nascimento, data_ingresso_ser_pub, dependentes) { 
			document.getElementById("nome").value = nome;
			document.getElementById("CPF_servidor").value = CPF_servidor;
			document.getElementById("matricula").value = matricula;
			document.getElementById("sexo").value = sexo;
			document.getElementById("valor_base_calculo").value = valor_base_calculo;
			document.getElementById("remuneracao").value = remuneracao;
			document.getElementById("valor_contribuicao").value = valor_contribuicao;
            document.getElementById("tipo_cargo").value = tipo_cargo;
            document.getElementById("criterio_elegibilidade").value = criterio_elegibilidade;
            document.getElementById("data_nascimento").value = data_nascimento;
            document.getElementById("data_ingresso_ser_pub").value = data_ingresso_ser_pub;
            document.getElementById("dependentes").value = dependentes;
				console.log(recebimento);
			}
		</script>

		<title>Sistema de Controle de Previdênciários</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<link rel="stylesheet" href="estilo.css" type="text/css">

		<link rel="icon" type="imagem/png" href="favicon-96x96.png" />
		<style type="text/css">
			#bt_voltar{
			margin-left: 0%;
			};

			#fixo{
			display:block;
			position:fixed;
			}
			.h4teste{
			margin-left: 30%;
			}
			
			.paginacaoDIV{
 			align-items: center;
  			justify-content: center
			}
		</style>
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
			<div class="container">
				<div class="row">
					<div class="col-1">
				  		<a id="bt_voltar" href="gerenciamento_servidores.php" style="margin-left: 1040px" text-align: left;>Voltar</a>
					</div>  <!-- 
					<?php /*
// define que a paginação terá 25 itens e será a pag numero 1 assim que entrar na pagina, depois poderá ser alterado 
							if(!isset($_GET["itenspagina"])){
								$_GET["itenspagina"] = 25;
							}
							if(!isset($_GET["pagina"])){
								$_GET["pagina"] = 1;
							}
					*/?>
					<div class="col-sm">
				  		Itens por página: 
						<select name="itenspagina" id="itenspagina"> --><!-- fixa o numero de itens da pagina na opção que foi selecionada	-->
						<!--	<option value="25" <?php /* if($_GET["itenspagina"] == '25'){ echo "selected=selected"; } ?>>25</option>
							<option value="50" <?php if($_GET["itenspagina"] == '50'){ echo "selected=selected"; } ?>>50</option>
							<option value="100" <?php if($_GET["itenspagina"] == '100'){ echo "selected=selected"; } */?>>100</option>			
						</select>
					</div>

			 	</div>
			</div> -->
			<div>
				<?php
				// verifica os dados enviados e atribuem a uma variavel se forem vazios, caso as variaveis ja tenha informacoes ele pegam ela de volta
					if(isset($_POST["gerenciar_nome_servidor"])){
						$gerenciar_nome_servidor =  $_POST["gerenciar_nome_servidor"];
					}else if(isset($_GET["gerenciar_nome_servidor"])){
						$gerenciar_nome_servidor = $_GET["gerenciar_nome_servidor"];
					}
					else{
						$gerenciar_nome_servidor = "";
					}
				
					if(isset($_POST["gerenciar_CPF_servidor"])){
						$gerenciar_CPF_servidor =  $_POST["gerenciar_CPF_servidor"];
					}else if(isset($_GET["gerenciar_CPF_servidor"])){
						$gerenciar_CPF_servidor = $_GET["gerenciar_CPF_servidor"];
					}
					else{
						$gerenciar_CPF_servidor = "";
					}
				
					if(isset($_POST["gerenciar_matricula_servidor"])){
						$gerenciar_matricula_servidor =  $_POST["gerenciar_matricula_servidor"];
					}else if(isset($_GET["gerenciar_matricula_servidor"])){
						$gerenciar_matricula_servidor = $_GET["gerenciar_matricula_servidor"];
					}
					else{
						$gerenciar_matricula_servidor = "";
					}
					if(isset($_POST["gerenciar_sexo_servidor"]) != "Escolher"){
						$gerenciar_sexo_servidor =  $_POST["gerenciar_sexo_servidor"];
					}else if(isset($_GET["gerenciar_sexo_servidor"])){
						$gerenciar_sexo_servidor = $_GET["gerenciar_sexo_servidor"];
					}
					else{
						$gerenciar_sexo_servidor = "";
					}
				
					if(isset($_POST["gerenciar_data_nascimento_servidor"])){
						$gerenciar_data_nascimento_servidor =  $_POST["gerenciar_data_nascimento_servidor"];
					}else if(isset($_GET["gerenciar_data_nascimento_servidor"])){
						$gerenciar_data_nascimento_servidor = $_GET["gerenciar_data_nascimento_servidor"];
					}
					else{
						$gerenciar_data_nascimento_servidor = "";
					}
                    if(isset($_POST["gerenciar_data_ingresso_serv_pub_servidor"])){
						$gerenciar_data_ingresso_serv_pub_servidor =  $_POST["gerenciar_data_ingresso_serv_pub_servidor"];
					}else if(isset($_GET["gerenciar_data_ingresso_serv_pub_servidor"])){
						$gerenciar_data_ingresso_serv_pub_servidor = $_GET["gerenciar_data_ingresso_serv_pub_servidor"];
					}
					else{
						$gerenciar_data_ingresso_serv_pub_servidor = "";
					}
                    if(isset($_POST["gerenciar_cargo_servidor"])){
						$gerenciar_cargo_servidor =  $_POST["gerenciar_cargo_servidor"];
					}else if(isset($_GET["gerenciar_cargo_servidor"])){
						$gerenciar_cargo_servidor = $_GET["gerenciar_cargo_servidor"];
					}
					else{
						$gerenciar_cargo_servidor = "";
					}
					// faz um array com as variaveis
					$array = array(
						$gerenciar_nome_servidor,
						$gerenciar_CPF_servidor,
						$gerenciar_matricula_servidor,
						$gerenciar_sexo_servidor,
						$gerenciar_data_nascimento_servidor,
                        $gerenciar_data_ingresso_serv_pub_servidor,
                        $gerenciar_cargo_servidor
					);

					$i = 0;
					$aux = 0;
					//busca no banco
					$select = "SELECT * FROM servidor_ativo WHERE";
 //percorre o array verificando e montando as informações que foram enviadas e que vao ser exibidas depois na tabela
					foreach ($array as $value){
						if($value != ""){
							if($i == 0){
								$select = $select." servidor_ativo.nome like '%$value%'";
								$aux = 1;
							}
							
							if($i == 1){
								if($aux == 1){
									$select = $select." AND servidor_ativo.cpf = '$value'";
								}else{
									$select = $select." servidor_ativo.cpf = '$value'";
								}
								$aux = 1;
							}

							if($i == 2){
								if($aux == 1){
									$select = $select." AND servidor_ativo.matricula = '$value'";
								}else{
									$select = $select." servidor_ativo.matricula = '$value' ";
								}
								$aux = 1;
							}
							
							if($i == 3){
								if($aux == 1){
									$select = $select." AND servidor_ativo.sexo = '$value'";
								}else{
									$select = $select." servidor_ativo.sexo = '$value'";
								}
								$aux = 1;
							}
							
							if($i == 4){
								if($aux == 1){
									$select = $select." AND servidor_ativo.data_nascimento = '$value'";
								}else{
									$select = $select." servidor_ativo.data_nascimento = '$value'";
								}
								$aux = 1;
							}
						
                        if($i == 5){
                            if($aux == 1){
                                $select = $select." AND servidor_ativo.data_ingresso_ser_pub = '$value'";
                            }else{
                                $select = $select." servidor_ativo.data_ingresso_ser_pub = '$value'";
                            }
                            $aux = 1;
                        }
                        if($i == 6){
                            if($aux == 1){
                                $select = $select." AND servidor_ativo.cargo = '$value'";
                            }else{
                                $select = $select." servidor_ativo.cargo = '$value'";
                            }
                            $aux = 1;
                        }
                    } 
						$i++;
					}
					
					$conexao = mysqli_connect("localhost", "root", "", "impresb");

					//************Paginaçao**************
					// número de registros por página
                    /*
					$itens_pagina=$_GET['itenspagina'];
					if(!$itens_pagina){
						$total_reg = "25"; 
					}else{
						$total_reg = $itens_pagina;
					}
				
					$pagina=$_GET['pagina'];
					if (!$pagina) {
					$pc = "1";
					} else {
					$pc = $pagina;
					}
				
					//Valor inicial das buscas limitadas
					$inicio = $pc - 1;
					$inicio = $inicio * $total_reg;
				
					//Selecionar os dados

					
					//Define o numero de paginas
					$tr = mysqli_num_rows($todos); // verifica o número total de registros
					$tp = ceil($tr / $total_reg); // verifica o número total de páginas, arredondando para cima
					
					// agora vamos criar os botões "Anterior e próximo"
					$anterior = $pc -1;
					$proximo = $pc +1;
					
				
					//************Fim Paginaçao**************
				*/?>
				<p></p>

<!-- Tabela com as informações dos equipamentos-->
				<?php
                
                $resultado_servidores = mysqli_query($conexao,$select) or die(' Erro na query:' . $select . ' ' . mysqli_error($conexao)); 

                ?>

				<div class="container theme-showcase" role="main">
					<div class="row">
						<div class="col-md-14">
							<table class="table table-hover">
							<thead>
								<tr>
									<th  style= 'text-align: center'>Nome</th>
									<th  style= 'text-align: center'>CPF</th>
									<th  style= 'text-align: center'>Matrícula</th>
									<th  style= 'text-align: center'>Sexo</th>
                                    <th  style= 'text-align: center'>Valor base cálc</th>
                                    <th  style= 'text-align: center'>Remuneração</th>
                                    <th  style= 'text-align: center'>Contribuição</th>
									<th  style= 'text-align: center'>Data nascimento</th>
									<th  style= 'text-align: center'>Data ingresso no serv. púb</th> 
                                    <th  style= 'text-align: center'>Dependentes</th>
									<th>Editar</th>
									<!-- <th><input type="checkbox" id="seleciona_todos" /></th> -->
								</tr>
							</thead>
							<tbody>
								<?php while($rows_servidores = mysqli_fetch_assoc($resultado_servidores)){ ?>
									<tr>
										<td align=center><?php echo $rows_servidores['nome'];?></td>
										<td align=center><?php echo $rows_servidores['cpf'];?></td>
										<td align=center><?php echo $rows_servidores['matricula'];?></td>
										<td align=center><?php $sexo = $rows_servidores['sexo']; if($sexo== "1"){echo"Feminino";}else{ echo "Masculino"; } ?></a></td>
										<td align=center><?php echo $rows_servidores['valor_base_calculo'];?></td>
                                        <td align=center><?php echo $rows_servidores['remuneracao'];?></td>
                                        <td align=center><?php echo $rows_servidores['valor_contribuicao'];?></td>
                                        <td align=center><?php echo date('d/m/Y', strtotime($rows_servidores['data_nascimento']));?></td>
										<td align=center><?php echo date('d/m/Y', strtotime($rows_servidores['data_ingresso_ser_pub']));?></td>
                                        <td align=center><?php echo $rows_servidores['dependentes'];?></td>
										<td><button type="button"  onclick="testeajax(<?php echo $rows_servidores['nome'].','.$rows_servidores['cpf'].','.$rows_servidores['matricula'].','.$rows_servidores['sexo'].','.$rows_servidores['valor_base_calculo'].','.$rows_servidores['remuneracao'].','.$rows_servidores['valor_contribuicao'].','.$rows_servidores['tipo_cargo'].','.$rows_servidores['criterio_elegibilidade'].','.$rows_servidores['data_nascimento'].','.$rows_servidores['data_ingresso_ser_pub'].','.$rows_servidores['dependentes']; ?>)" class="btn btn-outline-dark" data-toggle="modal" data-target="#editaEquipamento"><i class="fas fa-edit"></i></button></td>  <!--recupera as informações na funcao-->
									<!-- 	<td><input type="checkbox" class="checkbox" name="mcheckbox[]" value=<?//=$rows_servidores['cpf']?>></td>-->
									</tr>
								<?php  } ?>
								<tr>  
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>		
				</div>
				<!-- <div class="container">
					<div class="row justify-content-center">
						<nav aria-label="Navegação de página exemplo">
  							<ul class="pagination">
								<?php /* monta um box que pode selecionar de ir pra pag a frente ou atras e os echo são os links que formam as paginas
									if ($pc>1) {
										echo "<li class='page-item'><a class='page-link' href='?pagina=$anterior&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>Anterior</a></li> ";
									}
									else{
										echo "<li class='page-item disabled'><a class='page-link' href='?pagina=$anterior&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>Anterior</a></li> ";
									}
									for ($i=1; $i<=$tp; $i++){
										if($pc == $i){
											echo "<li class='page-item active'><a class='page-link' href='?pagina=$i&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>$i</a></li> ";
										}else{
											echo "<li class='page-item'><a class='page-link' href='?pagina=$i&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>$i</a></li> ";
									
										}
									}

									if ($pc<$tp) {
										echo "<li class='page-item'><a class='page-link' href='?pagina=$proximo&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>Próximo</a></li>";
									}else{
										echo "<li class='page-item disabled'><a class='page-link' href='?pagina=$proximo&itenspagina=$total_reg&nome=$nome&cpf=$cpf&matricula=$matricula&sexo=$sexo&data_nascimento=$data_nascimento&data_ingresso_ser_pub=$data_ingresso_ser_pub&cargo=$cargo'>Próximo</a></li>";
									}
								*/?>
							</ul>
						</nav>								
					</div>
				</div> -->


				<div class="modal fade" id="editaEquipamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<!-- modal com formulario de atualização de dados do equipamento-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="nome" class="control-label">Nome:</label>
										<input name="nome" type="text" class="form-control" id="nome" value="">
									</div>

									<div class="form-group">
										<label for="CPF_servidor" class="control-label">CPF:</label>
										<input name="CPF_servidor" type="number" class="form-control" id="CPF_servidor" value="">
									</div>
									<div class="form-group">
										<label for="matricula" class="control-label">Matrícula:</label>
										<input name="matricula" type="number" class="form-control" id="matricula" value="">
									</div>
									<div class="form-group">
										<label for="sexo">Sexo</label>
										<select name="sexo" id="sexo" class="form-control">
											<option value="">Escolher</option>
											<option value="1">Feminino</option>
											<option value="2">Masculino</option>
										</select>
									</div>

									<div class="form-group">
										<label for="valor_base_calculo" class="control-label">Valor base cálculo</label>
										<input name="valor_base_calculo" type="text" class="form-control" id="valor_base_calculo" value="">
									</div>

									<div class="form-group">
										<label for="remuneracao" class="control-label">Remuneração</label>
										<input name="remuneracao" type="text" class="form-control" id="remuneracao" value="">
									</div>
									<div class="form-group">
										<label for="valor_contribuicao" class="control-label">Valor contribuição</label>
										<input name="valor_contribuicao" type="text" class="form-control" id="valor_contribuicao" value="">
									</div>

									<div class="form-group">
										<label for="tipo_cargo" class="control-label">Tipo cargo</label>
										<input name="tipo_cargo" type="text" class="form-control" id="tipo_cargo" value="">
									</div>
									<div class="form-group">
										<label for="criterio_elegibilidade" class="control-label">Critério elegibilidade</label>
										<input name="criterio_elegibilidade" type="text" class="form-control" id="criterio_elegibilidade" value="">
									</div>
									<div class="form-group">
										<label for="data_nascimento" class="control-label">Data de nascimento</label>
										<input name="data_nascimento" type="date" class="form-control" id="data_nascimento" value="">
									</div>
									<div class="form-group">
										<label for="data_ingresso_ser_pub" class="control-label">data de ingresso no serv púb</label>
										<input name="data_ingresso_ser_pub" type="date" class="form-control" id="data_ingresso_ser_pub" value="">
									</div>
									<div class="form-group">
										<label for="dependentes" class="control-label">Dependentes</label>
										<input name="dependentes" type="number" class="form-control" id="dependentes" value="">
									</div>
									<button type="button" onclick="recarrega()" class="btn btn-danger" data-dismiss="modal" >Fechar</button>
									<button type="button" onclick="alteraServidor()" class="btn btn-success">Alterar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">

			//Função com AJAX para chamar alteratipo.php via método GET 
			function alteraServidor() {
				var nome = document.getElementById("nome");
				var CPF_servidor = document.getElementById("CPF_servidor");
				var matricula = document.getElementById("matricula");
				var sexo = document.getElementById("sexo");
				var valor_base_calculo = document.getElementById("valor_base_calculo");
				var remuneracao = document.getElementById("remuneracao");
				var valor_contribuicao = document.getElementById("valor_contribuicao");
				var tipo_cargo = document.getElementById("tipo_cargo");
				var criterio_elegibilidade = document.getElementById("criterio_elegibilidade");
				var data_nascimento = document.getElementById("data_nascimento");
				var data_ingresso_ser_pub = document.getElementById("data_ingresso_ser_pub");
				var dependentes = document.getElementById("dependentes");
				
				var xmlhttp = new XMLHttpRequest();
				
				var url = "atualizacao_servidor.php?nome="+nome.value+"&CPF_servidor="+CPF_servidor.value+"&matricula="+matricula.value+"&sexo="+sexo.value+"&valor_base_calculo="+valor_base_calculo.value+"&remuneracao="+remuneracao.value+"&valor_contribuicao="+valor_contribuicao.value+"&tipo_cargo="+tipo_cargo.value+"&criterio_elegibilidade="+criterio_elegibilidade.value+"&data_nascimento="+data_nascimento.value+"&data_ingresso_ser_pub="+data_ingresso_ser_pub.value+"&dependentes="+dependentes.value;
				xmlhttp.open("GET",url);
				xmlhttp.send();
				xmlhttp.onreadystatechange = function() { console.log(xmlhttp.responseText);};

			}
/*			function relatorio() {
				var patrimonio = document.getElementById("patrimonio");
				var serie = document.getElementById("serie");
				var observacoes = document.getElementById("observacoes");
				var distribuicao = document.getElementById("distribuicao");
				var recebimento = document.getElementById("recebimento");
				var tipo = document.getElementById("tipo");
				var status = document.getElementById("status");
				var localidade = document.getElementById("localidade");
				var id = document.getElementById("id");
				
				var xmlhttp = new XMLHttpRequest();
				
				var url = "relatorio_equipamento.php?patrimonio="+patrimonio.value+"&serie="+serie.value+"&observacao="+observacoes.value+"&distribuicao="+distribuicao.value+"&recebimento="+recebimento.value+"&tipo="+tipo.value+"&status="+status.value+"&localidade="+localidade.value+"&id="+id.value;
				xmlhttp.open("GET",url);
				xmlhttp.send();
				xmlhttp.onreadystatechange = function() { console.log(xmlhttp.responseText);};

			}*/

			//Função com AJAX para recarregar página via método GET 
			function recarrega() {
				location.reload();
			}

			
			//Determina itens por pagina
			$(document).ready(function (){
				$('#itenspagina').on('change', function(){
					var valor = this.value;
                   	window.location.href = "<?php echo "gerenciamento_equipamento_teste.php?pagina=1&itenspagina="?>"+valor+"<?php echo "&serie=$serie&patrimonio=$patrimonio&tipo=$tipo_equipamento_escolha&status=$Status_equipamento&area=$escolherArea"; ?>";	


				});
			});

		</script>
	</body>
</html>