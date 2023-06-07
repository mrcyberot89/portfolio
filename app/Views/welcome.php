<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url()?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>./assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <title>Bootstrap Example</title>
    <script src="<?= base_url()?>js/bootstrap.bundle.js "></script>
  </head>
  <body class="p-0 m-0 border-0 bd-example">

    <!-- Navbar -->
   <header class="sticky-top"> 
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll" style="color: #6610f2;">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="img-fluid"src="<?=base_url()?>assets/image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Desain Rumah</a></li>
                <li><a class="dropdown-item" href="#">Desain Interior</a></li>
                <li><a class="dropdown-item" href="#">Desain Banguanan lain</a></li>
                <li><a class="dropdown-item" href="#">Desain Struktur</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Simulasi Biaya</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang kami
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item ">
              <a href="" type="button" class="btn me-3 my-1">Masuk</a>
            </li>
            <li class="nav-item ">
              <a href="" type="button" class="btn me-3 my-1">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
    <!-- End Navbar -->
    <!--end header --> 
    <section class="container-fluid px-0" style="margin-top: -100px">
        <img class="img-fluid px-0" src="<?= base_url()?>assets/image/A1.png">
    </section>
    <!--Menu-->
    
    <!--End Menu-->
      
  </body>
</html>