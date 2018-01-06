<!DOCTYPE html>
<html>
<head>
	<title>Visualizar</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	{!! $map['js'] !!}
</head>
<body>

<div class="container">

	<a href="/cadastrar" class="btn btn-success" role="button">Cadastrar</a>
	<a href="/visualizar" class="btn btn-success" role="button">Visualizar</a>

	<h1>Visualizar Pontos</h1>	

	{!! $map['html'] !!}	

</div>

</body>
</html