<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Bolder Industries</title>

  <!-- leaflet links  -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="white">

  <?php
  // include header
  include 'php/header.php';

  // set default page to home
  $current_page = 'home';

  // check what page
  if(array_key_exists('page',$_GET)) {
    $current_page = $_GET['page'];
  }
  echo "<main>";
  // switch pages
  switch ($current_page) {
    case 'template':
      include 'php/template.php';
      break;
    case 'home':
      include 'php/home.php';
      break;
    case 'products':
      include 'php/products/products.php';
      break;
    case 'facility':
      include 'php/facility.php';
      break;
    case 'investors':
      include 'php/investors.php';
      break;
    case 'about':
      include 'php/about/about.php';
      break;
    case 'contact':
      include 'php/contact.php';
      break;

    // product pages
    case 'bb':
      include 'php/products/bb.php';
      break;

    // default
    default:
      include 'php/home.php';
      break;
  }
  echo "</main>";

  // inclue footer
  include 'php/footer.php';
   ?>

  <!-- Materialize Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/bin/materialize.min.js"></script>
  <script src="js/bin/init.js"></script>
  <!-- form scripts -->
  <script src="php/phpform/form.js"></script>
  <!-- map scripts -->
  <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>
  <script src="js/bin/map.js"></script>

  </body>
</html>
