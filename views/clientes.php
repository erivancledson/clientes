<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
	   			<h1 class="panel-title aw-titulo-panel">Clientes</h1>
	   			<a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>clientes/adicionar"> Adicionar Clientes</a>
	   		</div>
	   	</div>
	   	
	   	<div class="panel-body">
		   <div class="table-responsive">
	   		<table class="table table-bordered table-striped">
	   			<thead>
	   				<tr>
	   					<th class="text-center col-md-4">Nome</th>
						<th class="text-center col-md-3">Telefone</th>
						<th class="text-center col-md-3">E-mail</th>
	   					
	   					
	   					<th class="col-md-2"></th>
	   				</tr>


	   			</thead>

				 <?php if($clientes != 0){ ?>
                    <?php foreach ($clientes as $cliente): ?>
	   			<tbody>
	   				<tr>
					   <td> <?php echo $cliente['nome']; ?></td>
					   <td> <?php echo $cliente['telefone']; ?></td>
					   <td> <?php echo $cliente['email']; ?></td>
	   				
	   					<td class="text-center">


						   <a class="btn btn-warning btn-xs" href="<?php echo BASE; ?>clientes/editar/<?php echo $cliente['id']; ?>">Editar</a>
						<a class="btn btn-danger btn-xs" href="<?php echo BASE; ?>clientes/excluir/<?php echo $cliente['id']; ?>">Excluir</a>

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
		<a href="<?php echo BASE; ?>/clientes?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
	</li>	
	<?php else: ?>
	<li>
		<a href="<?php echo BASE; ?>/clientes?p=<?php echo $q; ?>"><?php echo $q; ?></a>
	</li>	
	<?php endif; ?>
<?php endfor; ?>




