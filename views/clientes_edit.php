

<form class="form-horizontal" method="POST">

<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Cliente</h1>
		</div>
		
		<div class="panel-body">


			<div class="form-group">
				<label for="nome" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente['nome']; ?>"/>
				</div>
			</div>

		   
		   <div class="form-group">
				<label for="telefone" class="col-sm-2 control-label">Telefone</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $cliente['telefone']; ?>"/>
				</div>
			</div>

	 
	 <div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-3"> 
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente['email']; ?>"/>
				</div>
			</div>




			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</div>



</form>



