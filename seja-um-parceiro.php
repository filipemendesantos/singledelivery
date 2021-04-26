<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Single Delivery - Seja um Parceiro</title>

    <meta content="Seja um parceiro do Single Delivery e aumente o seu faturamento" name="description">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://www.singledelivery.com.br/seja-um-parceiro">
    <meta property="og:title" content="Single Delivery - Seja um Parceiro">
    <meta property="og:site_name" content="Single Delivery">
    <meta property="og:description" content="Seja um parceiro do Single Delivery e aumente o seu faturamento">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/medias.css" rel="stylesheet">

    <script type="text/javascript">
        /* Máscaras ER */
        function mascara() {
            v_obj = id('telefone');
            v_fun = mtel;
            setTimeout("execmascara()", 1);
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value);
        }

        function mtel(v) {
            v = v.replace(/D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(d{2})(d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(d)(d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
    </script>
</head>

<body>
    <section id="section-top" class="clearfix">
        <div class="container-top container d-flex align-items-center">
            <a class="mr-auto" href="home"><img src="assets/img/logo.png" alt="logo" class="img-logo img-fluid"></a>

            <nav class="main-nav d-none d-lg-block">
                <ul>
                    <li><a href="#como-funciona-parceiro">Como funciona</a></li>
                    <li><a href="#como-funciona">Vantagens</a></li>
                    <li><a href="#asingledelvery">Parceiros</a></li>
                    <li><a id="btn-nav" href="seja-um-parceiro">Fale conosco</a></li>
                </ul>
            </nav>
        </div>

        <div class="container-100-width container d-flex">
            <div class="row row-top" data-aos="fade-up">
                <div class="text-top-parceiro col-md-8 order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
                    <h2 class="museosans text-top-main">VOCÊ ACHA QUE VENDER<br>ONLINE PODE SER<br>SIMPLES</h2>
                    <h4 class="museosansthin subtext-top">O <b>Single Delivery</b> é uma plataforma de comércio online<br>para você vender mais! <b>Veja como é simples:</b></h4>
                </div>

                <div class="col-md-4 order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/imgparceiro-1.png" alt="" class="img-top">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <a href="#como-funciona-parceiro"><img class="img-bottom-parceiro" src="assets/img/btn-bottom-3.png"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-single-delivery" class="clearfix">
        <div id="como-funciona-parceiro" style="border: 1px solid #2c83c4"></div>

        <div class="div-title-single-delivery" data-aos="fade-up">
            <div class="rectangle-title-single-delivery"></div>
            <h1 class="title-single-delivery museosansthin"><b>Tudo</b> para vender online:</h1>
        </div>

        <div class="container-100-width container" data-aos="zoom-out" data-aos-delay="100">
            <div style="text-align: center;">
                <div class="square-single-delivery">
                    <div class="circle-single-delivery">
                        <img src="assets/img/controle.png" class="img-circle">
                    </div>
                    <div class="div-text-square">
                        <h4 class="museosansmedium text-title-square">Super controle</h4>
                        <div class="div-subtext-square">
                            <h6 class="museosansmedium text-square">Personalize sua loja inserindo sua marca e informando horários de funcionamento, formas de pagamento, valores e áreas de entrega. Cadastre seus produtos, consulte relatórios analíticos... e tudo mais para tornar suas vendas online simples!<br><br></h5>
                        </div>
                    </div>
                </div>
                <div class="square-single-delivery">
                    <div class="circle-single-delivery">
                        <img src="assets/img/sobre-nos.png" class="img-circle">
                    </div>
                    <div class="div-text-square">
                        <h4 class="museosansmedium text-title-square">Painel sensacional</h4>
                        <div class="div-subtext-square">
                            <h6 class="museosansmedium text-square">Tenha uma visão geral de seus pedidos agrupados por status, com todas as informações do pedido e do seu cliente. Tudo organizado e fácil de usar para que você otimize seu atendimento com agilidade no recebimento e na gestão de seus pedidos, podendo atender cada vez mais clientes.</h5>
                        </div>
                    </div>
                </div>
                <div class="square-single-delivery">
                    <div class="circle-single-delivery">
                        <img src="assets/img/cadastro-simples.png" class="img-circle">
                    </div>
                    <div class="div-text-square">
                        <h4 class="museosansmedium text-title-square">Cadastro simples</h4>
                        <div class="div-subtext-square">
                            <h6 class="museosansmedium text-square">Crie seu catálogo de produtos com suas próprias imagens, informações, preços e agrupe em categorias. Você tem total autonomia para atualizar seu estoque, alterar preços e criar promoções!<br><br><br></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-footer">
        <div class="container-100-width container d-flex">
            <div class="row">
                <div class="col-md-6">
                    <div class="div-fale-conosco">
                        <div class="rectangle-title-single-delivery"></div>
                        <h1 class="title-single-delivery museosansmedium">Fale Conosco:</h1>
                        <div class="div-content-fale-conosco">
                            <div class="item-fale-conosco">
                                <img class="img-fale-conosco" src="assets/img/mail.png">
                                <p class="text-content-fale-conosco">singledelivery@singledelivery.com.br</p>
                            </div>
                            <div class="item-fale-conosco">
                                <img class="img-fale-conosco" src="assets/img/phone.png">
                                <p class="text-content-fale-conosco">(75) 3624-8436</p>
                            </div>
                            <div class="item-fale-conosco">
                                <img class="img-fale-conosco" src="assets/img/whatsapp.png">
                                <p class="text-content-fale-conosco">00000-0000</p>
                            </div>
                            <div class="item-fale-conosco">
                                <img class="img-fale-conosco" src="assets/img/location.png">
                                <p class="text-content-fale-conosco">Rua Milão, 56, 44088-282, Brasília, Feira de Santana-BA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 div-img-section-footer" style="text-align: center;">
                    <h1 class="title-img-footer museosans">Baixe nosso app</h1>
                    <img class="img-section-footer-parceiro" src="assets/img/prints.png">                    
                    <div class="div-btn-mais">
                        <a class="btn-mais" href="seja-um-parceiro">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php' ?>

    <a href="#"><img class="img-back-to-top" src="assets/img/back-to-top.png"></a>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>