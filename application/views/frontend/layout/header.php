<!DOCTYPE html>
<html lang="en">
<!-- DOM head start -->

<!-- Mirrored from kaushikstudio.site/works/kk01/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 10:42:08 GMT -->

<head>
   <meta charset="UTF-8">
   <meta name="title" content="((SITE_NAME))">
   <meta name="description" content="((SITE_NAME)) Luxury Beauty Experience">
   <meta name="keywords" content="Skin care, Hair, Perfumes, Makeup, Facial, Body">
   <meta name="format-detection" content="telephone=no" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
   <meta property=og:title content="((SITE_NAME))">
   <meta property=og:keywords content="Skin care, Hair, Perfumes, Makeup, Facial, Body">
   <meta property=og:description content="((SITE_NAME)) Luxury Beauty Experience">
   <meta property=og:image content="<?= FRONTEND_ASSETS_PATH; ?>images/thumbnail/thumbnail.jpg">
   <meta property=og:url content="<?= base_url('frontend/index_2') ?>">
   <!-- Website apple meta tag start -->
   <link rel="apple-touch-startup-image" href="assets/images/icon/favicon.svg">
   <link href="assets/images/icon/favicon.svg" rel="shortcut icon" type="image/x-icon" />
   <!-- Website apple meta tag end -->
   <!-- Website title start -->
   <title>((SITE_NAME))</title>
   <!-- Website title end -->
   <!-- webfont link attached start -->
   <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet">
   <!-- webfont link attached end -->
   
   <!-- custom css files link start -->
   <link rel="stylesheet" href="<?= FRONTEND_ASSETS_PATH; ?>css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= FRONTEND_ASSETS_PATH; ?>css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= FRONTEND_ASSETS_PATH; ?>css/aos.css">
   <link rel="stylesheet" href="<?= FRONTEND_ASSETS_PATH; ?>css/main.css">
   <link rel="stylesheet" href="<?= FRONTEND_ASSETS_PATH; ?>css/login.css">
   <!-- custom css files link end -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<!-- DOM head end -->
<!-- Body start -->

<body>
   <!-- Header start -->
   <header class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav13" aria-controls="basicExampleNav13" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="<?= base_url('') ?>">
            <img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/logo.svg" alt="logo">
         </a>
         <div class="collapse navbar-menu navbar-collapse" id="basicExampleNav13">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="<?= base_url('') ?>" class="nav-link">Home</a>
               </li>
               <li class="nav-item dropdown">
                  <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="plus"></span></a>
                  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink3">
                     <a class="dropdown-item" href="<?= base_url('beauty/category') ?>">Hand cream</a>
                     <a class="dropdown-item" href="<?= base_url('beauty/category') ?>">Bio performance</a>
                     <a class="dropdown-item" href="<?= base_url('beauty/category') ?>">Lancome</a>
                     <a class="dropdown-item" href="<?= base_url('beauty/category') ?>">L’interdit</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url('beauty/support') ?>" class="nav-link">Support</a>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url('beauty/contact') ?>" class="nav-link">Contact</a>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url('beauty/vision') ?>" class="nav-link">Our vision</a>
               </li>

               <?php
               $userdata = $this->session->userdata('user');
               // echo "<pre>";print_r($userdata);die;
               if (empty($userdata)) { ?>
                  <li class="nav-item dropdown">
                     <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sign<span class="plus"></span></a>
                     <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item" href="<?= base_url('beauty/signin') ?>">Sign in</a>
                        <a class="dropdown-item" href="<?= base_url('beauty/register_form') ?>">registration </a>
                     </div>
                  </li>
               <?php
               }
               ?>
            </ul>
         </div>
         <div class="navbar-user">
            <ul class="navbar-nav">
               <li class="header-search">
                  <div class="search">
                     <form role="search" method="POST" class="search-form form">
                        <a href="javascript:void(0)" class="search-click"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/header-search.svg" alt="search"></a>
                        <input type="search" class="search-field" placeholder="Search" value="" name="search" title="">
                     </form>
                  </div>
               </li>
               <li class="header-cart">
                  <a id="shop-cart" href="<?= base_url('beauty/cart') ?>" class="nav-link"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/header-cart.svg" alt="cart-icon"></a>
               </li>
               <li class="header-cart">
                  <a id="shop-cart" href="<?= base_url('beauty/my_account') ?>" class="nav-link"><img src="<?= FRONTEND_ASSETS_PATH; ?>images/icon/header-user.svg" alt="cart-icon"></a>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <!-- Header end -->