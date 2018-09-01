

<form class="form-horizontal" method="POST">

<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Serviço</h1>
		</div>
		
		<div class="panel-body">


			<div class="form-group">
				<label for="nome" class="col-sm-2 control-label">Nome Serviço</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $servico['nome']; ?>"/>
				</div>
			</div>

		   
		   <div class="form-group">
				<label for="descricao" class="col-sm-2 control-label">Descrição</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $servico['descricao']; ?>"/>
				</div>
			</div>

	 
	 <div class="form-group">
				<label for="valor_inicial" class="col-sm-2 control-label">Valor Inicial</label>
				<div class="col-sm-2"> 
					<input type="text" class="form-control dinheiro" id="valor_inicial" name="valor_inicial" value="<?php echo number_format($servico['valor_inicial'], 2, ',','.'); ?>"/>
				</div>
			</div>



	 <div class="form-group">
				<label for="valor_final" class="col-sm-2 control-label">Valor Final</label>
				<div class="col-sm-2"> 
					<input type="valor_final" class="form-control dinheiro" id="data" name="valor_final" value="<?php echo number_format($servico['valor_final'], 2, ',','.'); ?>"/>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</div>







</form>



