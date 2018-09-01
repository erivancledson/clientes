<h1>Relatório Serviços</h1>

<table border="1" width="500">
	<tr>
		<th>Nome do Serviço</th>
		<th>Valor Inicial</th>
		<th>Valor Final</th>
		<th></th>
	</tr>
	<?php foreach($list as $item): ?>
		<tr>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['valor_inicial']; ?></td>
			<td><?php echo $item['valor_final']; ?></td>
			

		</tr>
	<?php endforeach; ?>
</table>

<!--abre a tela de impressao -->
<script type="text/javascript">
window.print();
</script>