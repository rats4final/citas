<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css"href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">

        {{-- @vite(['public/assets/estilos/bootstrap.css' ])
        @vite(['public/assets/estilos/fonts.css' ])
        @vite(['public/assets/estilos/style.css']) --}}
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style.css">
        
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>

    <header class="section page-header">
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light"
                                        src="images/logo-default1-140x57.png" alt="" width="140" height="57"
                                        srcset="images/logo-default-280x113.png 2x" /></a></div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"


                                            @auth
                        <a href="{{ url('/login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Volver</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Session</a>


                    @endauth
                                    </li>
                            </div>
                        </div><a></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img"
            style="background-image: url(&quot;https://foodandtravel.mx/wp-content/uploads/2022/03/Monterrey-turismo-medico-portada.jpg&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="box-default">
                    <h1 class="box-default-title">Bienvenido</h1>
                    <div class="box-default-decor"></div>
                    <p class="big box-default-text"> El Hospital San Gabriel cubre prestaciones de servicios en riesgo profesional, riesgo común, maternidad, además entrega subsidios pre natal y post natal, que se realiza en especie y un pago en dinero.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-gray-1">
        <section class="section-transform-top">
            <div class="container">
                <div class="box-booking">
                    <h1 class="box-default-title">
                        <center>Hospital San Gabriel</center>
                    </h1>
                </div>
            </div>
        </section>
        </section>
        <div class="bg-gray-1">
            <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
                <div class="container">
                    <div class="row row-50 justify-content-xl-between align-items-lg-center">
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="box-image"><img class="box-image-static"
                                    src="https://elmedicointeractivo.com/wp-content/uploads/2022/01/medico-700x466.jpg"
                                    alt="" width="483" height="327" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 wow fadeInRight">
                            <h2>Sobre Nosotros</h2>
                            <p>En 1956 inicia sus actividades el Seguro de la Caja Nacional de Seguridad Social (CNSS) con la inauguración de servicios médicos, tras la promulgación del Código de Seguridad Social Boliviano, realizado el 14 de diciembre de ese mismo año. Con la norma se busca proteger al capital humano del país, los trabajadores asalariados.

</p>
                                <li> <img src="/assets/images/EscudoBolivia.png" alt=""></li>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="section footer-minimal context-dark">
            <ul class="social-list">

                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play"
                        href="https://youtu.be/dQw4w9WgXcQ"></a></li>
            </ul>
            <p class="rights"><span>&copy;&nbsp; </span><span
                    class="copyright-year"></span><span>&nbsp;</span><span>Caja Nacional de salud
                   </span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span></p>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

    {{-- @vite(['public/assets/estilos/script.js' ])
    @vite(['public/assets/estilos/core.min.js' ]) --}}

</body>

</html>