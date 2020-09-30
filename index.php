<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/d92a2a2802.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    
    <link rel="stylesheet" href="./public/css/styleHome2.css">
    
    <title>RYZEN | Home</title>
</head>

<body>
    <!-- Header -->
    <?php
        include('partials/headerNavBar.php');
        include('partials/mobileNavBar.php');
    ?>
    <!-- /Header -->

    <!--home-->

    
    <!--banner-->
    <section class="firstContainer  container tamano-container">
        <div class="row">
            <div class="firstContainerRow col-12">
                <div class="firstContainerInfo col-lg-6">
                    <p class="banner-title"><i class="fas fa-vr-cardboard bannerIcon"></i>SAMSUNG GEAR VR</p>
                    <p class="col-12 col-lg-12 banner-txt">Tus juegos favoritos hechos <span style='font-weight: bold; color: white;'>REALIDAD</span></p>
                    <div class="banner-mi-container col-12 col-lg-12">
                        <span class="banner-mi col-6"><a href="/productos/3">Conocelo a fondo ></a></span>
                        <span class="banner-mi col-6"><a href="/productos/visores">Más productos ></a></span>
                    </div>
                </div>
                <div class="firstContainerImg">
                <img class="banner-img col-12 " /*src="./img/gearvrblack3.webp"*/ alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Producto Nuevo -->
    <section class="secondContainer container">
        <div class="row">
            <img class="col-12 col-md-8 col-lg-6" src="https://i.pinimg.com/originals/ff/bc/ae/ffbcae664c8200fb9d334b8973d6cc54.png" alt="">
            <div class="secondContainerInfo col-12 col-lg-6">
                <p class="producto-home-nom col-12">Oculus Rift S</p>
                <div class="secondDescription">
                    <div class="secondDescriptionContainers">
                    <h4 class="secondDescriptionTitles col-12">Sumergite de lleno</h4>
                    <p class="col-10">Colócate en el centro de la experiencia de juego para ordenador más emocionante de la realidad virtual.</p>
                    <img src="./img/visorIcon.png" class="secondContainerIcons col-2" alt=""><br>
                    </div>
                    <div class="secondDescriptionContainers"> 
                    <h4 class="secondDescriptionTitles col-12">Óptica mejorada</h4>
                    <p class="col-10">Observa cómo se desarrolla la acción a tu alrededor a través de lentes de gran precisión y una óptica de nueva generación.</p>
                    <img src="./img/eyeIcon.png" class="secondContainerIcons col-2" alt=""><br>
                    </div>
                    <div class="secondDescriptionContainers">
                    <h4 class="secondDescriptionTitles col-12">Diseño ergonómico</h4>
                    <p class="col-10">Piérdete en esta experiencia con un diseño mejorado y cómodo, que te permite empezar a jugar más rápido y permanecer más tiempo jugando.</p>
                    <img src="./img/joystickIcon.png" class="secondContainerIcons col-2" alt="">
                    </div>
                </div><br>
                <div class="btn-mf">
                    <a href="/productos/2"><button type="button" class="btn btn-mi">Más Información</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Compatibilidad -->
    <section class="container tamano-container compatibilidad">
        <div class="compatibleContainer">
            <div>
                <h2 class="subH2">Compatibles con</h2>
            </div>
            <div class="content-1">
                <div class="card">
                    <div class="imgBx" data-text="PC">
                        <img src="./public/img/AMD.webp">
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx" data-text="PC">
                        <img src="./public/img/xboxfront1.jpg">
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx" data-text="PC">
                        <img src="./public/img/NEWPS4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Carrusel-->
    <section class="container carouselContainer tamano-container">
        <h2 class="subH2">Productos Populares</h2>
        <div class="carouselIndex">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner tamano-container">
                    <div class="carousel-item active">
                        <img src="./public/img/T11.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>Joystick Oculus Quest</h2>
                            <p>$20.000</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/nuevoS.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>Oculus Rift S</h2>
                            <p>$70.000</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/astrobot11.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>Astro Bot</h2>
                            <p>$3.200</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!--footer-->

    <?php
        include('partials/footer.php');
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
    <script src="/js/home.js"></script>
    <script src="/js/search.js"></script>


    <script text="text/javascript">

        TweenMax.from('.container.col-xl-11.cabecera', 2, {
            delay: 0.5,
            opacity: 0,
            scale: 0,
            ease: Power3.easeInOut
        });

        TweenMax.from('.banner-title', 2, {
            delay: 0.8,
            opacity: 0,
            x: -50,
            ease: Expo.easeInOut
        })

        TweenMax.from('.sub-headline', 2, {
            delay: 0.8,
            // opacity: 0,
            // x: 20,
            //width: 0,
            scale: 0,
            ease: Power3.easeInOut
        });

        TweenMax.from('.btn.cta-btn', 2, {
            delay: 0.5,
            opacity: 0,
            scale: 0,
            ease: Power3.easeInOut
        })

        TweenMax.from('.col-12.col-lg-12.banner-txt', 2, {
            delay: 0.8,
            opacity: 0,
            y: -20,
            ease: Expo.easeInOut
        });

        TweenMax.from('.banner-mi.col-6', 2, {
            delay: 0.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
        });

        TweenMax.from('.last-title', 2, {
            delay: 0.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
        })

    </script>

</body>
</html>