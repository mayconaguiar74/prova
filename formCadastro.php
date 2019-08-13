<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<form action="folhaController.php" method="POST">
<div class="row">

<div class="col-md-6">
	<label>Nome:</label>
	<input type="text" name="nome">
</div>


<div class="col-md-6">
	<label>CPF</label>
	<input type="text" name="cpf">
</div>


<div class="col-md-6">	
	<label>CTPS:</label>
	<input type="text" name="ctps">	
</div>	


<div class="col-md-6">
	<label>Cargo:</label>
	<input type="text" name="cargo">
</div>


<div class="col-md-6">
	<label>Mes:</label>
	<input type="date" name="mes">
</div>


<div class="col-md-6">	
	<label>Entrada:</label>
	<input type="time" name="entrada">
</div>

<div class="col-md-6">		
	<label>Início Intervalo:</label>
	<input type="time" name="inicioIntervalo">
</div>

<div class="col-md-6">		
	<label>Fim Intervalo:</label>
	<input type="time" name="fimIntervalo">
</div>

	

<div class="col-md-6">	
	<label>Saída:</label>
	<input type="time" name="saida">
</div>


<div class="col-md-6">	
	<label>Hora Extra:</label>
	<input type="number" name="horaExtra">		
</div>	
	
	
	<input type="submit" value="Gravar">
	</div>
	
</form>
</body>
	</html>