<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> PHPBurguer </title>

  <!-- bootstrap core css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/burguer.css">
  <link rel="stylesheet" href="css/search.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section fixed-top" style="background-color: #222831;">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              PHP BURGUER
            </span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="book.php">Reservar uma mesa <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              
              <form class="form-inline">

                <a class="SearchA" data-bs-toggle="modal" data-bs-target="#ModalLargo">
                  <style>
                    .SearchA {
                      color: #fff;
                      cursor: pointer;
                    }

                    .SearchA:hover {
                      color: #ffbe33;

                    }
                  </style>
                  <i class="fa fa-search" aria-hidden="true"></i>
                </a>
              </form>


            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <div class="modal fade" id="ModalLargo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content bg-dark ">
        <div class="modal-body">
          <form>
            <div class="ModalBODY">
              <style>
                .ModalBODY hr {
                  color: #ffbe33;
                }

                .ModalBODY h1 {
                  color: #ffbe33;
                  font-size: 30px;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
              </style>
              <h1>Pesquisa</h1>
              <hr>
              <input class="inputSearch" placeholder="Search">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- MODALLL FULLLLLLLL SCREEEEEEEEEEEEEEEEEEEEEN -->

    <div class="modal fade" id="ModalFull" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <div class="CarrinhoIMG">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                  <path d="M3225 4919 c-324 -109 -601 -205 -613 -211 -54 -28 -54 -24 -49 -621
    4 -518 5 -557 25 -638 48 -202 133 -387 249 -550 79 -110 264 -304 378 -396
    177 -143 562 -373 625 -373 32 0 269 125 399 210 172 112 287 208 427 352 226
    235 361 476 427 763 19 84 21 129 24 637 5 592 5 588 -49 616 -42 22 -1209
    412 -1231 411 -12 0 -287 -90 -612 -200z m1134 -193 c284 -96 524 -178 534
    -181 16 -7 17 -36 17 -419 0 -447 -7 -552 -45 -695 -103 -387 -448 -763 -951
    -1036 l-71 -39 -64 33 c-211 109 -427 267 -589 431 -217 219 -341 435 -397
    694 -12 57 -16 168 -20 549 -3 262 -3 477 -1 477 1 0 242 81 533 180 292 98
    532 179 534 179 2 1 236 -77 520 -173z" />
                  <path d="M4435 4149 c-11 -6 -171 -162 -356 -346 l-337 -335 -179 223 c-99
    123 -186 229 -194 235 -45 36 -126 18 -153 -35 -22 -42 -20 -72 8 -114 50 -73
    425 -535 452 -556 23 -18 37 -22 68 -18 36 5 71 37 433 399 264 264 397 403
    404 425 26 81 -71 162 -146 122z" />
                  <path d="M63 4256 c-33 -15 -63 -60 -63 -96 0 -37 30 -81 65 -96 27 -11 98
    -14 334 -14 276 0 305 -2 354 -20 68 -26 126 -75 159 -136 16 -30 161 -521
    373 -1259 213 -744 358 -1235 377 -1275 39 -82 150 -194 229 -233 119 -59 72
    -57 1217 -57 l1053 0 76 25 c130 44 243 137 305 251 14 27 74 181 133 342 98
    272 105 296 95 328 -30 91 -150 101 -194 16 -7 -15 -55 -142 -106 -282 -51
    -140 -101 -272 -112 -293 -30 -60 -85 -114 -146 -144 l-57 -28 -1050 0 -1050
    0 -47 22 c-64 29 -130 92 -156 150 -20 42 -502 1709 -502 1733 0 6 134 10 351
    10 309 0 354 2 379 17 58 34 68 116 21 164 l-29 29 -391 0 c-245 0 -392 4
    -396 10 -3 5 -37 119 -76 252 -38 134 -83 270 -99 303 -59 120 -167 214 -304
    264 -70 25 -76 26 -391 28 -260 3 -326 0 -352 -11z" />
                  <path d="M2210 830 c-165 -61 -273 -200 -287 -371 -11 -124 38 -250 132 -338
    213 -201 547 -140 676 124 32 67 34 75 34 180 0 103 -2 114 -32 177 -44 93
    -109 160 -201 205 -68 34 -83 38 -171 40 -77 3 -107 -1 -151 -17z m204 -202
    c81 -25 146 -118 146 -210 0 -51 -46 -135 -91 -165 -92 -61 -192 -51 -269 27
    -106 105 -81 268 51 334 58 29 101 32 163 14z" />
                  <path d="M3710 832 c-73 -24 -125 -59 -183 -121 -155 -166 -149 -420 14 -584
    246 -246 659 -111 719 234 24 136 -26 275 -134 377 -84 78 -148 104 -271 109
    -68 2 -104 -1 -145 -15z m215 -211 c158 -71 167 -296 15 -380 -93 -52 -211
    -23 -274 67 -40 57 -48 149 -18 208 55 107 174 152 277 105z" />
                </g>
              </svg>
            </div>
            <h1 class="modal-title fs-1 m-auto mt-0 " id="exampleModalLabel">Carrinho</h1>
            <div class="botaoClose me-4">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body">
            <p>Seu item foi adicionado ao carrinho!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container mt-4">
        <h2>
          Reservar uma mesa
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Nome" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Celular" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    Quantas pessoas?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Agende Agora
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29343.40647479764!2d-45.874817262963106!3d-23.172907735235366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shamburgueria!5e0!3m2!1spt-BR!2sbr!4v1701127575637!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contate-nos
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Localização
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +55 998210021
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  phpbackend@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              <img src="" alt="">
            </a>

            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col mb-1">
          <h4>
            Horario de Funcionamento
          </h4>
          <p>
            Terça a Domingo
            <hr>
          </p>
          <p>
            <tr>
              <td>Ter - 18:00 ás 22:30</td>
              <br>
              <td>Qua - 18:00 ás 22:30</td>
              <br>
              <td>Qui - 18:00 ás 22:30</td>
              <br>
              <td>Sex - 18:00 ás 00:00</td>
              <br>
              <td>Sáb - 18:00 ás 00:30</td>
              <br>
              <td>Dom - 18:00 ás 00:30</td>
            </tr>
          </p>
        </div>
      </div>
      <div class="footer-info">
        <div class="displayYear">Copyright &copy; PHPBurguer 2023</div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="./js/nave.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>