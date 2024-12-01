<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Healthy & tasty</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url("") ?>assets/css/cssLanding/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url("") ?>assets/icons/font-awesome/font-awesome.css">

  <link href="<?php echo base_url("") ?>assets/css/cssLanding/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+505 8574-1341</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lunes-Sabado: 11:00 AM - 23:00 PM</span></i>
      <i class="bi bi-user ms-4 d-none d-lg-flex align-items-center">
        <?php
        $nombre = $this->session->userdata('Nombre');
        $apellido = $this->session->userdata('Apellido');
        if ($this->session->userdata('logged') == 1) {
          echo "Hola! " . $nombre . " " . $apellido . " en que podemos ayudarte";
        }
        ?>
      </i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="#hero">Healthy & tasty</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#book-a-table">Para reservar</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Fotos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
      $logged = $this->session->userdata('logged');
      if ($logged == 1) {
        echo '<a href="' . base_url("index.php/logout") . '" class="book-a-table-btn scrollto">Cerrar sesion</a>';
      } else {
        echo '<a href="' . base_url("index.php/signIn") . '" class="book-a-table-btn scrollto">Iniciar sesion</a>';
      }
      ?>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?php echo base_url("") ?>assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Restaurante <span>Healthy & tasty</span> </h2>
                <p class="animate__animated animate__fadeInUp">
                  "Bienvenido a Healthy & tasty, donde cada plato cuenta una historia de pasión culinaria y excelencia gastronómica."
                </p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menú</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Para reservar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?php echo base_url("") ?>assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Restaurante <span>Healthy & tasty</span> </h2>
                <p class="animate__animated animate__fadeInUp">
                  "Sumérgete en una experiencia gastronómica única en Healthy & tasty, donde la frescura de los ingredientes se combina con la creatividad de nuestros chefs."
                </p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menú</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Para reservar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?php echo base_url("") ?>assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Restaurante <span>Healthy & tasty</span> </h2>
                <p class="animate__animated animate__fadeInUp">
                  "En Healthy & tasty, te invitamos a descubrir un mundo de sabores sofisticados y un ambiente acogedor que te hará sentir como en casa."
                </p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menú</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Para reservar</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?php echo base_url() ?>assets/img/about.jpg");'>
            <a href=""></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3> Bienvenido a Healthy & tasty</h3>

              <p class="fst-italic">
                Donde cada plato es una obra maestra culinaria cuidadosamente diseñada para deleitar tus sentidos. Situado en el corazón de la ciudad, Healthy & tasty es mucho más que un simple restaurante; es un destino gastronómico que eleva la experiencia de comer a nuevas alturas.

                En Healthy & tasty, fusionamos la pasión por la cocina con ingredientes frescos y de primera calidad para crear un menú gourmet que cautiva tanto a los paladares más exigentes como a los amantes de la buena comida. Desde exquisitas entradas hasta platos principales innovadores y postres irresistibles, cada bocado en Healthy & tasty es una aventura culinaria única.

              </p>
              <ul>
                <li><i class="bx bx-check-double"></i>
                  Nos apasiona la innovación culinaria. Nuestro equipo de chefs expertos está constantemente explorando nuevas técnicas y combinaciones de sabores para crear platos únicos y emocionantes que deleiten a nuestros comensales.
                </li>
                <li><i class="bx bx-check-double"></i>
                  Nos esforzamos por ofrecer un ambiente elegante y acogedor donde nuestros clientes se sientan como en casa. Con una decoración cuidadosamente seleccionada y una atmósfera cálida, cada visita a Healthy & tasty es una experiencia memorable.
                </li>
                <li><i class="bx bx-check-double"></i>
                  Nuestro objetivo es superar las expectativas de nuestros clientes en cada interacción. Desde el momento en que entras por nuestras puertas, nuestro equipo está dedicado a brindarte un servicio excepcional y una experiencia gastronómica inolvidable.
                </li>
              </ul>
              <p>
                Ven y descubre por qué Healthy & tasty es más que un restaurante; es un destino gastronómico donde la pasión por la buena comida se combina con la excelencia en el servicio. Te invitamos a disfrutar de una experiencia culinaria inigualable que seguramente dejará una impresión duradera en tu paladar.
                ¡Esperamos darte la bienvenida pronto a Healthy & tasty!
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">

          <h2>Por que eligir <span>nuestro restaurante</span></h2>
          <p>
            En nuestro establecimiento, fusionamos una experiencia culinaria única con un ambiente acogedor y un servicio excepcional para brindarte momentos inolvidables en cada visita.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Experiencia culinaria única</h4>
              <p>Nos esforzamos por ofrecer una experiencia culinaria única y memorable. Desde platos innovadores hasta combinaciones de sabores sorprendentes, cada visita a nuestro restaurante es una aventura gastronómica que te dejará deseando volver por más.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Ambiente acogedor y elegante</h4>
              <p> Ofrecemos un ambiente acogedor y elegante que te invita a relajarte y disfrutar de una comida excepcional. Ya sea que estés celebrando una ocasión especial o simplemente disfrutando de una cena entre semana, nuestro ambiente te hará sentir bienvenido y cómodo.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Servicio excepcional</h4>
              <p> Nos aseguramos que el servicio al cliente es nuestra máxima prioridad. Nuestro equipo está dedicado a brindarte un servicio excepcional desde el momento en que entras por nuestras puertas hasta el momento en que te despedimos. Tu satisfacción es nuestro objetivo, y haremos todo lo posible para asegurarnos de que tu experiencia en nuestro restaurante sea inolvidable.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->

    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Echa un vistazo a nuestro delicioso <span>Menu</span></h2>
        </div>
        <!--
        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Bread barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
          <div id="why-us" class="container">

            <div class="section-title">
              <h2>Reserva una <span>mesa</span></h2>
              <p>
                ¡Haz tu reserva ahora y asegura tu lugar para disfrutar de una velada inolvidable en nuestro restaurante!
              </p>
            </div>
            <div class="row">
              <?php
              $mesa1 = base_url("assets/img/landingMesa/Mesa1.png");
              $mesa2 = base_url("assets/img/landingMesa/Mesa2.png");
              $mesa4 = base_url("assets/img/landingMesa/Mesa4.png");
              $mesa6 = base_url("assets/img/landingMesa/Mesa6.png");
              $url = "";

              foreach ($mesas as $item) {
                $mesa = "";
                if ($this->session->userdata("logged") == 1) {
                  $url = base_url("index.php/reservar/" . $item["Id_Mesa"]);
                } else {
                  $url =  base_url("index.php/signIn");
                }
                if ($item["Capacidad"] == 1) {
                  $mesa = $mesa1;
                } else if ($item["Capacidad"] == 2) {
                  $mesa = $mesa2;
                } else if ($item["Capacidad"] == 4) {
                  $mesa = $mesa4;
                } else if ($item["Capacidad"] == 6) {
                  $mesa = $mesa6;
                } else {
                  $mesa = "";
                }
                echo ' <div class="col-xxxl-3 col-xl-4 col-lg-6 col-12"  ">
                <div class="box food-box" >
                  <div class="box-body text-center" >
                    <div class="menu-item">
                    <img src="' . $mesa . '" alt="">
                    </div>
                    <div class="menu-details text-center">
                      <h4 class="mt-20 mb-10">' . $item["Descripcion"] . '</h4>
                      <p>Capacidad de personas ' . $item["Capacidad"] . '</p>
                    </div>
                    <div class="act-btn "  >
                      <div class="text-center">

                      <a href="' . $url . '" class="btn btn-primary" >
                      <img width ="50px" src="' . base_url("assets/img/landingMesa/reservaIcono.gif") . '" alt="">
                      Reservar
                    </a>

                        <small class="d-block">Reservar</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
              }
              ?>



            </div>

          </div>

          <!--
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section> End Book A Table Section -->

          <!-- ======= Gallery Section ======= -->
          <section id="gallery" class="gallery">
            <div class="container-fluid">

              <div class="section-title">

                <h2>Algunas fotos de <span>Nuestro Restaurante</span></h2>
                <p>
                  ¡Descubre la belleza de nuestro restaurante a través de algunas fotos que capturan nuestra exquisita cocina y nuestro encantador ambiente! Visita nuestra galería para tener un adelanto de lo que te espera.
                </p>
              </div>

              <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                    <a href="<?php echo base_url("") ?>assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                      <img src="<?php echo base_url("") ?>assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Gallery Section -->



          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container">

              <div class="section-title">
                <h2><span>Contáctanos</span></h2>
                <p>¿Listo para reservar tu mesa o tienes alguna pregunta? ¡Contáctanos hoy mismo y nuestro equipo estará encantado de ayudarte</p>
              </div>
            </div>



            <div class="container mt-5">

              <div class="info-wrap">
                <div class="row">

                  <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-clock"></i>
                    <h4>Horario de atención:</h4>
                    <p>Lunes-Sabado:<br>11:00 AM - 2300 PM</p>
                  </div>

                  <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>Healthy & tastyrestuarante@gmail.com</p>
                  </div>

                  <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>LLamamos:</h4>
                    <p>+505 8574 1341<br>+505 8698 2086</p>
                  </div>
                </div>
              </div>

              <form action="https://formsubmit.co/Healthy & tastyrestuarante@gmail.com" method="POST" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>

            </div>
          </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3></h3>
      <p>"Esperamos verte pronto en nuestro restaurante Healthy & tasty para seguir compartiendo momentos inolvidables juntos."</p>
      <div class="social-links">
        <a href="https://twitter.com/Healthy & tasty695649" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=61558467487888&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/restaurants_Healthy & tasty/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url("") ?>assets/css/cssLanding/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url("") ?>assets/css/cssLanding/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url("") ?>assets/css/cssLanding/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url("") ?>assets/css/cssLanding/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url("") ?>assets/css/cssLanding/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url("") ?>assets/js/jsLanding/js/main.js"></script>

</body>

</html>