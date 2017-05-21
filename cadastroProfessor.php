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
				        	<h4>Informe a quantidade de horas das atividades</h4>
				        	<hr>
				        </div>

				        <div class="col-md-6" style="border-right: solid;">
				        	<div class="row">	
					        	<div class="col-md-12">						        	
					        		<div class="col-md-3">
					        			<input class="form-control" type="number"></input>					        			
					        		</div>
						        	<div class="col-md-offset-2">
							        	<label for="">Horas NDE</label>
						        	</div>						        	
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Orientação TCC</label>
						        	</div>
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Coordenação Curso</label>
						        	</div>
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>						        		
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Coordenação Outros Cursos</label>						        		
						        	</div>
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>						        		
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Pesquisa (semestre atual)</label>						        		
						        	</div>
					        	</div>				        		
				        	</div>
				        </div>

				        <div class="col-md-6"> 
				        	<div class="row">	
					        	<div class="col-md-12">						        	
					        		<div class="col-md-3">
					        			<input class="form-control" type="number"></input>					        			
					        		</div>
						        	<div class="col-md-offset-2">
							        	<label for="">Atividades Extra classe no curso</label>
						        	</div>						        	
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Atividae Extra classe outros cursos</label>
						        	</div>
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">						        	
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Qtde de Horas Curso</label>
						        	</div>
					        	</div>
				        	</div>
				        	<br>
				        	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-3">
						        		<input class="form-control" type="number"></input>						        		
						        	</div>
						        	<div class="col-md-offset-2">
						        		<label for="">Qtde de Horas Outros Cursos</label>						        		
						        	</div>
					        	</div>
				        	</div>				        	
				        </div>				        

						</form>
			        </div>

			        <div class="tab-pane fade" id="atuacaoProfissional">
			            
			            <div>
			            	<div class="row">
					        	<div class="col-md-12">
						        	<div class="col-md-1">
						        		<input type="checkbox"></input>						        		
						        	</div>
						        	<div class="col-md-2">
						        		<label for="">Membro NDE?</label>	
						        	</div>

						        	<div class="col-md-1">
						        		<input type="checkbox"></input>						        		
						        	</div>
						        	<div class="col-md-offset-1">
						        		<label for="">Membro Colegiado?</label>						        		
						        	</div>
					        	</div>
				        	</div>
				        	<div class="row">
					        	<div class="col-md-12">
					        		<div class="col-md-1">
							        	<input type="checkbox" id="docente"></input>
							        </div>
							        <div class="col-md-8">
							        	<label for="">Docente com formação/capacitação/experiência pedagógica?</label>	
							        </div>
					        	</div>      		
				        	</div>
				        	<hr>
				        	<h5 align="center">O sistema irá calcular o tempo em anos e meses a partir da diferença com a data atual.</h5>
							<hr>
				        	<div class="row">
					        	<div class="col-md-6">

						        	<form action="" method="get" accept-charset="utf-8">
							        	<fieldset>
							        		<legend id="legend">Tempo de vínculo initerrupto do docente com o curso</legend>

							        		<div class="row">
							        			<div class="col-md-4">
									        		<label for="">Data Inicial</label>
									        		<input class="form-control" type="text" id="datepicker" required="true"></input>
							        			</div>
							        			<div class="col-md-1" style="margin-top: 30px;">
									        		<i class="fa fa-calendar"></i>							        				
							        			</div>
							        			<div class="col-md-6">
									        		<label for="">Tempo inicial</label>
									        		<input class="form-control" type="text"></input>
							        			</div>
							        		</div>

							        	</fieldset>
						        		
						        	</form>				        		
					        	</div>

					        	<div class="col-md-6">

						        	<form action="" method="get" accept-charset="utf-8">
							        	<fieldset>
							        		<legend id="legend">Tempo Experiência Magistério Superior</legend>

							        		<div class="row">
							        			<div class="col-md-4">
									        		<label for="">Data Inicial</label>
									        		<input class="form-control" type="text" id="datepicker" required="true"></input>
							        			</div>
							        			<div class="col-md-1" style="margin-top: 30px;">
									        		<i class="fa fa-calendar"></i>							        				
							        			</div>
							        			<div class="col-md-6">
									        		<label for="">Tempo inicial</label>
									        		<input class="form-control" type="text"></input>
							        			</div>
							        		</div>

							        	</fieldset>
						        		
						        	</form>				        		
					        	</div>
				        	</div>
				        	<br>	
				        	<div class="row">
					        	<div class="col-md-6">

						        	<form action="" method="get" accept-charset="utf-8">
							        	<fieldset>
							        		<legend id="legend">Experiência em cursos a distância</legend>

							        		<div class="row">
							        			<div class="col-md-4">
									        		<label for="">Data Inicial</label>
									        		<input class="form-control" type="text" id="datepicker" required="true"></input>
							        			</div>
												<div class="col-md-1" style="margin-top: 30px;">
									        		<i class="fa fa-calendar"></i>							        				
							        			</div>
							        			<div class="col-md-6">
									        		<label for="">Tempo inicial</label>
									        		<input class="form-control" type="text"></input>
							        			</div>
							        		</div>
							        	</fieldset>						        		
						        	</form>
					        	</div>

					        	<div class="col-md-6">

						        	<form action="" method="get" accept-charset="utf-8">
							        	<fieldset>
							        		<legend id="legend">Tempo Experiência Profissional</legend>

							        		<div class="row">
							        			<div class="col-md-4">
									        		<label for="">Data Inicial</label>
									        		<input class="form-control" type="text" id="datepicker" required="true"></input>
							        			</div>
							        			<div class="col-md-1" style="margin-top: 30px;">
									        		<i class="fa fa-calendar"></i>							        				
							        			</div>
							        			<div class="col-md-6">
									        		<label for="">Tempo inicial</label>
									        		<input class="form-control" type="text"></input>
							        			</div>
							        		</div>

							        	</fieldset>
						        		
						        	</form>				        		
					        	</div>
				        	</div>
				        	<hr>
				        	<div class="row">
					        	<div class="col-md-6">
						        	<form action="" method="get" accept-charset="utf-8">
							        	<fieldset>
							        		<legend id="legend">Participação em Eventos</legend>
								        	<div class="row">
									        	<div class="col-md-12">
										        	<div class="col-md-3">
										        		<input class="form-control" type="number"></input>	
										        	</div>
										        	<div class="col-md-offset-2">
										        		<label for="">Quantidade</label>
										        	</div>
									        	</div>
								        	</div>
								        	<div class="row">
									        	<div class="col-md-12">										        	
										        	<div>
										        		<label for="">Anexar comprovantes</label>
										        	</div>
										        	<div class="col-md-6">
										        		<select name="" class="form-control">
										        		</select>										        		
										        	</div>
										        	<div class="col-md-offset-6">
									        		<i class="fa fa-plus-square"></i>
									        		<i class="fa fa-minus-square" style="margin-right: 810px;"></i>		        		
							        			</div>
									        	</div>
								        	</div>
							        	</fieldset>						        		
						        	</form>	        		
					        	</div>		        		
				        	</div>
			            </div>
			        </div>

			        <div class="tab-pane fade" id="publicacoes">
				        <div class="row">			        			        	
				        	<div class="col-md-6">
					        	<form action="" method="get" accept-charset="utf-8">

						        	<fieldset>
						        		<legend id="legend">Artigos publicados em periódicos científicos</legend>
						        		<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">na área (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
							        	<br>
							        	<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">em outras áreas (qtde)</label>
									        	</div>
								        	</div>
							        	</div>			        		
						        	</fieldset>
					        	</form>
				        	</div>
				        	<div class="col-md-6">
					        	<form action="" method="get" accept-charset="utf-8">
						        	<fieldset>
						        		<legend id="legend">Livros ou capítulos</legend>
						        		<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">livros publicados na área (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
							        	<br>
							        	<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">livros publicados em outras áreas (qtde)</label>
									        	</div>
								        	</div>
							        	</div>			        		
						        	</fieldset>
					        	</form>
				        	</div>			            
				        </div>
				        <br>
				        <div class="row">			        			        	
				        	<div class="col-md-6">
					        	<form action="" method="get" accept-charset="utf-8">
						        	<fieldset>
						        		<legend id="legend">Trabalhos publicados em anais</legend>
						        		<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">completos (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
							        	<br>
							        	<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">resumos (qtde)</label>						        		
									        	</div>
								        	</div>
							        	</div>			        		
						        	</fieldset>
					        	</form>
				        	</div>
				        	<div class="col-md-6">
					        	<form action="" method="get" accept-charset="utf-8">
						        	<fieldset>
						        		<legend id="legend">Propriedade intelectual</legend>
						        		<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">depositada (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
							        	<br>
							        	<div class="row">
								        	<div class="col-md-12">
									        	<div class="col-md-3">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-2">
									        		<label for="">registrada (qtde)</label>
									        	</div>
								        	</div>
							        	</div>			        		
						        	</fieldset>
					        	</form>
				        	</div>			            
				        </div>
				        <br>
				        <div class="row">			        			        	
				        	<div class="col-md-12">
					        	<form action="" method="get" accept-charset="utf-8">
						        	<fieldset>
						        		<legend id="legend">Outras publicações</legend>
						        		<div class="row">
								        	<div class="col-md-8">
									        	<div class="col-md-2">
									        		<input class="form-control" type="number"></input>
									        	</div>
									        	<div class="col-md-offset-1">
									        		<label for="">Traduções de livros, capítulos de livros ou artigos publicados (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
							        	<br>
							        	<div class="row">
								        	<div class="col-md-8">
									        	<div class="col-md-2">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-1">
									        		<label for="">Projetos e/ou produções técnicas artísticas e culturais (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
										<br>
							        	<div class="row">
								        	<div class="col-md-8">
									        	<div class="col-md-2">
									        		<input class="form-control" type="number"></input>						        		
									        	</div>
									        	<div class="col-md-offset-1">
									        		<label for="">Produção didático-pedagógica relevante, publicada ou não (qtde)</label>
									        	</div>
								        	</div>
							        	</div>
						        	</fieldset>
					        	</form>
				        	</div>				        	
				        </div>
				        <br>
        				<div class="row">
				        	<div class="col-md-12">										        	
					        	<div>
					        		<label for="" style="margin-left: 90px;">Anexar comprovantes</label>
					        	</div>
					        	<div class="col-md-1">
				        		<i class="fa fa-plus-square"></i>
				        		<i class="fa fa-minus-square" style="margin-right: 810px;"></i>		        		
		        				</div>
					        	<div class="col-md-4">
					        		<select name="" class="form-control">
					        		</select>										        		
					        	</div>
				        	</div>
				        </div>
			        </div>  
			</div><!-- tab content -->
		   </div><!-- end of container -->
	    </div>
	</div>
	</form>
</div>
<?php include('rodape.php') ?>
