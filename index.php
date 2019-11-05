<?php
    session_start();
    require './php/conexao_pdo.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HelpFood</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" href="img/icon.png" type="image/x-png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="libs/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/component2.css" />

        <script type="text/javascript" defer src="libs/jQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" defer src="libs/Bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" defer src="js/main.js"></script>

        <script src="js/modernizr.custom.js"></script>
        
    </head>

    <body class="bg-color-1">
        <section class="story-1 bg-img-1 d-flex row justify-content-center align-items-center">
            <nav id="menu" class="navbar fixed-top navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" style="font-size:35px;color:white"></i>
                </button>
                <a class="navbar-brand" href="index.php"><h3 class="no-margin"><swap>HELP</swap>FOOD</h3></a>

                <div class="col"></div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item cl-effect-21">
                            <a class="nav-link nav-color" href="index.php"><h6 class="no-margin">Home</h6></a>
                        </li>
                        <li class="nav-item cl-effect-21">
                            <a class="nav-link nav-color" href="index.php"><h6 class="no-margin">Sobre</h6></a>
                        </li>
                        <li class="nav-item cl-effect-21">
                            <?php if (!Logged()) :  ?>
                                <a class="nav-link nav-color" href="./pag/login.php"><h6 class="no-margin">Login</h6></a>
                            <?php endif; ?>
                        </li>
                        <li class="nav-item cl-effect-21">    
                            <?php if (Logged()) :  ?>
                                <a class="nav-link nav-color" href="./pag/login.php"><h6 class="no-margin">Cesta</h6></a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <?php if (!Logged()) :  ?>
                    <div class="cl-effect-6">
                        <a class="nav-phone nav-link" href="#"><img class="tam-img-1" src="img/img11.png">&nbsp;&nbsp;77 99969-5920</a>
                    </div>
                    <?php else : ?>
                        <div class="col-lg-2 padd-right-1 d-flex align-items-start justify-content-center">
                            <div class="btn-group">
                                <button class="btn btn-light" href="#" role="button" data-target="#dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION["nome"]; ?>
                                </button>
                                <button type="button" class="btn btn-def dropdown-toggle dropdown-toggle-split" data-target="#dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" id="dropdownMenuLink">
                                    <a class="dropdown-item padd-2 d-flex no-padding no-margin hover" href="./pag/update.php">Atualizar dados</a>
                                    <?php if (Admin()) :  ?>
                                        <a class="dropdown-item padd-2 no-padding no-margin hover" href="./pag/show.php">Listar usuários</a>
                                    <?php endif; ?>
                                    <a class="dropdown-item padd-2 no-padding no-margin hover" href="./php/mysql_delete.php">Deletar conta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item padd-left-4 no-padding no-margin color-red" href="./php/mysql_logout.php">Sair</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
            <div class="w-100 d-none d-md-block"></div></br></br></br></br>
            <div class="story-2">
                <div class="col-lg-12 wow slideInRight d-flex justify-content-center align-items-center">
                    <h1><swap>HELP</swap>FOOD</h1>
                </div>
                <div></br>
                <div class="col-lg-12 wow slideInRight d-flex justify-content-center align-items-center p-white">
                    <p class="text-center">
                        Nossa corporação oferece doações de alimentos para instituições de caridade. </br>
                        Somos boas pessoas fazendo do mundo um lugar melhor!
                    </p>
                </div></br>
                <div class="col-lg-12 wow zoomIn d-flex justify-content-center align-items-center">
                    <div class="opt opt-1 link-rad col d-flex justify-content-center align-items-center">
                        <a class="nav-color nav-link" href="#">Ver doações</a>
                    </div>
                    <div class="col-auto"></div>
                    <div class="opt opt-2 link-rad2 col d-flex justify-content-center align-items-center">
                        <a class="nav-color nav-link" href="#">Saiba mais</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="story-4 padd-top-1 marg-bottom-1 row d-flex justify-content-center">
            <div class="col-lg-12 wow fadeInDown marg-bottom-1 d-flex justify-content-center align-items-start">
                <h2><swap>VANTAGENS</swap> DO HELPFOOD</h2>
            </div>
            <div class="container row col-10 d-flex justify-content-center align-items-start">
                <div class="col-lg-4 wow fadeInRight marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-1.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-bodytxt-alg">
                        <h5 class="mt-0"><b>Praticidade</b></h5>
                        <p class="text-left">O HELPFOOD foi desenvolvido para que você doe de forma rápida e prática.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInDown marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-2.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-body txt-alg">
                        <h5 class="mt-0"><b>Segurança</b></h5>
                        <p class="text-left">Além de doar e ajudar o proximo você também dispõe-se de toda segurança, doe seguro.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-5.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-body txt-alg">
                        <h5 class="mt-0"><b>Gratidão</b></h5>
                        <p class="text-left">Além de doar e ajudar o proximo você também dispõe-se de toda segurança, doe seguro.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-3.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-body txt-alg">
                        <h5 class="mt-0"><b>Solidariedade</b></h5>
                        <p class="text-left">Nós nos comprometemos a ajudar o próximo, dando suporte a atos de caridade.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-4.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-body txt-alg">
                        <h5 class="mt-0"><b>Compromisso</b></h5>
                        <p class="text-left">O HELPFOOD toma todo cuidado com sua doação, agindo de forma responsável e profissional.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft marg-bottom-3 media d-flex justify-content-center align-items-center" id="set-4">
                    <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                        <a href="#set-4" class="hi-icon d-flex justify-content-center align-items-center"><img src="img/sbl-6.png" class="tam-img-3" alt="..."></a>
                    </div>
                    <div class="media-body txt-alg">
                        <h5 class="mt-0"><b>Acessível</b></h5>
                        <p class="text-left">Doe de onde estiver, o HELPFOOD pode ser acessado de qualquer lugar, basta ter internet.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="story-3 bg-img-2 d-flex justify-content-center align-items-center">
            <h4><i>Fazer o bem sem olhar a quem</i></h4>
        </section>
        <section class="story-4 padd-top-1 marg-bottom-2 row d-flex justify-content-center">
            <div class="marg-bottom-1 wow slideInLeft col-lg-12 d-flex justify-content-center align-items-start">
                <h2>ESCOLHA SUA <swap>DOAÇÃO</swap></h2>
            </div>
            <div class="container row">
                <div class="col-lg-6 wow fadeInLeft d-flex align-items-center justify-content-center">
                    <figure class="figure col-lg-10">
                        <div class="box-shadow rounded text-left">
                            <img src="img/img13.jpg" class="tam-img-4 figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption">
                                <p>Doação de alimentos</br></p>
                                <div>
                                    Doe diretamente com suprimentos alimentícios.
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 wow fadeInRight d-flex align-items-center justify-content-center">
                    <figure class="figure col-lg-10">
                        <div class="box-shadow rounded text-left">
                            <img src="img/img12.jpg" class="tam-img-4 figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption">
                                <p>Doação de dinheiro</br></p>
                                <div>
                                    Doe indiretamente com recurso monetário.
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </section>
        <section class="story-6"> 
            <div class="row">
                <div class="col-lg-12 story-6-1 bg-img-3 d-flex justify-content-center align-items-center">
                    <div class="container row d-flex justify-content-center align-items-center">
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <h4><i>"O amor e a compaixão são necessidades, não luxos. Sem eles a Humanidade não pode sobreviver."</i></h4>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end align-items-center">
                            <h4 class="color-white">(Dalai Lama)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 story-6-2 bg-img-4"></div>
                <div class="col-lg-6 story-6-2 d-flex align-items-center justify-content-center">
                    <div class="col-lg-12 container d-flex align-items-center justify-content-center">
                        <div class="col-10 row d-flex align-items-center justify-content-center">
                            <div class="text-center row div-content d-flex align-items-center justify-content-center">
                                <h2 class="marg-bottom-3 wow fadeInDown">SUA <swap>DOAÇÃO</swap> ESTARÁ SEGURA</h2>
                                <p class="wow slideInRight">O HELPFOOD dispõe de recursos de segurança para que sua contribuição não caia em mãos erradas.</p>
                                <div class=" wow slideInRight marg-top-1 opt opt-3 link-rad3 d-flex justify-content-center align-items-center">
                                    <a class="nav-color opt nav-link color-orange" href="#">Leia mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 story-6-3 bg-img-5 d-flex justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="wow fadeInUp col-lg-12 d-flex justify-content-center align-items-center">
                            <h2 class="marg-bottom-3 color-white">POR QUE O <swap>HELP</swap>FOOD?</h2>
                        </div>
                        <div class="wow slideInLeft col-lg-5 text d-flex justify-content-center align-items-center">
                            <p class="text-center">Depois de anos de experiência e muitas pessoas alimentadas com a nossa ajuda, achamos que a escolha é realmente óbvia, temos tudo o que precisa para praticar o bem de forma eficiente.</p>
                        </div>
                        <div class="wow slideInLeft col-lg-12 d-flex justify-content-center align-items-center marg-top-1">
                            <div class="col-lg-2 opt opt-2 link-rad2 col d-flex justify-content-center align-items-center">
                                <a class="nav-color nav-link" href="#">Saiba mais sobre nós</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <?php if (!Logged()) :  ?>
            <section class="story-7 wow zoomIn d-flex padd-bottom-2 row justify-content-center align-items-center">
                <div class="col-lg-12 padd-top-2 d-flex justify-content-center align-items-center">
                    <h2 class="marg-bottom-3">FAÇA O <swap>LOGIN</swap> PARA CONTRIBUIR</h2>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="opt opt-1 link-rad col-lg-2 d-flex justify-content-center align-items-center">
                        <a class="nav-color nav-link" href="pag/login.php">Login</a>
                    </div>
                    <div class="col-auto"></div>
                    <div class="opt opt-3 link-rad2 col-lg-2 d-flex justify-content-center align-items-center">
                        <a class="nav-color d-flex justify-content-center align-items-center opt nav-link color-orange" href="pag/register.php">Cadastra-se</a>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <footer id="footer" class="story-3 bg-color-2 row fixed-end">
            <div class="col-lg-4 wow fadeInRight">
                <div class="col-lg-12 d-flex justify-content-center align-items-center padd-top-2">
                    <h5 class="color-white">Fale conosco</h5>
                </div>
                <div id="rod-info" class="col-lg-12 row d-flex justify-content-start align-items-center padd-left-1 padd-top-4 color-white">
                    <img class="tam-img-1" src="img/rod-1.png">
                    <a href="#footer" class="padd-left-2">+55 77 999695920</a>
                    <a href="#footer" class="padd-left-2">+55 38 991466339</a>
                </div>
                <div id="rod-info" class="col-lg-12 row d-flex justify-content-start align-items-center padd-left-1 padd-top-5 color-white">
                    <img class="tam-img-1" src="img/rod-2.png">
                    <a href="#footer" class="padd-left-2">tarikelucasfm8@gmail.com</a></br>
                    <a href="#footer" class="padd-left-3">kucaa30112001@gmail.com</a>
                </div>
                <div id="rod-info" class="col-lg-12 row d-flex justify-content-start align-items-center padd-left-1 padd-top-5 color-white">
                    <img class="tam-img-1" src="img/rod-3.png">
                    <a href="#footer" class="padd-left-2">1934 Padre Cícero, Juazeiro, CE 63010-225</a></br>
                    <a href="#footer" class="padd-left-3">1904 Vacina, Rio de Janeiro, RJ 22050-002</a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInDown">
            <div class="col-lg-12 d-flex row justify-content-center align-items-center padd-top-2">
                    <h5 class="color-white">Mais sobre o HELPFOOD</h5>
                    <div id="rod-info" class="col-lg-12 flex-column d-flex justify-content-start align-items-start padd-left-1 padd-top-5 color-white">                    
                        <a href="#footer" class="padd-left-2 color-orange-2">Política de segurança</a>
                        <a href="#footer" class="padd-left-2 color-orange-2">Política de privacidade</a>
                        <a href="#footer" class="padd-left-2 color-orange-2">Política de doação</a>
                        <a href="#footer" class="padd-left-2 color-orange-2">HELPFOOD no Brasil</a>
                        <a href="#footer" class="padd-left-2 color-orange-2">Trabalhe conosco</a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 wow fadeInLeft">
                <div class="col-lg-12 d-flex justify-content-center align-items-center padd-top-2">
                    <h5 class="color-white">Acompanhe ONGs amigas</h5>
                </div>
                <div class="col-lg-12 padd-top-4">                   
                    <li id="rod-info" class="padd-left-3 color-orange"><a href="#footer">Oh my dog</a></li>
                    <li id="rod-info" class="padd-left-3 color-orange"><a href="#footer">DOAmor</a></li>
                </div>
            </div>
            <div id="copy" class="col-lg-12 row no-margin marg-top-1">
                <div class="col-lg-6 padd-top-3 padd-bottom-1 flex-column">
                    <p class="color-grey no-margin">Copyright &#169; 2019 HELPFOOD. Todos os direitos reservados.</p>
                    <p class="color-grey no-margin">Desenvolvido por Tárike e Lucas</p>  
                </div>
                <div class="col-lg-6 row padd-top-3">
                    <div class="logos" id="face"></div>	
                    <div class="logos" id="insta"></div>
                    <div class="logos" id="yt"></div>	
                    <div class="logos" id="twitt"></div>
                    <div class="logos" id="pinte"></div>
                    <div class="logos" id="g+"></div>
                </div>
            </div>
        </footer>
        <div id="preloader">
            <div class="inner">
                <div class="bolas">
                    <div><h5></h5></div>
                    <div><h5></h5></div>
                    <div><h5></h5></div>                    
                </div>
            </div>
        </div>
        <div class="smoothscroll-top rounded">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
    </body><script type="text/javascript" src="js/wow.js"></script>
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>-->
    <script>
        new WOW().init();
    </script>
    
    <script src="//tympanus.net/codrops/adpacks/demoad.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
             
</html>