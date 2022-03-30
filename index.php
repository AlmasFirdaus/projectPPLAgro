<?php

$product = [
  [
    "nama" => "Kurma",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
  [
    "nama" => "Melon",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
  [
    "nama" => "Vanilla",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
  [
    "nama" => "Hazelnut",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
  [
    "nama" => "Strawberry",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
  [
    "nama" => "Coklat",
    "harga" => "Rp. 10.000",
    "rating" => "5",
    "gambar" => "assets/img/displaysusu.png"
  ],
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Bootstrap end -->

  <title>Surem Seger</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-light shadow-sm fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="https://cdn.icon-icons.com/icons2/1286/PNG/512/90_85241.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
        Surem Seger
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-login">
            <a href="login.html">
              <button type="button" class="btn btn-success" id="btn-login">Masuk</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <section id="home">
    <div class="container">
      <div class="row d-flex justify-content-around align-items-center text-center">
        <div class="col-md-4 order-2 order-md-1 mb-3">
          <h1>Susu Rembangan</h1>
          <p class="fs-5"> Produk yang ditawarkan yaitu 100% susu segar rembangan dari perahan sapi yang berkualitas dengan berbagai rasa Kurma, Melon, Vanilla, Hazelnut, Strawbery, coklat, dll. </p>
        </div>
        <div class="col-md-4 order-1 order-md-2 mb-4">
          <img src="assets/img/highlight.png" alt="">
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,64L30,53.3C60,43,120,21,180,58.7C240,96,300,192,360,213.3C420,235,480,181,540,181.3C600,181,660,235,720,256C780,277,840,267,900,229.3C960,192,1020,128,1080,112C1140,96,1200,128,1260,128C1320,128,1380,96,1410,80L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>About Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="">
          <img src="assets/img/sapi.jpg" class="rounded mx-auto d-block mt-4" alt="...">
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-3 text-center">
        <div class="col-md-4">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, cumque facilis eos voluptate ratione, laudantium quis exercitationem corrupti non facere culpa officiis quisquam maiores sit! Doloremque, harum autem omnis molestias voluptatibus quasi laudantium esse repellendus voluptates, delectus obcaecati mollitia? Iure dignissimos dicta accusantium illum a similique veritatis recusandae sint deleniti.</p>
        </div>
        <div class="col-md-4">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, cumque facilis eos voluptate ratione, laudantium quis exercitationem corrupti non facere culpa officiis quisquam maiores sit! Doloremque, harum autem omnis molestias voluptatibus quasi laudantium esse repellendus voluptates, delectus obcaecati mollitia? Iure dignissimos dicta accusantium illum a similique veritatis recusandae sint deleniti.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#f5f5f5" fill-opacity="1" d="M0,224L34.3,229.3C68.6,235,137,245,206,240C274.3,235,343,213,411,186.7C480,160,549,128,617,144C685.7,160,754,224,823,245.3C891.4,267,960,245,1029,197.3C1097.1,149,1166,75,1234,80C1302.9,85,1371,171,1406,213.3L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#c7d0d8" fill-opacity="1" d="M0,32L30,74.7C60,117,120,203,180,224C240,245,300,203,360,197.3C420,192,480,224,540,202.7C600,181,660,107,720,117.3C780,128,840,224,900,224C960,224,1020,128,1080,90.7C1140,53,1200,75,1260,74.7C1320,75,1380,53,1410,42.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg> -->
  </section>

  <section id="product">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Product</h2>
        </div>
      </div>
      <div class="row mt-4 align-items-center ">
        <?php foreach ($product as $prod) : ?>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-3 d-flex justify-content-center">
            <div class="card" style="width: 15rem;">
              <img src="<?= $prod["gambar"] ?>" class=" card-img-top " alt="<?= $prod["nama"] ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $prod["nama"] ?></h5>
                <p class="card-text">Susu segar rembangan rasa <?= $prod["nama"] ?></p>
                <div class="row justify-content-between align-items-center">
                  <div class="col-4">
                    <i class="bi bi-star-fill" style="color: yellow;"></i> <?= $prod["rating"] ?>
                  </div>
                  <div class="col-4">
                    <a href="#" class="btn btn-success">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L48,69.3C96,107,192,181,288,229.3C384,277,480,299,576,266.7C672,235,768,149,864,128C960,107,1056,149,1152,149.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-1">
          <span class="badge bg-success d-flex align-items-center justify-content-center"><i class="bi bi-geo-alt text-center fs-4"></i></span>
        </div>
        <div class="col">
          <h4>Location</h4>
          <p style="margin-top: -10px;">Darungan, Kemuning Lor, Kec. Arjasa, Kabupaten Jember, Jawa Timur 68113</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center pb-1" style="background:  #c7d0d8">
    <p>©Copyright <label class="fw-bold">Susu Rembangan</label>. All Rights Reserved</p>
    <p>Made with <i class="bi bi-suit-heart-fill text-danger"></i> <a href="https://www.instagram.com/almasfirdaus_/" class="fw-bold">Almas Firdaus</a></p>
  </footer>
</body>

</html>