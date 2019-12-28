<?php include_once 'verifica.php'; ?>
<?php


?>
<!doctype html>
    <head>
        <title>Relatorios Souto Soares - BA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="dani.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="container">
            <header>
                <img class="mb-4" src="img/login.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Relatórios Sistema</h1>
            </header>
            
            <section name='home'>
		<p>Bem-vindo<b> <?php echo $_SESSION['nome']; ?>!</b><a href='logout.php'>Sair</a>
</p>
		
            </section>
	<div class="form-row">	
		<div class="form-group col-md-1">
		<form action="cadastro.php" method="post">
			<button class="btn btn-info" type="submit" name="button">Cadastro</button>
		</form>
		</div>
		<div class="form-group col-md-1">

		<form action="dados.php" method="post">
			<button class="btn btn-warning" type="submit" name="button">Geral</button>
		</form>

		</div>
		<div class="form-group col-md-1">

		<form action="urbanas.php" method="post">
			<button class="btn btn-success" type="submit" name="button">Urbanas</button>
		</form>

		</div>
		<div class="form-group col-md-1">

		<form action="rurais.php" method="post">
			<button class="btn btn-danger" type="submit" name="button">Rurais</button>
		</form>

		</div>
		<div class="form-group col-md-2">

		<form action="bairros.php" method="post">
			<button class="btn btn-dark" type="submit" name="button">Bairros/Comun.</button>
		</form>

		</div>


		<div class="form-group col-md-2">

		<form action="imoveis.php" method="post">
			<button class="btn btn-primary" type="submit" name="button">Q. 1 a 3 - Imóveis</button>
		</form>

		</div>
		<div class="form-group col-md-2">

		<form action="home.php" method="post">
			<button class="btn btn-warning" type="submit" name="button">Q. 4 e 5 - Água</button>
		</form>

		</div>
		<div class="form-group col-md-2">

		<form action="home.php" method="post">
			<button class="btn btn-success" type="submit" name="button">Q. 6 e 7- Esg. e lixo</button>
		</form>

		</div>
		

	</div>
	<div class = "form-row">
		<div class="form-group col-md-2">

		<form action="segPub.php" method="post">
			<button class="btn btn-danger" type="submit" name="button">Q. 8 - Seg. Pública</button>
		</form>

		</div>

	</div>
	<div class = "form-row">
	 <h2 class="h3 mb-12 font-weight-normal">Questionário 2--></h2>
		<div class="form-group col-md-1">

		<form action="dados2.php" method="post">
			<button class="btn btn-warning" type="submit" name="button">Geral</button>
		</form>

		</div>
		<div class="form-group col-md-1">

		<form action="urbanas2.php" method="post">
			<button class="btn btn-success" type="submit" name="button">Urbanas</button>
		</form>

		</div>
		<div class="form-group col-md-1">

		<form action="rurais2.php" method="post">
			<button class="btn btn-danger" type="submit" name="button">Rurais</button>
		</form>

		</div>

	

	</div>
            <footer>
                
            </footer>
        </div>
    </body>
</html>

