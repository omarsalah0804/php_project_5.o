<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};

include 'components/add_cart.php';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HarmonyHomeStyles</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- swiper js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- header -->



  <?php include 'components/user_header.php'; ?>
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" data-swiper-autoplay="2000">
        <div class="head-body container">
          <div class="head-body-content">
            <h1 class="head-title">
              welcome to Harmony HomeStyles
            </h1>
            <p class="text">
              Step into a world of elegance and comfort where your dream living spaces come to life. We are delighted to extend our warmest welcome to you, as you embark on a journey through our exquisite collection of fine furniture.
            </p>
            <a class="btn no-underline" style="text-decoration: none;" href="product.php">shop now</a>
          </div>

          <div class="head-body-img">
            <img src="./img/360_F_68714482_uPxuPF8WjodBNx6TTNcbRmzmmZy2xGHh.webp" alt="header image">
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="head-body container">
          <div class="head-body-content">
            <h1 class="head-title">
              welcome to Harmony HomeStyles
            </h1>
            <p class="text">
            <h3>Comfortable black Sofa</h3>
            <h3><del>$180.00</del></h3>
            <h4>$100.00</h4>
            <h2>Get the offer now !!</h2>
            </p>
            <button type="button" class="btn">
              shop now
            </button>
          </div>

          <div class="head-body-img">
            <img src="./img/black-and-white-rug-1.jpg" alt="header image">
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="head-body container">
          <div class="head-body-content">
            <h1 class="head-title">
              welcome to Harmony HomeStyles
            </h1>
            <p class="text">
            <h3>Table With Four Chairs</h3>
            <h3><del>$220.00</del></h3>
            <h4>$160.00</h4>
            <h2>Get the offer now !!</h2>
            </p>
            <button type="button" class="btn">
              shop now
            </button>
          </div>

          <div class="head-body-img">
            <img src="./img/esstisch-form-s.webp" alt="header image">
          </div>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>


  <!-- end of header -->

  <!-- cato product -->
  <section class="trend">


    <div class="container">
      <div class="title">
        <!-- <h4>categories</h4> -->
        <h3>categories</h3>
      </div>
      <div class="trend-grid">





        <div class="trend-item">
          <img src="./img/best-selling-1.png" alt="best product">
          <div class="trend-item-content">
            <h4> Pillows</h4>
            <h3>$130.00</h3>
            <div class="stars">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <span class="chevron-icon">
              <a href="category.php?category=pillows" class="box"><i class="fas fa-chevron-right"></i></a>
            </span>
          </div>
        </div>

        <div class="trend-item">
          <img src="./img/csm_RLS_2316_35a6290376.jpg" alt="best product">
          <div class="trend-item-content">
            <h4> tables</h4>
            <h3>$130.00</h3>
            <div class="stars">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <span class="chevron-icon">
              <a href="category.php?category=table"><i class="fas fa-chevron-right"></i></a>
            </span>
          </div>
        </div>
        <!-- end of item -->



        <!-- item -->

        <!-- end of item -->


        <!-- trend item -->
        <div class="trend-item">
          <img src="./img/best-selling-3.png" alt="best product">
          <div class="trend-item-content">
            <h4>Chairs</h4>
            <h3>$50.00</h3>
            <div class="stars">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <span class="chevron-icon">
              <a href="category.php?category=chairs"><i class="fas fa-chevron-right"></i></a>
            </span>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- end of trending product

    <div class = "underline"></div>

    <!-- featured product -->
  <section class="featured">
    <div class="container">
      <!-- item -->
      <div class="featured-item">
        <div class="featured-item-img">
          <img src="./img/Home-interior-mock-up-with-red-sofa-table-and-decor-in-green-living-room.jpg" alt="feature image">
        </div>
        <div class="featured-item-content">
          <div class="title">
            <h3>Recomended For You </h3>
            <h3>Red Sofa With Pillows</h3>
            <p class="item-price">$250.00</p>
          </div>
          <p class="text">
            Very high quality <br>made of oak wood <br>
            Made in Sweden
          </p>
          <div class="featured-btns">
            <a class="btn no-underline" style="text-decoration: none;" href="product.php">Show more</a>


            <button type="button" class="btn">Purchase</button>
          </div>
        </div>
      </div>
      <!-- end of item -->
      <!-- item -->
      <div class="featured-item">
        <div class="featured-item-img">
          <img src="./img/d764da66-4208-4874-951e-ad7bcba423b3.f77a7a795340f1e65041f9b152630f2a.webp" alt="feature image">
        </div>
        <div class="featured-item-content">
          <div class="title">
            <h3>Featured Product </h3>
            <h3>Single Comfort Sofa Chair</h3>
            <p class="item-price">$90.00</p>
          </div>
          <p class="text">
            Modern Single Accent Sofa with Wood Frame and Metal Legs, Comfortable Seat Cushion Single Sofa Chair, Upholstered Comfy Reading Accent Chair for Living Room, Bedroom, Office and Reception Area.
          </p>
          <div class="featured-btns">
            <a class="btn no-underline" style="text-decoration: none;" href="product.php">Show more</a>

            <button type="button" class="btn">Purchase</button>
          </div>
        </div>
      </div>

      <!-- end of item -->
      <!-- item -->
      <div class="featured-item">
        <div class="featured-item-img">
          <img src="./img/ff58d9ea-3726-4071-9a68-7a2189e35416.37ba7edc0048fcb0b688996db9af79b2.jpeg" alt="feature image">
        </div>
        <div class="featured-item-content">
          <div class="title">
            <h3>Featured Product </h3>
            <h3>Warm Green Chair</h3>
            <p class="item-price">$78.00</p>
          </div>
          <p class="text">
            TOPJAN Gorgeous Velvet Sofa,Luxury Furniture Arm Chairs Green Single Sofa Chair with 1 Pillow,Comfortable and Light,Brings a Warm Atmosphere to your home.
          </p>
          <div class="featured-btns">
            <a class="btn no-underline" style="text-decoration: none;" href="product.php">Show more</a>

            <button type="button" class="btn">Purchase</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- blog -->
  <section class="blog">
    <div class="container">
      <div class="title">
        <h4>daily update</h4>
        <h3>latest blog</h3>
      </div>

      <div class="blog-grid">
        <!-- item -->
        <div class="blog-item">
          <div class="blog-item-img">
            <img src="./img/creative-home-decor-ideas.jpg" alt="blog image">
          </div>
          <div class="blog-item-content">
            <a href="#">creative ideas for decoration</a>
            <div>
              <!-- <span>january 20 | design | furniture</span> -->
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class="blog-item">
          <div class="blog-item-img">
            <img src="./img/BL_Amb_Amethist_Glance.jpg" alt="blog image">
          </div>
          <div class="blog-item-content">
            <a href="#">furniture designs & contemporary art</a>
            <div>
              <!-- <span>january 25 | design | furniture</span> -->
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class="blog-item">
          <div class="blog-item-img">
            <img src="./img/living-room-decor-ideas-5442837-hero-8b6e540e13f9457a84fe9f9e26ea2e5c.jpg" alt="blog image">
          </div>
          <div class="blog-item-content">
            <a href="#">decorate your home with the most modern furnishings.</a>
            <div>
              <!-- <span>january 28 | design | furniture</span> -->
            </div>
          </div>
        </div>
        <!-- end of item -->
      </div>
    </div>
  </section>

  <footer class="footer container">
    <div class="footer-item">
      <h2 class="brand-name">
        Harmony <span>HomeStyles</span>
      </h2>
      <p>social media accounts</p>
      <ul class="footer-icons">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </li>
      </ul>
    </div>

    <div class="footer-item">
      <h3>links</h3>
      <ul>
        <li><a href="#">home</a></li>
        <!-- <li><a href = "#">download</a></li>
          <li><a href = "#">pricing</a></li> -->
        <li><a href="about.html">about us</a></li>

      </ul>
    </div>

    <div class="footer-item">
      <h3>products</h3>
      <ul>
        <li><a href="category.php?category=table">closet</a></li>
        <li><a href="category.php?category=chairs">chairs</a></li>
        <li><a href="category.php?category=pillows">pillows</a></li>
        <li><a href="category.php?category=closet">Tabels</a></li>
      </ul>
    </div>

    <div class="footer-item">
      <h3>support</h3>
      <ul>
        <li><a href="contact_y.php">contact</a></li>


      </ul>
    </div>
  </footer>

  < </body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="slider.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    >
    <script src="js/script.js"></script>

</html>