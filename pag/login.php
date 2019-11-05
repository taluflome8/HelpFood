    <?php
    session_start();
    require '../php/conexao_pdo.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" href="../img/icon.png" type="image/x-png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../libs/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" type="text/css" href="../css/component2.css" />

		<script src="../js/modernizr.custom.js"></script>
        <script type="text/javascript" defer src="../libs/jQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" defer src="../libs/Bootstrap/js/bootstrap.min.js"></script>
	    <script type="text/javascript" defer src="../js/main.js"></script>
        <script src="../js/modernizr.custom.js"></script>
        
    </head>

    <body class="bg-color-1 body-unity">
        <section class="story-8 bg-color-2 d-flex row justify-content-center align-items-center">
            <nav id="menu" class="navbar fixed-top navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" style="font-size:35px;color:white"></i>
                </button>
                <a class="navbar-brand" href="../index.php"><h3 class="no-margin"><swap>HELP</swap>FOOD</h3></a>

                <div class="col"></div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item cl-effect-21">
                            <a class="nav-link nav-color" href="../index.php"><h6 class="no-margin">Home</h6></a>
                        </li>
                        <li class="nav-item cl-effect-21">
                            <a class="nav-link nav-color" href="../index.php"><h6 class="no-margin">Sobre</h6></a>
                        </li>
                        <li class="nav-item cl-effect-21">
                            <?php if (!Logged()) :  ?>
                                <a class="nav-link nav-color" href="login.php"><h6 class="no-margin">Login</h6></a>
                            <?php endif; ?>
                        </li>
                        <li class="nav-item cl-effect-21">
                            <?php if (Logged()) :  ?>
                                <a class="nav-link nav-color" href="cesta.php"><h6 class="no-margin">Cesta</h6></a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <div class="cl-effect-6">
                        <a class="nav-phone nav-link" href="#"><img class="tam-img-1" src="../img/img11.png">&nbsp;&nbsp;77 99969-5920</a>
                    </div>
                </div>
            </nav>
        </section>
        <section class="story-9 padd-top-2 bg-img-6 ">
            <div class="container col-lg-4 padd-1 border-rad-1">
                <form method="post" class="color-white" action="../php/mysql_login.php">
                    <h2>Login</h2>
                    <div class="col-lg-12 marg-bottom-4 padd-top-3">
                        <label for="inputName4">Nome do usuário</label>
                        <input type="text" name="nome_log" class="form-control" placeholder="Seu nickname" required>   
                    </div>
                    <div class="col-lg-12 marg-bottom-4">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" name="email_log" class="form-control" id="inputEmail4" placeholder="Seu e-mail" required>   
                    </div>
                    <div class="col-lg-12 marg-bottom-4">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" name="senha_log" class="form-control" id="inputPassword4" placeholder="Sua senha" required>   
                    </div>
                    <div class="d-flex justify-content-end align-items-center"> 
                        <button type="submit" name="submit" class="btn btn-def color-white">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 text-center color-white"><p>Caso ainda não esteja cadastrado, <a class="color-orange-2" href="register.php">clique aqui</a>.</p></div>   

        </section>
    </body>
    
    <script src="//tympanus.net/codrops/adpacks/demoad.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
</html>