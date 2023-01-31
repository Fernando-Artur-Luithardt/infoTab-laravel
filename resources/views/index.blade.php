<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Info Tab</title>
  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('site/index.css')}}" />
  <script src="{{asset('site/jquery.js')}}"></script>
  <script src="https://use.fontawesome.com/8d78ec2fc5.js"></script>
</head>
<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container px-5">
      <a class="navbar-brand" href="#!">InfoTab</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content-->
  <div class="container-1" style="min-height: 80vh;">
    <div class="container">
      <!-- Heading Row-->
      <div class="row align-items-center " style="min-height: 70vh;">
          <div class="col-lg-5">
            <h1 style="font-size: 6vh;">Soluções em informática e sugurança eletrônica</h1>
            <p style="font-size: 18px;">Trabalhamos com Computadores gamer, worksation, Instalação e
              manutenção de câmeras de segurança, venda e manutenção de no-break</p>
            <a class="btn btn-wpp" href="https://wa.me/554735227750"><i class="fa fa-whatsapp"></i> WhattsApp</a>
            <a class="btn btn-instagram" href="https://www.instagram.com/infotab_info/"><i class="fa fa-instagram"></i> Instagram</a>
          </div>
          <div class="col-lg-7">
              <div id="firstCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="examplePhotos\example1.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="examplePhotos\example2.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="examplePhotos\example3.webp" class="d-block w-100" alt="...">
                      </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#firstCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#firstCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container px-4 px-lg-5">
    <!-- Call to Action-->
    <div class=" text-center">
      <div class="" style="padding-top: 20px;">
        <H1>Nossos Serviços</H1>
      </div>
    </div>
    <!-- Content Row-->
    <div class="row ">
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <div class="card-body">
          <i class="bi-alarm"></i>
            <h2 class="card-title">Automação</h2>
            <p class="card-text">Integração Alexa<br>Casa conectada<br>Portão eletrônico</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Informática</h2>
            <p class="card-text">Manutenção<br>Montagem<br>Periféricos<br>Rede</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Segurança eletrônica</h2>
            <p class="card-text">câmeras (venda e locação)<br>Alarmes (venda e locação)<br>Controle de acesso<br>Interfone</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Segurança colaborativa</h2>
            <p class="card-text">Residêncial<br>Comércio<br>Industrial<br>Condomínio</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container px-5 px-lg-6">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>
  <script type="module" src="/src/main.ts"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>