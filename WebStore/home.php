<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="home.css" />
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- end bootstrap links -->
  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <!-- end jquery cdn -->
  <title>Dashboard</title>
</head>

<body>
  <!-- connection to db and variables -->
  <?php include 'connection.php' ?>
  <!-- end connection to db and variables -->
  <!-- top navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- end top navbar -->
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 20px">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: auto">
      <div class="carousel-item active">
        <img src="https://th.bing.com/th/id/OIP.qlaL54dVDOraoyYAGr9g_gHaFE?pid=ImgDet&w=2048&h=1403&rs=1" class="d-block w-100" alt="slide1" style="height: 400px; object-fit: cover; width: 100%" />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/Rf4f9794c9a64d48ca1887c5561bc1792?rik=lC%2fAfqMoEPSEBQ&riu=http%3a%2f%2fwallpapersdsc.net%2fwp-content%2fuploads%2f2016%2f09%2fVancouver-Pictures.jpg&ehk=anNpxTFIdECtTk2mCzhB6L0bd09CEeQwmv9HsxpTRY0%3d&risl=&pid=ImgRaw" class="d-block w-100" alt="slide2" style="height: 400px; object-fit: cover; width: 100%" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/R98349cdeba622fd63fecdfc658d70ed9?rik=2Pvu5hcFl95J0g&riu=http%3a%2f%2fblog.machinefinder.com%2fwp-content%2fuploads%2f2013%2f05%2fpictures-4ever-eu.jpg&ehk=xwuXcxO8Sp2DA3baVCNlNANLvjN3uJOXcuSF30j2Uwk%3d&risl=&pid=ImgRaw" class="d-block w-100" style="height: 400px; object-fit: cover; width: 100%" alt="slide3" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->
  <?php
  include 'products_grid.php'
  ?>
  <!-- grid products -->
  <div style="padding:70px" class="row row-cols-1 row-cols-md-3">
    <?php
    foreach ($my_array as $product) {
      $product_image = $product['product_image_url'];
      $product_name = $product['product_name'];
      $product_price = $product['product_price'];
      $product_brand = $product['product_brand'];
      $product_id = $product['product_id'];
    ?>
      <div class="col mb-4">
        <div onclick='getDataForDialog("<?php echo $product_id; ?>",
        "<?php echo $product_name; ?>",
        "<?php echo $product_price; ?>",
        "<?php echo $product_brand; ?>",
        "<?php echo $product_image; ?>"
        )' style='cursor: pointer;' data-bs-target='#productModal' data-bs-toggle='modal' class='card'>
          <?php

          echo "<img style='height:200px;object-fit:contain' src=$product_image class='card-img-top' alt=$product_brand>";
          ?>
          <div class="card-body">
            <?php echo "<h5  class='card-title text-truncate'> $product_name </h5>"; ?>
            <?php echo "<p class='card-text'> $product_brand</p>"; ?>
            <?php echo "<div class='card-footer bg-transparent text-end'><h3> $product_price <sub>$</sub></h3></div>"; ?>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <!-- end grid products -->
  <!-- modal -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_id"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          body
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <!-- js -->
  <script>
    function getDataForDialog(product_id, product_name, product_price, product_brand, product_image) {
      // set the data into the modal
      // $('#modal_title_id').text(product_name);
    };
  </script>
  <!-- end js -->
</body>

</html>