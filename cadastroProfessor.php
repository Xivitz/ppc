<?php include('cabecalho.php') ?>


<div class="container">
	<form action="" method="get" accept-charset="utf-8" id="formulario">


	<div class="container">
	  <h2>Cadastro de Professores</h2>
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#dadosPessoais">Dados Pessoais</a></li>
	    <li><a data-toggle="tab" href="#atuacaoIES">Atuação IES</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="dadosPessoais" class="tab-pane fade in active">
	      <h3></h3>	      
	        <div class="row">
				<div class="form-group col-md-9">
					<label for="campo1">Nome:</label>
					<input type="text" class="form-control" id="campo1">
				</div>

				<div class="form-group col-md-offset-9">
					<label for="campo2">CPF:</label>
					<input type="text" class="form-control" id="campo3" placeholder="xxx.xxx.xxx.xx">
				</div>

				<div class="form-group col-md-6">
					<label for="campo3">Maior titulação:</label>
					<input type="text" class="form-control" id="campo3">
				</div>

				<div class="form-group col-md-offset-6">
					<label for="campo4">Área de formação:</label>
					<input type="text" class="form-control" id="campo4">
				</div>

				<div class="form-group col-md-9">
					<label for="campo5">Currículo Lattes (link):</label>
					<input type="text" class="form-control" id="campo5">
				</div>

				<div class="form-group col-md-offset-9">
					<label for="campo6">Data de atualizaçao:</label>
					<input type="text" class="form-control" id="campo6">
				</div>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
	    </div>

	    <div id="atuacaoIES" class="tab-pane fade">
	       
	      <div class="container" style="margin-top: 60px;">
			<ul class="nav nav-pills nav-stacked col-md-2">
			  <li class="active"><a href="#geral" data-toggle="pill">Geral</a></li>
			  <li><a href="#atuacaoProfissional" data-toggle="pill">Atuação Profissional</a></li>
			  <li><a href="#publicacoes" data-toggle="pill">Publicações</a></li>
			</ul>
			<div class="tab-content col-md-10">
			        <div class="tab-pane fade in active" id="geral">
			        	<form action="" method="get" accept-charset="utf-8">
					    <div class="row">
				        	<div class="col-md-4">
				        		<label for="">Matrícula *</label>
				        		<input class="form-control col-md-4" type="text" required="true"></input>
				        	</div>
				        	<div class="col-md-4"> 
				        		<label for="">Data Admissão *</label>
				        		<input class="form-control col-md-8" type="text" id="datepicker" required="true"></input>	
				        	</div>
						</div>
			        	
			        	<div class="row" style="text-align: center">
				        	<hr>
				        	<label for="">Informe a quantidade de horas das atividades</label>
				        </div>

				        	<div class="row">				        		
					        	<div class="col-md-2">
						        	<input class="form-control" type="number"></input><label for="">Horas NDE</label>
					        	</div>
				        	</div>

				        	<div class="row">
					        	<div class="col-md-2">
						        	<input class="form-control" type="number"></input><label for="">Orientação TCC</label>       		
					        	</div>
				        	</div>

				        	<div class="row">
					        	<div class="col-md-2">
						        	<input class="form-control" type="number"></input><label for="">Coordenação Curso</label>
					        	</div>				        		
				        	</div>

				        	<div class="row">
					        	<div class="col-md-2">
						        	<input class="form-control" type="number"></input>
						        	<label for="">Coordenação Outros Cursos</label>					        	
					        	</div>				        		
				        	</div>

				        	<div class="row">
					        	<div class="col-md-2">
						        	<input class="form-control" type="number"></input>
						        	<label for="">Pesquisa (semestre atual)</label>					        	
					        	</div>				        		
				        	</div>
				        
						</form>
			        </div>

			        <div class="tab-pane fade" id="atuacaoProfissional">
			            
			            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. MotherFuck.</p>
			        </div>

			        <div class="tab-pane fade" id="publicacoes">
			        
			            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Bitch.</p>
			        </div>
			</div><!-- tab content -->
		   </div><!-- end of container -->
	    </div>
	  </div>
	</div>
</form>

