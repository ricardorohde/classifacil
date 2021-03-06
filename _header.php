<?php

//SIMULA UM LOGIN
if( (isset($_POST['logged'])) && ($_POST['logged'] == 'login')){
    setcookie('logged', true);
    $page = $_SERVER['PHP_SELF'];
    header("Refresh: 0; $page");
}

if( (isset($_POST['logged'])) && ($_POST['logged'] == 'logout')){
    setcookie('logged', false);
    $page = $_SERVER['PHP_SELF'];
    header("Refresh: 0; $page");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Classifácil A Tribuna</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="bower_components/awesome-bootstrap-checkbox/demo/build.css" rel="stylesheet">
    <link href="bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <?php

    if(isset($_GET['logged']))
        $logged = $_GET['logged'];

    if(isset($css)){
        foreach($css as $value){
            echo '<link href="';
            echo $value;
            echo '" rel="stylesheet">';
            echo PHP_EOL;
        }
    }

    if(isset($js)){
        foreach($js as $key=>$value){
            if($value == 'HEAD'){
                echo '<script src="';
                echo $key;
                echo '"></script>';
                echo PHP_EOL;
            }
        }
    }

    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="compare-nav">

    <a href="#modal-compare" class="btn btn-lg btn-success btn-compare" data-toggle="modal">Comparar</a>

    <div class="selected-items">
        <div class="item-selected">
            <img src="assets/img/exemplos/imoveis/imovel1.jpg" height="46">
        </div>

        <div class="item-selected">
            <img src="assets/img/exemplos/imoveis/imovel2.jpg" height="46">
        </div>

        <div class="item-selected">
            <img src="assets/img/exemplos/imoveis/imovel3.jpg" height="46">
        </div>
    </div>

</div>

<?php include('partials/_modal-compare.php'); ?>

<nav class="barra-topo hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm">
                <h5>
                    <a href="#" id="addfavoritos" rel="sidebar" title="Adicione aos Favoritos">ADICIONAR O CLASSIFÁCIL AOS FAVORITOS</a>
                </h5>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="pull-right" style="padding-top:3px;">
                    <a href="https://www.facebook.com/jornalatribuna" target="_blank">
                        <span class="fa fa-2x fa-facebook-square"></span>
                    </a>
                    <a href="https://twitter.com/aTribunaES" target="_blank">
                        <span class="fa fa-2x fa-twitter-square"></span>
                    </a>
                    <a href="https://www.linkedin.com/company/rede-tribuna" target="_blank">
                        <span class="fa fa-2x fa-linkedin-square"></span>
                    </a>
                </div>
                <div class="pull-right" style="padding-top:8px;padding-right:14px;">
                    <a href="http://www.tribunaonline.com.br" target="_blank">
                        <strong>TRIBUNA ONLINE</strong>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="http://atribunaes.com.br" target="_blank">
                        <strong>ASSINE A TRIBUNA</strong>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->

<section class="container topo-logo">

    <div class="row">
        <div class="col-sm-6">
            <h2>
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="Classifácil" class="img-responsive logo-classifacil">
                </a>
            </h2>
        </div>
        <div class="<?php echo ( (!isset($_COOKIE['logged'])) || ($_COOKIE['logged'] == false)) ? 'col-sm-6 hidden-xs' : 'col-sm-3 hidden-xs'; ?>">
            <div class="no-margin pull-right text-right text-cinza-escuro">
                <h5 style="margin-top:30px;">Atendimento</h5>
                <h3>
                    <span class="small">(27)</span> 3323-6333
                </h3>
                <p>classifacil@redetribuna.com.br</p>
            </div>
        </div>
        <?php if(isset($_COOKIE['logged']) && $_COOKIE['logged'] == true): ?>
        <div class="col-sm-3">
            <div class="media text-right" style="margin-top:30px;">
                <div class="media-body media-middle">
                    Rômulo Guimarães <br>
                    <a href="dashboard.php">
                        Minha Conta
                        <span class="fa fa-fw fa-gear"></span>
                    </a>
                    &nbsp;
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="logout">
                        <input type="hidden" name="logged" value="logout">
                        <a href="#" onclick="document.forms['logout'].submit();">
                            Sair
                            <span class="fa fa-fw fa-sign-out"></span>
                        </a>
                    </form>
                </div>
                <div class="media-right media-middle">
                    <img src="http://www.gravatar.com/avatar/0?s=60&d=mm&f=y" alt="" class="img-circle">
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

</section><!--/.container-->

<nav class="navbar menu-principal">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="fa fa-2x fa-angle-down"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul>
                <li>
                    <a href="imoveis.php" class="<?php echo ($menu['imoveis']) ? 'ativo' : ''; ?> item-menu-imoveis">
                        <span class="fa fa-fw fa-home"></span><br class="hidden-xs">
                        Imóveis
                    </a>
                </li>
                <li>
                    <a href="veiculos.php" class="<?php echo ($menu['veiculos']) ? 'ativo' : ''; ?> item-menu-veiculos">
                        <span class="fa fa-fw fa-car"></span><br class="hidden-xs">
                        Veículos
                    </a>
                </li>
                <li>
                    <a href="diversos.php" class="<?php echo ($menu['diversos']) ? 'ativo' : ''; ?> item-menu-diversos">
                        <span class="fa fa-fw fa-asterisk"></span><br class="hidden-xs">
                        Diversos
                    </a>
                </li>
                <li>
                    <a href="dashboard.php" class="<?php echo ($menu['anuncie']) ? 'ativo' : ''; ?>">
                        <span class="fa fa-fw fa-newspaper-o"></span><br class="hidden-xs">
                        Anuncie
                    </a>
                </li>
                <li class="small-li">
                    <a href="dashboard.php" class="<?php echo ($menu['login']) ? 'ativo' : ''; ?>">
                        Minha<br class="hidden-xs"> Conta
                    </a>
                </li>
                <li class="small-li">
                    <a href="faq.php" class="<?php echo ($menu['faq']) ? 'ativo' : ''; ?>">
                        Dúvidas<br class="hidden-xs"> Frequentes
                    </a>
                </li>
                <li class="small-li">
                    <a href="contato.php" class="<?php echo ($menu['contato']) ? 'ativo' : ''; ?>">
                        Fale<br class="hidden-xs"> Conosco
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="conteudo">
