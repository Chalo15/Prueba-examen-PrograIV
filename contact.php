<!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Registro </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                    <div class="main-header ">
                        <div class="header-top d-none d-lg-block">
                        <div class="container">
                            <div class="col-xl-12">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="header-info-left">
                                            <ul>     
                                                <li>Telefono: 2210 4010</li>
                                                <li>Correo: busessanmarino@gmail.com</li>
                                            </ul>
                                        </div>
                                        <div class="header-info-right">
                                            <ul class="header-social">    
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    <div class="header-bottom  header-sticky">
                            <div class="container">
                                <div class="row align-items-center">
                                    <!-- Logo -->
                                    <div class="col-xl-2 col-lg-2">
                                        <div class="logo">
                                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10">
                                        <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                            <!-- Main-menu -->
                                            <div class="main-menu d-none d-lg-block">
                                                <nav> 
                                                    <ul id="navigation">                                                                                          
                                                        <li><a href="index.php">Inicio</a></li>
                                                        <li><a href="about.html">??Quienes somos?</a></li>
                                                        <li><a href="services.html">Unidades</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <!-- Header-btn -->
                                            <div class="header-right-btn d-none d-lg-block ml-20">
                                                <a href="Login.php" class="btn header-btn">Iniciar sesi??n</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- Mobile Menu -->
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-lg-none"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
            </div>
            <!-- Header End -->
        </header>
        <main>
            <!--? slider Area Start-->
            <div class="slider-area ">
                <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap">
                                    <h2>Af??liese con nostros</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End--> 

            <!--? Formulario de registro -->
            <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Contact wrapper -->
                        <div class="col-xl-8 col-lg-9">
                            <div class="contact-form-wrapper">
                                <!-- From tittle -->
                                <div class="row">
                                <div class="col-lg-12">
                                        <!-- Section Tittle -->
                                        <div class="section-tittle mb-50">
                                            <span>Registro</span>
                                            <h2>Crear una nueva cuenta</h2>
                                            <p>Para la compra de tiquetes es necesario que est?? registrado en nuestra aplicaci??n</p>
                                        </div>
                                </div>
                                </div>
                                <!-- form -->
                                <form action="php/guardarp.php" name="miformulario" class="contact-form" method="POST" onsubmit="return validacion()">
                                    <p>Datos requeridos: </p>
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <input type="text" placeholder="N??mero de pasaporte" name = "Id" id="Id" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" placeholder="Nombre" name = "Nombre" id="Nombre" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" placeholder="Primer apellido" name = "Apellido1" id="Apellido1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" placeholder=" Segundo apellido" name = "Apellido2" id="Apellido2">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="email" placeholder="Correo electr??nico" name = "Email" id="Email">
                                            </div>
                                        </div>                                    
                                        <div class="col-lg-6">
                                            <div class="select-items">
                                                <select name="select" id="select1">                                                
                                                    <option value="">Nacionalidad</option>
                                                    <option value="Costarricense">Costa Rica</option>
                                                    <option value="Nicaraguense">Nicaragua</option>
                                                    <option value="Paname??o">Panam??</option>
                                                    <option value="Hondure??o">Honduras</option>
                                                    <option value="Salvadore??o">El Salvador</option>
                                                    <option value="Guatemalteco">Guatemala</option>
                                                    <option value="Belice??o">Belice</option>
                                                </select>
                                            </div>
                                        </div>                                     
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="number" placeholder="Numero de c??dula" name = "Cedula" id="Cedula" maxlength="9"
                                                minlength="9">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <input type="number" placeholder="N??mero de tarjeta" name = "Tarjeta" id="Tarjeta">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="input-form">
                                                <input type="text" placeholder="Fecha de Vencimiento" name = "Fechav" id="Fechav">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="input-form">
                                                <input type="number" placeholder="CCV" name = "CCV" id="CCV" maxlength="3">
                                            </div>
                                        </div> 
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <input type="text" placeholder="Clave" name = "Clave" id="Clave">
                                            </div>
                                        </div>                                   
                                        <!-- Button -->
                                        <div class="col-lg-12">
                                            <input name="gua" class="submit-btn" type="submit" value='Registrarse' >
                                        </div>
                                    </div>
                                </form>	
                                <?php
                                                    if (isset($_POST['gua'])) {
                                                        
                                                        require_once "php/connect.php";

                                                        require_once "php/guardarp.php";
                                                        
                                                    }									
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form end -->       
        </main>
        <footer>
            <!--? Footer Start-->
            <div class="footer-area footer-bg">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <!-- footer Heading -->
                        <div class="footer-heading">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-8 col-md-8">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <h2>??Entendemos a la perfecci??n la importancia de ofrecerle un servicio de calidad!</h2>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <span class="contact-number f-right">(+506) 2210 4010</span>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Menu -->
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Buses SanMarino</h4>
                                        <ul>
                                            <li><a href="about.html">Quienes somos?</a></li>
                                            <li><a href="routs.php">Rutas</a></li>
                                            <li><a href="privacy.html"> Pol??tica de privacidad</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Nuestro horario de oficina</h4>
                                        <ul>
                                            <li><a href="#">Lunes - Viernes: 8am-5p.m </a></li>
                                            <li><a href="#"> Saturday 10am-6pm</a></li>
                                            <li><a href="#"> Sunday 12am-6pm</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                            
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Empresa con funciones a nivel centroamericano. Trabajamos para brindar la mejor experiencia de viaje.</p>
                                        </div>
                                    </div>
                                    <!-- Footer Social -->
                                    <div class="footer-social ">
                                        <a href="https://www.facebook.com/sai4ull" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!-- Scroll Up -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->
        
            <!-- All JS Custom Plugins Link Here here -->
            <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="./assets/js/popper.min.js"></script>
            <script src="./assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="./assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="./assets/js/owl.carousel.min.js"></script>
            <script src="./assets/js/slick.min.js"></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="./assets/js/wow.min.js"></script>
            <script src="./assets/js/animated.headline.js"></script>
            
            <!-- Nice-select, sticky -->
            <script src="./assets/js/jquery.nice-select.min.js"></script>
            <script src="./assets/js/jquery.sticky.js"></script>
            <script src="./assets/js/jquery.magnific-popup.js"></script>

            <!-- contact js -->
            <script src="./assets/js/contact.js"></script>
            <script src="./assets/js/jquery.form.js"></script>
            <script src="./assets/js/jquery.validate.min.js"></script>
            <script src="./assets/js/mail-script.js"></script>
            <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
            
            <!-- Jquery Plugins, main Jquery -->	
            <script src="./assets/js/plugins.js"></script>
            <script src="./assets/js/main.js"></script>
            <script src="./assets/js/validaciones.js"></script>

        </body>
    
</html>