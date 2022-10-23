<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?= $_SERVER['REQUEST_URI'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('vendor/') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url('dashboard') ?>"><h2>Kripto<em>Grafi</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li <?php if($_SERVER['REQUEST_URI']=="/kriptografi/dashboard" || $_SERVER['REQUEST_URI']=="/kriptografi") { ?>  class="nav-item active"   <?php   }
                else{ ?> class="nav-item" <?php } ?>>
                <a class="nav-link" href="<?= site_url('dashboard') ?>">Dashboard</a>
                </li>
              <li <?php if($_SERVER['REQUEST_URI']=="/kriptografi/encoder" || $_SERVER['REQUEST_URI']=="/kriptografi/encoder/encode") { ?>  class="nav-item active"   <?php   }
                else{ ?> class="nav-item" <?php } ?>>
                <a class="nav-link" href="<?= site_url('encoder') ?>">Encoder</a>
              </li>
              <li <?php if($_SERVER['REQUEST_URI']=="/kriptografi/decoder" || $_SERVER['REQUEST_URI']=="/kriptografi/decoder/decode") { ?>  class="nav-item active"   <?php   }
                else{ ?> class="nav-item" <?php } ?>>
                <a class="nav-link" href="<?= site_url('decoder') ?>">Decoder</a>
              </li>
              <li <?php if($_SERVER['REQUEST_URI']=="/kriptografi/simulasi") { ?>  class="nav-item active"   <?php   }
                else{ ?> class="nav-item" <?php } ?>>
                <a class="nav-link" href="<?= site_url('simulasi') ?>">simulasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>