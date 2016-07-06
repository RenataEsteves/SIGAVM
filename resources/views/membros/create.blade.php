@extends('layouts.master')

@section('Content')
	<div class="container">

		<div class="row">
			<!-- Cadastro -->
			<div class="col-xs-12 text-center">
				<h1> Cadastro de Membros </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<!--Inicio do Formulário-->
				<form class="form-horizontal" method="post" action="{{route('membros.store')}}">
					{{ csrf_field() }}
							<!--Nome do Cadêmico-->
					<div class="form-group">
						<legend>Dados Pessoais</legend>
						<label for="nome" class="col-xs-2 control-label"><p class="text-left">Nome Completo:</p></label>
						<div class="col-xs-10">
							<input type="text" class="form-control" name="nome" placeholder="Nome" />
						</div>
					</div>

					<!--RG, ORGÃO EXPEDITOR e CPF -->
					<div class="form-group">
						<label for="rg" class="col-xs-2 control-label"><p class="text-left">RG:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="rg" placeholder="RG" size=10 />
						</div>

						<label for="org" class="col-xs-1">Orgão Emissor:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="orgaoEmissor" placeholder="Ex.: SSP / SESDEC">
						</div>

						<label for="rg" class="col-xs-1 control-label"><p class="text-left">CPF:</p></label>
						<div class="col-xs-2">
							<input type="text" class="form-control cpf" name="cpf" placeholder="Ex.: 000.000.000-00" size=14 />
						</div>
					</div>

					<!--EMAIL E CELULAR -->
					<div class="form-group">
						<label for="email" class="col-xs-2 control-label"><p class="text-left">E-mail:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="email" placeholder="Ex.: email@outlook.com / email@gmail.com" size=40/>
						</div>

						<label for="cel" class="col-xs-1 control-label"><p class="text-left">Contato:</p></label>
						<div class="col-xs-2">
							<input type="text" class="form-control phone" name="fone" placeholder="Ex.: (00) 00000-0000" size=15/>
						</div>
						<label for="emer" class="col-xs-1">Contato Emergência:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control phone" name="foneEmerg" placeholder="Ex.: (00) 00000-0000" size=15/>
						</div>
					</div>

					<!-- Onde Estuda-->
					<div class="form-group">
						<label for="tipo" class="col-xs-2 control-label"> <p class="text-left">Instituição:</p></label>
						<div class="col-xs-7">
							<select class="form-control" name="id_Inst">
								@foreach ($insts as $inst)
									<option value="{{$inst->id}}">{{$inst->nome}}</option>
								@endforeach
							</select>
						</div>
						{{--<!-- Ano de cadastro do membro-->--}}
						<label for="Cad" class="col-xs-1">Ano de Cadastro:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control anoCad" name="anoCadastro" placeholder="Ex.: 2015/1" size=6/>
						</div>

					</div>
					<!--Dias em que estuda -->
					<div class="form-group">
						<label for="tipo" class="col-xs-2 control-label"><p class=" text-left">Selecione os dias:</p></label>
						<div class="col-xs-6">
							<label class="checkbox-inline">
								<input type="checkbox" name="dia[segunda]" value="1"> Segunda
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="dia[terca]" value="1"> Terça
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="dia[quarta]" value="1"> Quarta
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="dia[quinta]" value="1"> Quinta
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="dia[sexta]" value="1"> Sexta
							</label>
						</div>
						<!-- Situação do usuário - ativo ou não-->
						<label for="tipo" class="col-xs-2 control-label">Situação:</label>
						<div class="col-xs-2">
							<label class="radio-inline">
								<input type="radio" name="ativo" checked="checked" value="1"> Ativo
							</label>
							<label class="radio-inline">
								<input type="radio" name="ativo" value="0"> Inativo
							</label>
						</div>
					</div>

					<!--Endereço-->
					<div class="form-group">
						<legend>Endereço</legend>
						<label for="rua" class="col-xs-2 control-label"><p class="text-left">Rua:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="rua" placeholder="Rua / Av..." />
						</div>
						<label for="n" class="col-xs-1 control-label">Número:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="numero" placeholder="Número" />
						</div>
					</div>

					<div class="form-group">
						<label for="bairro" class="col-xs-2 control-label"><p class="text-left">Bairro:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="bairro" placeholder="Bairro / Setor" />
						</div>
						<label for="cidade" class="col-xs-1 control-label text-left">Cidade:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="cidade" placeholder="Cidade, UF" />
						</div>
					</div>

					<!--Botão enviar-->
					<div class="form-group">
						<div class="col-xs-offset-11 col-xs-0">
							<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-saved"></i> Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection