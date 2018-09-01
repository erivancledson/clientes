<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
	   			<h1 class="panel-title aw-titulo-panel">Serviços</h1>
	   			<a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>servicos/adicionar"> Adicionar Serviço</a>
			    <a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>servicos/gerarRelatorio"> Imprimir</a>
	   		</div>
	   	</div>
	   	
	   	<div class="panel-body">

            <div class="table-responsive">
    


	   		<table class="table table-bordered table-striped">
	   			<thead>
	   				<tr>
	   					<th class="text-center col-md-4">Nome</th>
                        <th class="text-center col-md-4">Descrição</th>
				  	    <th class="text-center col-md-1">Valor Inicial</th>
				 	    <th class="text-center col-md-1">Valor Final</th>  
	   					
	   					
	   					<th class="col-md-2"></th>
	   				</tr>


	   			</thead>

				   <?php if($servicos != 0){ ?>
                  <?php foreach ($servicos as $servico): ?>
	   			<tbody>
	   				<tr>
					    <td> <?php echo $servico['nome']; ?></td>
						<td> <?php echo $servico['descricao']; ?></td>
						<td>R$ <?php echo number_format($servico['valor_inicial'], 2, ',', '.'); ?></td>
						<td>R$ <?php echo number_format($servico['valor_final'], 2, ',', '.'); ?></td>
	   				
	   					<td class="text-center">

						   <a class="btn btn-warning btn-xs" href="<?php echo BASE; ?>servicos/editar/<?php echo $servico['id']; ?>">Editar</a>
						<a class="btn btn-danger btn-xs"  href="<?php echo BASE; ?>servicos/excluir/<?php echo $servico['id']; ?>">Excluir</a>
				</td>
	   				</tr>

					   <?php endforeach; ?>
                       <?php } ?>
	   				
	   			</tbody>
	   		</table>
			   </div>
	   	</div>
	</div>


<!--paginacao -->
<ul class="pagination">
<?php for($q=1;$q<=$paginas;$q++): ?>
	<?php if($paginaAtual == $q): ?>
	<li>
		<a href="<?php echo BASE; ?>/servicos?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
	</li>	
	<?php else: ?>
	<li>
		<a href="<?php echo BASE; ?>/servicos?p=<?php echo $q; ?>"><?php echo $q; ?></a>
	</li>	
	<?php endif; ?>
<?php endfor; ?>

 </ul>


<!--foco no formulario -->
<script type="text/javascript">
document.getElementById("busca").focus();
</script>




