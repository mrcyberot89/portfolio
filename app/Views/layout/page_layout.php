<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/04d0944cdc.js" crossorigin="anonymous"></script>
    
    <title>Portfolio Me</title>
    <script src="<?= base_url()?>js/bootstrap.bundle.js "></script>
  </head>
  <body class="p-0 m-0 border-0 bd-example">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll" style="color: #6610f2; background-color: #454545;opacity: 0.9;">
      <div class="container text-center">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
            <li>
              <a class="nav-link" href="#"><i class="fa-brands fa-square-facebook fa-lg" style="color: #fff;"></i></a>
            </li> 
            <li>
              <a class="nav-link" href="https://www.instagram.com/kaneb0_kering"><i class="fa-brands fa-instagram fa-lg" style="color: #fff;"></i></a>
            </li> 
          </ul>
        </div>
      </div>
      
    </nav>
    <!-- End Navbar -->
    <div class="banner-image w-100 vh-95 d-flex justify-content-center align-items-center" style="background-image:url(<?= base_url()?>assets/image/top.jpg)">
      <div class="container">
        <div class="row">
            <div class="col">
              <div id="welcome">
                <h5 style="color: #fff; font-size: 30px;">Welcome</h5>
                <p>simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
              </div>
            </div>
            <div class="col">
                <div class="foto" style="background-image: url(<?= base_url()?>/assets/image/me.jpg); background-size: cover;">
                    
                </div>
            </div>
        </div>
      </div>
    </div>

    
        <?= $this->renderSection('content') ?>


      <div class="banner w-100 vh-90 d-flex justify-content-center align-items-center" style="background-image:url(<?= base_url ()?>/assets/image/contact.jpg); object-fit: cover; background-size: cover; height: 300px;">
        <div class="container text-center">
          <div class="contact-me">
            <div class="row-cols-6">
              <div class="col-4 mx-auto">
                 <h3>Contact Me</h3>
              </div> 
              <div class="col-7 mx-auto ">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
              </div>   
            </div>
            
            <button type="button" class="btn">riyanguntoro91@gmail.com</button>
          </div>
        </div>
     </div>
</body>
</html>