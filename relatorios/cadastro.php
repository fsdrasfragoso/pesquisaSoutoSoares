<?php include_once 'verifica.php'; ?>
<!doctype html>
    <head>
        <title>SISTEMA DE LOGIN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="container">
            <header>
            </header>
            
            <?php
            if (isset($_GET['msg']))
            {
                if ($_GET['msg'] == 3)
                {
                    echo "<p class='text-danger'>Houve algum erro no cadastro! Tente novamente mais tarde.</p>";
                }
            }
            ?>
            
            <section name='cadastro'>                
                <form method='post' action='envia-cadastro.php' class="form-signin">
                
                    <img class="mb-4" src="img/login.png" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>
                    
                    <label class="sr-only">Nome</label>
                    <input type='text' name='nome' placeholder='Nome' required='required' lenght='100' class="form-control" />
                    
                    <label class="sr-only">Email</label>
                    <input type='email' name='email' placeholder='Endereço de email' required='required' lenght='50' class="form-control" />
                    
                    <label class="sr-only">Senha</label>
                    <input type='password' name='senha' placeholder='Senha' required='required' lenght='20' class="form-control" />
                    
                    <input type='submit' value='Cadastrar' class="btn btn-lg btn-primary btn-block" />
                </form>
            </section>

            <footer>
            </footer>
        </div>
    </body>
</html>
