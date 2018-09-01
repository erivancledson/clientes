<form class="form-horizontal" method="POST">

	<div class="panel panel-default">
    		<div class="panel-heading">
    			<h1 class="panel-title">Compromisso</h1>
    		</div>
    		
			<div class="panel-body">


	            <div class="form-group">
					<label for="titulo" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-3"> 
						<input type="text" class="form-control"  name="titulo" value="<?php echo $agenda['titulo']; ?>"/>
					</div>
				</div>

               
			   <div class="form-group">
					<label for="descricao" class="col-sm-2 control-label">Descrição</label>
					<div class="col-sm-4"> 
						<input type="text" class="form-control"  name="descricao" value="<?php echo $agenda['descricao']; ?>"/>
					</div>
				</div>

         
		 <div class="form-group">
					<label for="data" class="col-sm-2 control-label">Data</label>
					<div class="col-sm-2"> 
						<input type="date" class="form-control"  name="data" value="<?php echo $agenda['data']; ?>"/>
					</div>
				</div>




                <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</div>

			</div>
	
	

	



</form>