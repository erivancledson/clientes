<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
	   			<h1 class="panel-title aw-titulo-panel">Usuários</h1>
	   			<a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>usuarios/adicionar"> Adicionar Usuário</a>
	   		</div>
	   	</div>
	   	
	   	<div class="panel-body">
		   <div class="table-responsive">
	   		<table class="table table-bordered table-striped">
	   			<thead>
	   				<tr>
	   					<th class="text-center col-md-3">Login</th>
	   					
	   					
	   					<th class="col-md-2"></th>
	   				</tr>


	   			</thead>

				   <?php if($usuarios != 0){ ?>
                  <?php foreach ($usuarios as $usuario): ?>
	   			<tbody>
	   				<tr>
					   <td> <?php echo $usuario['login']; ?></td>
	   				
	   					<td class="text-center">

						   <a class="btn btn-warning btn-xs" href="<?php echo BASE; ?>usuarios/editar/<?php echo $usuario['id']; ?>">Editar</a>
						<a class="btn btn-danger btn-xs"  href="<?php echo BASE; ?>usuarios/excluir/<?php echo $usuario['id']; ?>">Excluir</a>
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
		<a href="<?php echo BASE; ?>/usuarios?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
	</li>	
	<?php else: ?>
	<li>
		<a href="<?php echo BASE; ?>/usuarios?p=<?php echo $q; ?>"><?php echo $q; ?></a>
	</li>	
	<?php endif; ?>
<?php endfor; ?>

 </ul>