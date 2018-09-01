<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Services</title>


    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css" />
	<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css" />

  
    <style>
    body {
        padding-top: 70px;
    
	}
    </style>



</head>

<body>

  
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
         
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Controle</a>
            </div>
         
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
		
				<li><a href="<?php echo BASE; ?>agendas">Agenda</a></li>
        <li><a href="<?php echo BASE; ?>clientes">Clientes</a></li>
        <li><a href="<?php echo BASE; ?>usuarios">Usuários</a></li>
        <li><a href="<?php echo BASE; ?>servicos">Serviços</a></li>
        <li><a href="#">Vendas</a></li>
        <li><a href="#">Suporte</a></li>
        <li><a href="<?php echo BASE; ?>login/logout">Sair</a></li>
		

                </ul>
            </div>
       
        </div>
     
    </nav>

  
    <div class="container">

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </div>


        <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>

</body>

</html>