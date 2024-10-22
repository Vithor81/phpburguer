<?php
session_start();

include "conn.php";
?>


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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<?php 
$pr = isset($_GET["pr"]) ?? null;
?>

<body class="sub_page" onload="selecionar('<?php if($pr) {echo 4;}else{echo 0;} ?>')">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section fixed-top" id="mainNav">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              PHP BURGUER
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span> </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="book.php">Reservar uma mesa</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <button type="button"  class="btn cart_link" class="btnAdd" onclick="addCarinho(this);"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"key="${resp[i][0]}">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </button>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container" style="background-color: #222831; border-radius: 8px;">
      <div class="heading_container heading_center">
        <h2 class="mt-4">
          Cardapio
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*" onclick="selecionar('0')">All</li>
        <li data-filter=".burger" onclick="selecionar('1')">Burger</li>
        <li data-filter=".bebidas" onclick="selecionar('2')">Bebidas</li>
        <li data-filter=".combos" onclick="selecionar('3')">Combo</li>
        <li data-filter=".promocao" onclick="selecionar('4')">Promoção</li>


      </ul>

      <!-- <a href="#" class="btnadd">teste</a> -->
      <div class="filters-content d-flex flex-wrap" id="lanches">
  <!-- IMAGENS DOS LANCHES -->
        <!-- <div class="row grid">
           <div class="col-sm-6 col-lg-4 all burguer">
            <div class="box">
              <div>
                <div class="img-box">
                 <img src="./images/f5.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Fritas
                  </h5>
                  <p>
                  Deliciosa porção de batatas fritas crocantes por fora e macias por dentro, temperadas com uma pitada de sal para realçar o sabor.
                  </p>
                  <div class="options">
                    <h6>
                      $20
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
 
        </div> -->
        <!-- <div class="btn-box">
          <a href="">
            View More
          </a>
        </div>
      </div>  -->
      </div>
  </section>

  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Carrinho</h5>
  
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="display: flex;">
      <div id="container_carrinho">
      </div>
      <div id="vTotal"></div>
    </div>
    <button type="button" class="btn btn-success" onclick="finalizar()" name="btnfinalizar">Finalizar Compra</button>

  </div>

  <script src="./js/jquery-3.4.1.min.js"></script>
  <script>
    selecionar(0)

    function selecionar(valor) {
      let vl = valor
      $.ajax({
        url: 'select.php',
        method: 'get',
        data: {
          valor: vl
        },
        dataType: 'json'
      }).done(function(resp) {
        //console.log(resp)
        let btnAdd = document.getElementsByClassName('a');
        for (let i = 0; i < btnAdd.length; i++) {
          btnAdd[i].addEventListener('click', () => {
            //  alert('teste')
          })
        }


        $('#lanches').empty();
        for (let i = 0; i < resp.length; i++) {
          $('#lanches').append(`
                   
                    <div class="col-sm-6 col-lg-4 all burguer">
                    <div class="box">
              <div>
              <style>
                .options a{
                  cursor: pointer;
                }
                </style>
                <div class="img-box">
                 <img src="${resp[i][5]}" alt="">
                </div>
                <div class="detail-box">
                  <h5 class="nomeCard" name="nomeProd">
                    ${resp[i][1]}   
                  </h5>
                  <p>
                   ${resp[i][3]}  
                  </p>
                  <div class="options">
                    <h6 class="valorCard">
                      ${resp[i][2]}
                    </h6>
                 
                    <button type="button"  class="btn btn-warning" class="btnAdd" onclick="addCarinho(this);"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"key="${resp[i][0]}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                    </button>
                    
                  </div>
                </div>
              </div>
            </div>
                    `)

        }

      })
    }

    function inserirItens(nome, val, quant) {
      let n = nome;
      let v = val;
      let q = quant;
      
      $.ajax({
        url: 'inseriritens.php',
        method: 'get',
        data: {
          nome: n,
          valor: v,
          quant: q
        },
        dataType: 'text'
      }).done(function(res) {
        console.log(res)
      })
    }

    function finalizar() {
      let nome = document.getElementsByClassName('nome')
      let prodValor = document.getElementsByClassName('prodValor')
      let quant = document.getElementsByClassName('qntProd')
      
      for (let i = 0; i < nome.length; i++) {
        inserirItens(nome[i].innerHTML,prodValor[i].innerHTML,quant[i].value)
      }
      zerar()
    }


  </script>

  <!-- end food section -->

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
  <script src="./js/nave.js"></script>
  <!-- footer section -->
  <script src="js/carrinho.js"></script>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script> -->
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
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