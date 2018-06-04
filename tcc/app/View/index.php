<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Era Uma Vez</title>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Meu style -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="../../assets/css/full-slider.css" rel="stylesheet">
    <!-- Brushed CSS -->
    <link rel="stylesheet" href="../../assets/css/main.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="https://use.fontawesome.com/203fc140a4.js"></script>
</head>
<body>
<!-- Navigation -->
<div class="menu" id="menu">
    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a id="texto-ini" class="inicial-li" href="ControlerUsuario.php">Página Inicial</a>
                </li>
                <li>
                    <a id="texto-ini" href="#">Biblioteca</a>
                </li>
                <li>
                    <a id="texto-ini" href="#">Criar sinopse</a>
                </li>

                <li>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            if (!isset($_SESSION['us_id'])){
                                echo "Visitante";
                            }else{
                                $nome = $_SESSION['us_nome'];
                                echo "parabens, você esta logado $nome";
                            } ?>
                            <span class="glyphicon glyphicon-user" aria-hidden="true" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Formulário</a></li>
                            <li><a href="?acao=login">Entrar</a></li>
                            <li><a href="?acao=cadastrar">Cadastrar</a></li>
                            <li><a href="?acao=logout">Sair</a></li>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</div>
<div class = "fundo">
    <br>
    <br>
    <div class="container">
        <div class="row" id="pessoal">
            <div class="col-lg-12 coisinha-legal">

            </div>
        </div>
        <br>
        <br>
        <br>

        <p>Recomendações</p>
        <hr>


<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-8" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">

                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="1">
                                    <img src="../../assets/img/livros700x300/livro1.png"></div>

                                <div class="item" data-slide-number="2">
                                    <img src="../../assets/img/livros700x300/livro2.png"></div>

                                <div class="item" data-slide-number="3">
                                    <img src="../../assets/img/livros700x300/livro3.png"></div>

                                <div class="item" data-slide-number="4">
                                    <img src="../../assets/img/livros700x300/livro4.png"></div>

                                <div class="item" data-slide-number="5">
                                    <img src="../../assets/img/livros700x300/livro5.png"></div>

                                <div class="item" data-slide-number="6">
                                    <img src="../../assets/img/livros700x300/livro6.png"></div>
                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4" id="carousel-text"></div>

                    <div id="slide-content" style="display: none;">
                        <div id="slide-content-0">
                            <h2>As crônicas de Nárnia</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Ler mais</a></p>
                        </div>

                        <div id="slide-content-1">
                            <h2>Quem é você Alasca?</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-2">
                            <h2>As vantagens de ser invisível</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-3">
                            <h2>Como eu era antes de você</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-4">
                            <h2>A culpa é das estrelas</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>

                        <div id="slide-content-5">
                            <h2>teorema de Katherine</h2>
                            <p>Lorem Ipsum Dolor</p>
                            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Slider-->

        <div class="row hidden-xs" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-0"><img src="../../assets/img/livros/livro1.jpg"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-1"><img src="../../assets/img/livros/livro2.jpg"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-2"><img src="../../assets/img/livros/livro3.jpg"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-3"><img src="../../assets/img/livros/livro4.jpg"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-4"><img src="../../assets/img/livros/livro5.jpg"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-5"><img src="../../assets/img/livros/livro6.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
        <br><br>
<p>Sugestões</p>
<hr>
        <div class="container">
            <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">

                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="1">
                                            <img src="../../assets/img/livros700x300/livro1.png"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="../../assets/img/livros700x300/livro2.png"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="../../assets/img/livros700x300/livro3.png"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="../../assets/img/livros700x300/livro4.png"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="../../assets/img/livros700x300/livro5.png"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="../../assets/img/livros700x300/livro6.png"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>As crônicas de Nárnia</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Ler mais</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Quem é você Alasca?</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>As vantagens de ser invisível</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Como eu era antes de você</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>A culpa é das estrelas</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>teorema de Katherine</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-0"><img src="../../assets/img/livros/livro1.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-1"><img src="../../assets/img/livros/livro2.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-2"><img src="../../assets/img/livros/livro3.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-3"><img src="../../assets/img/livros/livro4.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-4"><img src="../../assets/img/livros/livro5.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-5"><img src="../../assets/img/livros/livro6.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>

        <p>Mais vistos</p>
        <hr>
        <div class="container">
            <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">

                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="1">
                                            <img src="../../assets/img/livros700x300/livro1.png"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="../../assets/img/livros700x300/livro2.png"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="../../assets/img/livros700x300/livro3.png"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="../../assets/img/livros700x300/livro4.png"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="../../assets/img/livros700x300/livro5.png"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="../../assets/img/livros700x300/livro6.png"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>As crônicas de Nárnia</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Ler mais</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Quem é você Alasca?</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>As vantagens de ser invisível</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Como eu era antes de você</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>A culpa é das estrelas</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>teorema de Katherine</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-0"><img src="../../assets/img/livros/livro1.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-1"><img src="../../assets/img/livros/livro2.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-2"><img src="../../assets/img/livros/livro3.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-3"><img src="../../assets/img/livros/livro4.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-4"><img src="../../assets/img/livros/livro5.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-5"><img src="../../assets/img/livros/livro6.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>

        <div class="container">

            <footer>
                <div class="row">
                    <div class="col-lg-12" style="margin-left: 25%">
                        <p><?php
                            if (!isset($_SESSION['us_id'])){
                            echo "Você não esta logado";
                            }else{
                                $nome = $_SESSION['us_nome'];
                                echo "parabens, você esta logado $nome";
                            } ?>
                        </p>
                    </div>

                </div>
            </footer>
        </div>


    <!-- jQuery -->
    <script src="../../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/carousel.js"></script>

</body>
</html>