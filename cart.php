<script>
  var user_name = localStorage.user;
  document.cookie = "name = " + user_name;
</script>


<?php

include 'C:\\xampp/htdocs/MeatShop/clases/database.class.php';
include 'C:\\xampp/htdocs/MeatShop/clases/user.class.php';


if (isset($_POST['quantity1'])) {
  $beefribs = $_POST['quantity1'];
  $beefwibo = $_POST['quantity2'];




  $beefwobo = $_POST['quantity3'];
  $muttonribs = $_POST['quantity4'];
  $muttonleg = $_POST['quantity5'];
  $muttonboneless = $_POST['quantity6'];
  $muttonwithbone = $_POST['quantity7'];
  $chickenwithskin = $_POST['quantity8'];
  $chickenskinless = $_POST['quantity9'];
  $chickenbreast = $_POST['quantity10'];
  $chickendrumstick = $_POST['quantity11'];
  $name = $_COOKIE['name'];


  $result = user::order($beefribs, $beefwibo, $beefwobo, $muttonribs, $muttonleg, $muttonboneless, $muttonwithbone, $chickenwithskin, $chickenskinless, $chickenbreast, $chickendrumstick, $name);

  if ($result == true) {
?><script>
      window.alert("order placed");
      window.location.assign("cart.php")
    </script><?php
              return true;
            } else {
              return false;
            }
          }

          // if(isset( $_POST['user-login']) and isset( $_POST['password-login'])){

          //   $user = $_POST['user-login'];
          //   $pass = $_POST['password-login'];

          // $output = user::login($user, $pass);

          // if($output)
          // {
          //   load_template('login-success');
          // }
          // else
          // {
          //   return false;
          // }
          // }

              ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Cart | OrganiHalal</title>
  <link rel="icon" href="./assets/img/icon.ico" /> <!-- FontAwesome -->
  <link href="./assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="./assets/fontawesome/css/solid.css" rel="stylesheet" />
  <link href="./assets/fontawesome/css/regular.css" rel="stylesheet" /> <!-- CSS -->
  <link rel="stylesheet" href="/css/main.min.css" /> <!-- JS -->
  <script src="./js/jquery.min.js"></script>
  <script src="cart.js"></script>

  <style>
    .header.fixed .header__bottom {
      position: fixed;
      width: 100%;
      z-index: 1000;
      background-color: rgba(255, 255, 255, .9);
      box-shadow: rgba(0, 0, 0, .05) 0px 0px 0px 1px;
      top: 0;
    }

    .hero {
      background-image: linear-gradient(rgba(255, 255, 255, 0.2705882353), rgba(255, 255, 255, 0.2705882353)), url(assets/img/hero-bg.jpg);
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }

    .hero .section-container {
      max-width: 400px;
      width: 100%;
      margin-right: auto;
      margin-left: 0px;
      height: 470px;
      padding: 0 25px;
      display: flex;
      justify-content: space-evenly;
      align-items: flex-start;
      flex-direction: column;
    }

    .section-title {
      text-align: center;
      text-transform: capitalize;
      font-family: "Poppins_Bold";
      font-size: 38.5px;
      line-height: 54px;
      color: #fc5b62;
      margin: 10px 0;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .center {
      display: flex;
      justify-content: center;
    }

    img {
      border: 3px solid #fc5b62;
      margin-top: 15px;
      height: auto;
      width: 20rem;
    }

    .head,
    .head h1 {
      background-color: #fc5b62;
      color: white;
      padding-left: 10px;
    }



    input {
      padding-left: 10px;
    }
  </style>
</head>

<body>
  <app-header>
    <header class="header">
      <div class="header__top">
        <div class="header__top-item">
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+977-1-2-3-466373">+977-1-2-3-466373</a>
        </div>
        <div class="header__top-item">
          <i class="fa-regular fa-envelope"></i>
          <a href="mailto:origanihalal@gmail.com">origanihalal@gmail.com</a>
        </div>
      </div>
      <!-- / header top -->

      <div class="header__bottom">
        <div class="large">
          <a class="brand-name noselect" href="./"> OriganiHalal </a>

          <nav class="navbar navbar-large">
            <ul class="navbar-nav navbar_links">
              <li class="nav-item">
                <a class="nav-link" href="./"> Home </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./about.html">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./product.html">Product</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./blog.html">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./contact.html">Contact Us</a>
              </li>
            </ul>
          </nav>
          <!-- / navbar large -->
        </div>

        <nav class="navbar navbar-small">
          <ul class="navbar-nav navbar_links">
            <li class="nav-item">
              <a class="nav-link" href="./"> Home </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./about.html">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./product.html">Product</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./blog.html">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./contact.html">Contact</a>
            </li>
          </ul>
        </nav>
        <!-- / navbar small -->

        <div class="toggle-btn">
          <div class="bar"></div>
        </div>
        <!-- / toggle btn -->
      </div>
    </header>
  </app-header>
  <app-to-top>
    <div class="back-to-top" style="display: none;">
      <i class="fa-solid fa-arrow-up"></i>
    </div>
  </app-to-top>
  <!-- Hero Start -->
  <section class="hero">
    <div class="section-container">
      <div class="text-container">
        <h2 class="section-label">delicious organic meat</h2>
        <h1 class="section-title">enjoy fresh meat with the best quality</h1>
      </div> <a class="btn" href="#"> Read more </a>
    </div> <!-- / section container -->
  </section> <!-- Hero End -->
  <form action="cart.php" method="post">
    <section class="h-100 h-custom" style="background-color: #ffffff">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="content-container">
                      <h1 onclick="cart()" class="section-title">Shopping Cart</h1>
                    </div>
                    <div style="display:none;" id="beefdiv">
                      <div class="head"> <br>
                        <h1>Beef Section</h1> <br>
                      </div>
                      <hr class="my-4">
                      <div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
                        <div id="fribsdiv" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col"> <img class="img1" src="./img/beefribs.jpg" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Beef Fribs</h6>
                            <h6 class="text-black mb-0 center">1 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity1" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="wibodiv" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgs" src="./img/beefwibo.jpg" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="center text-muted">Beef Wibo</h6>
                            <h6 class="center text-black mb-0">1 kg</h6>
                          </div>
                          <div class="center col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity2" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="wobodiv" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img style="height:20rem" class="imgs" src="./img/beefwobo.jpg" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Beef Wobo</h6>
                            <h6 class="text-black mb-0 center">1/2 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity3" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100 </h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    <div id="mtndiv" style="display: none;">
                      <div class="head"> <br>
                        <h1>Mutton Section</h1> <br>
                      </div>
                      <hr class="my-4">
                      <div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
                        <div id="ribsdiv" style="display: none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col"> <img class="img1" src="./img/goatribs.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Mutton ribs</h6>
                            <h6 class="text-black mb-0 center">1 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity4" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="mtnleg" style="display: none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgs" src="./img/goatleg.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="center text-muted">Mutton leg</h6>
                            <h6 class="center text-black mb-0">1 kg</h6>
                          </div>
                          <div class="center col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity5" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="mtnbls" style="display: none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="img1" src="./img/goatboless.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Mutton boneless</h6>
                            <h6 class="text-black mb-0 center">1 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity6" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="mtnb" style="display: none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgmtn" src="./img/goatboless.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Muton with Bone</h6>
                            <h6 class="text-black mb-0 center">1 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity7" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    <div id="ckndiv" style="display:none;">
                      <hr class="my-4" />
                      <div class="head"> <br>
                        <h1>Chicken Section</h1> <br>
                      </div>

                      <div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
                        <div id="cknwiskn" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4">
                          <div class="col"> <img class="img1" src="./img/cwisk.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="center text-muted">Chicken with skin</h6>
                            <h6 class="center text-black mb-0">1 kg</h6>
                          </div>
                          <div class="center col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity8" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>

                        <div id="cknwoskn" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgs" src="./img/cwosk.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Chicken skinless</h6>
                            <h6 class="text-black mb-0 center">1/2 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity9" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100 </h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>

                        <div id="cknbrt" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgs" src="./img/cbrst.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted center">Chicken Breast</h6>
                            <h6 class="text-black mb-0 center">1 kg</h6>
                          </div>
                          <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
                            <div class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity10" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>

                        <div id="ckndrmstk" style="display:none;" class="row mb-4 d-flex justify-content-between align-items-center">
                          <hr class="my-4" />
                          <div class="col"> <img class="imgmtn" src="./img/cdrmst.webp" alt=""> </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="center text-muted">Chicken Drumstick</h6>
                            <h6 class="center text-black mb-0">1 kg</h6>
                          </div>
                          <div class="center col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),change()"> <i class="fas fa-minus"></i> </div> <input id="form1" min="0" name="quantity11" value="0" type="number" step='0.1' class="form-control form-control-sm" />
                            <div class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),change()"> <i class="fas fa-plus"></i> </div>
                          </div>
                          <div class="center col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">&#8377 100</h6>
                          </div> <a href="#!" class="center text-muted" onclick="this.parentNode.querySelector('input[type=number]').value=0,change()"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="col-lg-4 bg-grey">
              <div class="p-5 ">
                <div class="head">
                  <br>

                  <h1 class="center fw-bold mb-5 mt-2 pt-1">Summary</h1> <br>

                </div>
                <hr class="my-4" />
                <hr class="my-4" />
                <div class="d-flex justify-content-between mb-4">
                  <h5 class="center text-uppercase">Items&nbsp;<span id="totalItems">0</span></h5>
                  <h5 class="center">&#8377 <span></span></h5>
                </div>
                <h5 class="center text-uppercase mb-3">Shipping</h5>
                <div class="center mb-4 pb-2 form-control form-control-sm"> <select id="delivery" onchange="change()" class="form-control form-control-sm">
                    <option value="50">Standard Delivery- &#8377 50</option>
                    <option value="100">Speed Delivery- &#8377 100</option>
                    <option value="250">Ultra Speed Delivery- &#8377 250</option>
                    <option value="0">Normal Speed Delivery</option>
                  </select> </div>
                <!-- <h5 class="center text-uppercase mb-3">Give code</h5>                <div class="mb-5">                  <div style="margin-bottom: 10px;" class="center form-outline">                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" />                    <label class="center form-label" for="form3Examplea2">Enter your code</label>                  </div>                </div> -->
                <br>
                <hr class="my-4" />
                <div class="d-flex justify-content-between mb-5">
                  <h5 class="center text-uppercase">Total price</h5>
                  <h5 class="center">&#8377 <span id="total">0</span></h5>
                </div>
                <!-- <div class="col-md-3 input-container col-lg-3 col-xl-2 d-flex center">
             <input id="form1" min="0" name="username" 
                            type="text" class="form-control form-control-sm" /></div> -->
                <div style="margin-bottom: 10px;" class="center">
                  <input type="submit" value="place order" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">
  </form>
  </div>
  </div>
  </div>
  </div>
  <hr class="my-4" />
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <app-footer></app-footer> <!-- JS -->
  <script src="js/components.js"></script>
  <script src=" app.js"></script>
  <script>
    cart();
  </script>

</body>

</html>