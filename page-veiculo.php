<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = ['assets/js/page-anuncio.js'];
//Item do menu ativo
$menu['veiculos'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x padding-bottom-3x">
        <div class="col-md-8 col-md-offset-2">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container context-veiculos">
    <div class="row">

        <!-- Conteúdo do Anúncio -->
        <div class="col-md-8">

            <div class="container-anuncio">
                <h1>Corolla 2013</h1>

                <div class="galeria-anuncio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="preco">
                                <div class="inner-preco">
                                    <span class="small">R$</span> 86.350
                                </div>
                            </div>
                            <div class="slider-img-grande">
                                <a href="https://www.youtube.com/watch?v=-xVStcMtzps" class="item-slider-galeria">
                                    <img src="assets/img/exemplos/veiculos/page-veiculo/veiculo1.jpg" class="img-responsive" />
                                </a>
                                <a href="assets/img/exemplos/veiculos/page-veiculo/veiculo2.jpg" class="item-slider-galeria">
                                    <img src="assets/img/exemplos/veiculos/page-veiculo/veiculo2.jpg" class="img-responsive" />
                                </a>
                                <a href="assets/img/exemplos/veiculos/page-veiculo/veiculo3.jpg" class="item-slider-galeria">
                                    <img src="assets/img/exemplos/veiculos/page-veiculo/veiculo3.jpg" class="img-responsive" />
                                </a>
                                <a href="assets/img/exemplos/veiculos/page-veiculo/veiculo4.jpg" class="item-slider-galeria">
                                    <img src="assets/img/exemplos/veiculos/page-veiculo/veiculo4.jpg" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row slider-img-nav">
                                <div class="col-sm-3">
                                    <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/veiculos/page-veiculo/veiculo1.jpg);"></div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/veiculos/page-veiculo/veiculo2.jpg);"></div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/veiculos/page-veiculo/veiculo3.jpg);"></div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/veiculos/page-veiculo/veiculo4.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="informacoes-anuncio">
                    <div class="row">
                        <div class="col-md-12">

                            <?php include('partials/_share-and-actions.php'); ?>

                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <h3>Descrição</h3>
                                    <hr>
                                    <p>
                                        Revisões realizadas Baixa km Único dono IPVA pago Pneus novos Nenhuma batida Veículo de não-fumante Parece novo Vários opcionais
                                    </p>
                                    <p>
                                        Computador de bordo, rodas de liga leve.
                                    </p>
                                    <p>
                                        Ar-quente, direção elétrica, câmbio automático, retrovisores elétricos, trio eletrico, ar-condicionado, direção hidráulica, volante com regulagem de altura, travas elétricas
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Detalhes do veículo</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Valor:</strong> R$ 86.350,00</p>
                                            <p><strong>Seção:</strong> Venda</p>
                                            <p><strong>Região:</strong> Vitória</p>
                                            <p><strong>Cor:</strong> Prata</p>
                                            <p><strong>Combustível:</strong> Total flex</p>
                                            <p><strong>Quilometragem:</strong> 25.000km</p>
                                            <p><strong>Câmbio:</strong> Automático</p>
                                            <p><strong>Portas:</strong> 4 Portas</p>
                                            <p><strong>Ano/Modelo:</strong> 2013/2013</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Vidro Elétrico:</strong> Sim</p>
                                            <p><strong>Teto solar:</strong> Sim</p>
                                            <p><strong>Banco de couro:</strong> Sim</p>
                                            <p><strong>Ar condicionado:</strong> Sim</p>
                                            <p><strong>Farol de neblina:</strong> Sim</p>
                                            <p><strong>Farol de Milha:</strong> Sim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Características de Segurança</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p></p><strong>Air Bag</strong></p>
                                            <p></p><strong>Alarme</strong></p>
                                            <p></p><strong>Freios ABS</strong></p>
                                            <p></p><strong>Blindagem</strong></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p></p><strong>GPS</strong></p>
                                            <p></p><strong>Rastreador</strong></p>
                                            <p></p><strong>Trava de Segurança</strong></p>
                                            <p></p><strong>Outros</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Documentação</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p></p><strong>Garantia de Fábrica</strong></p>
                                            <p></p><strong>Todas as revisões feitas</strong></p>
                                            <p></p><strong>Único Dono</strong></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p></p><strong>Alienado</strong></p>
                                            <p></p><strong>IPVA Pago</strong></p>
                                            <p></p><strong>Licenciado</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Localização</h3>
                                </div>
                                <div class="localizacao-mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1871.259195167498!2d-40.29201669200893!3d-20.278799113696735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb81818d8018a37%3A0xcb90f4a1f772c6d!2sR.+Maria+de+Lourdes+Poyares+Labuto%2C+190+-+Mata+da+Praia%2C+Vit%C3%B3ria+-+ES%2C+29065-540!5e0!3m2!1spt-BR!2sbr!4v1455670013722" width="800" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="panel-body">
                                    <span class="fa fa-fw fa-lg fa-map-marker"></span> R. Maria de Lourdes, Mata da Praia, Vitória-ES
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <?php include('partials/_share-and-actions.php'); ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Anunciante e Publicidade -->
        <div class="col-md-4">

            <div class="sidebar-affix">
                <!-- Anunciante -->
                <div class="info-vendedor">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Anunciante</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img src="http://lorempixel.com/60/60/people/9" class="img-circle">
                                </div>
                                <div class="media-body media-middle">
                                    <h4>Marcela Silva</h4>
                                    <h5>27 3333-2020</h5>
                                </div>
                            </div>
                            <div class="divisor-2x"></div>
                            <h4>Envie sua proposta</h4>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Nome completo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="DDD + Telefone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" placeholder="Seu email">
                                </div>
                                <textarea class="form-control input-lg" placeholder="Mensagem"></textarea>
                                <div class="divisor-1x"></div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-default btn-roxo-veiculos">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="sidebar-right-publicidade padding-2x">
                    <img src="http://placehold.it/358x260" class="img-responsive">
                </div>
            </div>

        </div>

        <div class="col-md-8">

            <h2 class="text-300">Ofestas em destaque</h2>

            <div class="destaques-pagina-anuncio">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-imoveis">
                        <h2 class="padding-2x text-verde-imoveis">
                            <span class="fa fa-fw fa-home"></span>
                            imóveis
                        </h2>
                        <div class="item-destaque" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 320.000
                                        </div>
                                    </div>
                                    <a
                                        href="page-imovel.php"
                                        class="imagem-anuncio-destaque"
                                        style="background-image: url('assets/img/exemplos/imoveis/imovel1.jpg');"
                                    >
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Apartamento 3qts
                                            </a>
                                        </h3>
                                        <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>2</strong> Quartos,
                                            <strong>1</strong> Suíte,
                                            <strong>1</strong> Vaga de Garagem
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis1" class="styled" type="checkbox">
                                                    <label for="imoveis1">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-veiculos">
                        <h2 class="padding-2x text-roxo-veiculos">
                            <span class="fa fa-fw fa-car"></span>
                            veículos
                        </h2>
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 86.350
                                        </div>
                                    </div>
                                    <div id="anuncio-001">
                                        <a
                                            href="page-imovel.php"
                                            class="imagem-anuncio-destaque"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Corolla 2013
                                            </a>
                                        </h3>
                                        <div class="truncate">Com airbag duplo, câmbio automático, freio a disco, etc</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>16 mil</strong> km,
                                            cor: <strong>prata</strong>,
                                            ano/modelo: <strong>2013/2014</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox no-margin">
                                                    <input id="veiculo1" class="styled" type="checkbox">
                                                    <label for="veiculo1">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-diversos">
                        <h2 class="padding-2x text-laranja-diversos">
                            <span class="fa fa-fw fa-asterisk"></span>
                            diversos
                        </h2>
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 920
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos1.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Geladeira Duplex
                                            </a>
                                        </h3>
                                        <div class="truncate">Geladeira semi-nova, com apenas 5 meses de uso</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            novo? <strong>não</strong>,
                                            voltagem: <strong>110v</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>
<?php include('partials/_modal-denuncie.php'); ?>