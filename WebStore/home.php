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
          <input class="form-control me-2" type="text" id="search_product" placeholder="Search a product ..." name="search_product" aria-label="Search" />
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
      $product_image_first = $product['product_image_url'];
      $product_image_array = explode("|", $product_image_first);
      $product_name = $product['product_name'];
      $product_price = $product['product_price'];
      $product_brand = $product['product_brand'];
      $product_image = $product_image_array[0];
      $product_description = $product['product_description'];
      $mark1 = "&quot";
      $mark2 = "&apos";
      $mark3 = "'";
      // modify the text to be transmeted 
      $product_description = str_replace($mark1, "", $product_description);
      $product_description = str_replace($mark3, " ", $product_description);
      $product_id = $product['product_id'];
      // $product_description = substr($product['product_description'], 0, 306);
      // $product_description = substr($desc, 0, 100);
      // $product_image_array_str = "";
      // foreach ($product_image_array as $item) {
      //   $product_image_array_str .= $item + "|";
      // }
      // $product_image_array_str = implode("|", $product_image_array);
    ?>
      <div class="col mb-4">
        <div onclick='getDataForDialog("<?php echo $product_id; ?>",
        "<?php echo $product_name; ?>",
        "<?php echo $product_price; ?>",
        "<?php echo $product_brand; ?>",
        "<?php echo $product_image_first; ?>",
        "<?php echo $product_description; ?>"
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
    <div style="align-items: center;justify-content:center;flex-direction:column;display:flex;" class="modal-dialog modal-dialog-centered">
      <div style="min-width: fit-content !important;" class="modal-content">
        <div class="modal-content-custom">
          <div class="modal-content-left">
            <!-- <img id="modal_image" src="" alt="modal_image" class="madal-content-left-image" /> -->
            <!-- carousel -->
            <div id="modalCarousel" class="carousel slide" data-bs-ride="carousel">
              <div id="modal-carousal-div-containter" class="carousel-inner" style="height:auto">
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- end carousel -->
            <div class="modal-content-left-fotter">
              <strong id="modal_brand"></strong>
              <h4 id="modal_price"></h4>
            </div>
          </div>
          <div class="modal-content-right">
            <h5 class="modal-title" id="modal_title_id"></h5>
            <strong style="font-size: 14px;margin-left:8px">Description:</strong>
            <p style="font-size:12px;padding:8px;overflow-y:scroll;flex:1" id="modal_description_id"></p>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Add to Bascket</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <!-- js -->
  <script>
    // search fct
    $(document).ready(function() {
      $("#search_product").keyup(function() {
        var txt = $(this).val();
        if (txt != "") {
          $.ajax({
            url: "products_grid.php",
            method: 'post',
            data: {
              search: txt
            },
            dataType: "text",
            success: function(data) {}
          })
        }

      })

    })
    // modal fct
    function getDataForDialog(product_id,
      product_name,
      product_price,
      product_brand,
      product_image_first,
      product_description
    ) {
      // set the data into the modal
      $('#modal_title_id').text(product_name);
      $('#modal_brand').text(product_brand);
      $('#modal_description_id').text(product_description);
      $('#modal_price').text(product_price + '$');
      // remove old content of the modal carousal
      $('#modal-carousal-div-containter').empty();
      // get the product_image_array
      var product_image_array = product_image_first.split("|");
      // add the carousel items
      product_image_array.forEach((element, index) => {
        if (index === 0) {
          var item1 = `<div id='carousel_item_${index}' class='carousel-item active'></div>`;
        } else {
          var item1 = `<div id='carousel_item_${index}' class='carousel-item'></div>`;
        }
        $("#modal-carousal-div-containter").append(item1);
        var item2 = `<img src="${element}" alt='modal_image' class="d-block w-120 madal-content-left-image" />`;
        var id_ = `#carousel_item_${index}`;
        $(id_).append(item2);
      });
    };
  </script>
  <!-- end js -->
</body>

</html>