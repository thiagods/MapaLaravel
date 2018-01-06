<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

	 <a href="/cadastrar" class="btn btn-success" role="button">Cadastrar</a>
	 <a href="/visualizar" class="btn btn-success" role="button">Visualizar</a>

	<h1>Cadastrar Ponto</h1>

	<hr />

	<form action="/enviar" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		@if(Session::has('mensagem_erro'))
			<div class="alert alert-danger alert-dismissable" role="alert">{{ Session::get('mensagem_erro') }}</div>
		@endif

		@if(Session::has('mensagem'))
			<div class="alert alert-success alert-dismissable" role="alert">{{ Session::get('mensagem') }}</div>
		@endif

		<!-- Nome -->

		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
		</div>

		<!-- Tipo -->
	  
		<div class="form-group">
			<label for="sel1">Tipo:</label>
			<select class="form-control" id="sel1" name="sel1">
				<option>Tipo 1</option>
				<option>Tipo 2</option>
				<option>Tipo 3</option>
				<option>Tipo 4</option>
			</select>
		</div>

		<!-- Latitude -->

		<div class="form-group">
			<label for="latitude">Latitude:</label>
			<input type="text" id="latitude" name="latitude" class="form-control" placeholder="Latitude">
		</div>

		<!-- Longitude -->
		<div class="form-group">
			<label for="longitude">Longitude:</label>
			<input type="text" id="longitude" name="longitude" class="form-control" placeholder="Longitude">
		</div>

		<button type="submit" class="btn btn-default">Salvar</button>
	</form>

</div>

</body>
</html>