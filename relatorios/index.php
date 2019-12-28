<?php session_destroy; ?>
<!doctype html>
    <head>
        <title>relatorios - contato@netosales.com.br</title>
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
                if ($_GET['msg'] == 0)
                {
                    echo "<p class='text-danger'>Login ou senha inválidos!</p>";
                }
                else if ($_GET['msg'] == 1)
                {
                    echo "<p class='text-success'>Cadastro efetuado com sucesso! Acesse o sistema com seus dados.</p>";
                }
                else if ($_GET['msg'] == 2)
                {
                    echo "<p class='text-warning'>Este e-mail já está sendo usado em nosso sistema.</p>";
                }
            }
            ?>
            
            <section name='login'>
                <form method='post' action='envia-login.php' class="form-signin">
                
                    <img class="mb-4" src="../logoSoutoSoaresMini.png" alt="" >
                    <h1 class="h3 mb-3 font-weight-normal">Acesso aos relatorios</h1>
                    
                    <label class="sr-only">Email</label>
                    <input type='email' name='email' placeholder='Endereço de email' required='required' lenght='50' autofocus class="form-control" />
                    
                    <label class="sr-only">Senha</label>
                    <input type='password' name='senha' placeholder='Senha' required='required' lenght='20' class="form-control" />
                    
                    <input type='submit' value='Entrar' class="btn btn-lg btn-primary btn-block" /><br>
                    
                    
                </form>
            </section>
<footer>
            </footer>
        </div>
    </body>
        
</html>

