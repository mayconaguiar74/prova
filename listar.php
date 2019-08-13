<?php
	include ("conexao.php");
	$listarFolha = new folha();
	$valor = $listarFolha->buscarTodos();
?>	
<table border="1">
	<th>Item</th>
	<th>id</th>	
	<th>nome</th>
	<th>cpf</th>
	<th>ctps</th>		
	<th>cargo</th>
	<th>mes</th>
	<th>entrada</th>
	<th>Inicio Intervalo</th>
	<th>Fim Intervalo</th>
	<th>Saída</th>
	<th>Hora extra</th>
	<?php
		$i = 0;
		foreach($valor as $linha){
			$i++;
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
		<td><?php echo $linha["cpf"]; ?></td>
		<td><?php echo $linha["ctps"]; ?></td>
		<td><?php echo $linha["cargo"]; ?></td>	
		<td><?php echo $linha["mes"]; ?></td>	
		<td><?php echo $linha["entrada"]; ?></td>
		<td><?php echo $linha["inicioIntervalo"]; ?></td>
		<td><?php echo $linha["fimIntervalo"]; ?></td>
		<td><?php echo $linha["saida"]; ?></td>
		<td><?php echo $linha["horaExtra"]; ?></td>
	</tr>
	<?php
	}		
	?>
</table>
<p>
	Foram encontrados <?php echo $i; ?> registros
</p>