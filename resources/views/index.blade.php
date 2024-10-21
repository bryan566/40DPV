<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>40 DPV</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material+Icons+Outlined:done:&icon.size=24&icon.color=%23e8eaed&icon.platform=web">

</head>

<body class="index-page">

 @include('includes.header')


 <main class="main">

  <!-- Home Section -->
  <section id="hero" class="hero section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>ÚNETE Y SALVA LAS VIDAS DE MILLONES DE MADRES Y BEBÉS</h1>
          <p>Rezamos por el Fin del Aborto</p>
          <div class="d-flex">

            <a href="https://youtu.be/jvaDw3FpymE" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Ver Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img">
          <!--<img src="assets/img/hero-img.png" class="img-fluid" alt="">-->
        </div>
      </div>
    </div>

  </section><!-- /Home Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/nosotros.jpeg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>QUIENES SOMOS</h3>
            <h2>40 DIAS POR LA VIDA</h2>
            <p>
              40 Días por la Vida es un movimiento PRO VIDA que mantiene su sede en la ciudad de Loja, tiene la visión de acceder al poder de Dios, mediante la oración, el ayuno, la vigilia pacífica y la integración comunitaria para acabar con el fin del aborto.
            </p>
            <div class="text-center text-lg-start">
              <!--<a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>-->
            </div>
          </div>
        </div>

      </div>
    </div>

  </section><!-- /About Section -->

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container">

      <ul class="nav nav-tabs row  g-2 d-flex" data-aos="fade-up" data-aos-delay="100">

        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <h4>ORACIÓN Y AYUNO</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <h4>VIGILIA</h4>
          </a><!-- End tab nav item -->

        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <h4>ALCANCE</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
            <h4>¿POR QUE 40 DPV?</h4>
          </a>
        </li>
        <!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Oración y Ayuno</h3>
              <p class="fst-italic">
                La oración nos mantiene fieles a nuestro deseo de cumplir la voluntad de Dios.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>El núcleo espiritual de la campaña es el compromiso con la oración y el ayuno.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>El ayuno es un sacrificio que, con la gracia de Dios, nos permite superar nuestras límitaciones. </span></li>
                <li><i class="bi bi-check2-all"></i> <span>Las personas de fe están invitadas también a ayunar durante la campaña de 40 Días por la Vida. Creemos que cuando el pueblo de Dios ayuna con un espíritu quebrantado, arrepentido y contrito, nuestro Padre celestial escucha desde el cielo y sana nuestras vidas, comunidades y países.</span></li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/ayuno.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane fade" id="features-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Vigilia Pacífica</h3>
              <p class="fst-italic">
                Estas vigilias son actos pacíficos de presencia pública, con el fin de concienciar y ofrecer apoyo a quienes lo necesiten.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Es una oración continua frente a centros de aborto durante 40 días, donde los participantes rezan por el fin del aborto y ofrecen apoyo a las madres, todo en un ambiente de respeto y compasión.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Los participantes se reúnen para rezar y ofrecer ayuda a las mujeres que entran y salen de las clínicas, mostrando un testimonio visible de apoyo a la vida. </span></li>
                <li><i class="bi bi-check2-all"></i> <span> También sirve como un llamado al arrepentimiento para aquellos que trabajan en el centro de aborto y aquellos que lo patrocinan. </span></li>
           
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/about.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane fade" id="features-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Alcance Comunitario</h3>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Llevando un mensaje pro vida optimista a cada rincón de nuestra ciudad, mediante esfuerzos de los medios, la iglesia, escuelas y la visibilidad pública. </span></li>
                <li><i class="bi bi-check2-all"></i> <span>Es una campaña de sensibilización en todos los niveles y ámbitos de su comunidad. La gente muestra su apoyo a 40 Días por la Vida de forma visible con pulseras, ropa, carteles o pegatinas en sus vehículos.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Se distribuyen folletos informativos, se organiza la participación en eventos y se dialoga con el público para educar y generar un cambio cultural a favor de la vida. </span></li>
              </ul>
            
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/alcance.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane fade" id="features-tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>¿Por qué 40 días por la Vida?</h3>
              <p class="fst-italic">
                Los 40 días representan un tiempo de oración intensa, ayuno y acción pacífica para cambiar corazones y mentes sobre el aborto, inspirado en la idea de que 40 días pueden generar un cambio profundo y significativo, tanto personal como comunitario.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Es un movimiento de carácter global cuyo propósito principal es terminar con el aborto a través de una combinación de oración, ayuno, vigilia pacífica y alcance comunitario. </span></li>
                <li><i class="bi bi-check2-all"></i> <span>Su nombre y duración (40 días) no son arbitrarios, sino que están inspirados en el simbolismo bíblico del número 40, vinculado a tiempos de prueba, renovación y transformación espiritual.</span></li>
                
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/aborto.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- End tab content item -->

      </div>

    </div>

  </section><!-- /Features Section -->


 <!-- Section Participa -->
  <section id="participa" class="featured-services section">

 <!-- Section Title -->
 <div class="container section-title" data-aos="fade-up">
  <h2>Cómo Participar?</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <img src="assets/img/vela.png" class="img-fluid" alt="100">
            </div>

            <h4><a href="" class="stretched-link">Únete a una Vigilia</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <!--<div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>-->
           <img src="assets/img/gente.png" class="img-fluid" alt="100">
          
            <h4><a href="" class="stretched-link">Cómo Voluntario</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <img src="assets/img/donacion.png" class="img-fluid" alt="100">
            <h4><a href="" class="stretched-link">Mediante Donaciones</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section>


    <!-- Galery Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galería</h2>
        <p>Te presentamos las imágenes sobre el trabajo que se realiza durante la campaña de 40 Días por la Vida.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todo</li>
            <li data-filter=".filter-app">Vigilias</li>
            <li data-filter=".filter-product">Objetos Sagrados</li>
            <li data-filter=".filter-branding">Carteles y Mensajes</li>
            <li data-filter=".filter-books">Eventos Clave</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/vigilias/vigilia1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vigilia 1</h4>
                
                  <a href="assets/img/vigilias/vigilia1.png" title="Vigilia 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/sagrados/virgencita.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Imagen Sagrada</h4>
                
                  <a href="assets/img/sagrados/virgencita.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/carteles/libro_provida.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Libro 1</h4>
                 
                  <a href="assets/img/carteles/libro_provida.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Marchas y Caminatas</h4>
                  
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/vigilias/vigilia2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vigilia 2</h4>
                  
                  <a href="assets/img/vigilias/vigilia2.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/sagrados/rosario.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rosario</h4>
                  
                  <a href="assets/img/sagrados/rosario.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/carteles/salvemos.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cartel 2</h4>
                  
                  <a href="assets/img/carteles/salvemos.png" title="Cartel 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/inicio_campaña/apertura.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Apertura y Finalización de la Campaña</h4>
                  <a href="assets/img/inicio_campaña/apertura.png" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/vigilias/vigilia3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vigilia 3</h4>
                  <a href="assets/img/vigilias/vigilia3.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/sagrados/biblia.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Bíblia</h4>
                  <a href="assets/img/sagrados/biblia.png" title="Biblia" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/carteles/cartel_provida.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cartel 3</h4>
                  <a href="assets/img/carteles/cartel_provida.png" title="Cartel 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Finalización de Campaña</h4>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
 
   <!-- Equipo Section -->
   <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Equipo de 40 DPV</h2>
      <p>Esta sección contiene los miembros del equipo de la campaña que conforma 40 Días por la Vida</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/ale1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Maria Alejandra Villavicencio</h4>
              <span>Coordinadora</span>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/andrey2.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Andrey</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/brenda.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Brenda Godoy Paucar</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/ivanova1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Ivanova Eras</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/bryan1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Bryan Maldonado</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/equipo/richard1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Richard Chimbo</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

</main>


 @include('includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>