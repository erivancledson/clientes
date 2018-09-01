<div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <h1 class="panel-title aw-titulo-panel">Agenda</h1>
                <a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>agendas/adicionar"> Adicionar Compromisso</a>
            </div>
        </div>
        
        <div class="panel-body">
		<div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center col-md-3">Titulo</th>
                        <th class="text-center col-md-5">Descrição</th>
                        <th class="text-center col-md-2">Data</th>
                        
                        <th class="col-md-2"></th>
                    </tr>


                </thead>

                  <?php if($agendas != 0){ ?>

                    <?php foreach ($agendas as $agenda): ?>
                <tbody>
                    <tr>
                    <td> <?php echo $agenda['titulo']; ?></td>
                    <td> <?php echo $agenda['descricao']; ?></td>
                    <td> <?php echo date("d/m/Y", strtotime($agenda['data'])); ?></td>
                    
                        <td class="text-center">


                            <a class="btn btn-warning btn-xs" href="<?php echo BASE; ?>agendas/editar/<?php echo $agenda['id']; ?>">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="<?php echo BASE; ?>agendas/excluir/<?php echo $agenda['id']; ?>">Excluir</a>
                        

                        
                        </td>
                    </tr>

                       <?php endforeach; ?>
                       <?php } ?>
                    
                </tbody>
            </table>
			</div>
        </div>



<ul class="pagination">
<!--paginacao -->
<?php for($q=1;$q<=$paginas;$q++): ?>
	<?php if($paginaAtual == $q): ?>
	<li>
		<a href="<?php echo BASE; ?>/agendas?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
	</li>
	<?php else: ?>
	<li>
		<a href="<?php echo BASE; ?>/agendas?p=<?php echo $q; ?>"><?php echo $q; ?></a>
    </li>
	<?php endif; ?>
<?php endfor; ?>

</ul>


<script type="text/javascript">
    $(function()){
		$('[data-toggle="tooltip"]').tooltip();
	}
</script>