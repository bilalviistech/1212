<!DOCTYPE html>
<html>

<head>
  <title><?php if (isset($page) && is_string($page)) {
            echo $page;
          } else {
            echo '1212MED';
          } ?></title>
  <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                      echo $pageDesc;
                                    } else {
                                      echo 'desired description';
                                    } ?> />
  <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                  echo $pageTag;
                                } else {
                                  echo 'desired tag';
                                } ?> />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="images/logo.png" type="image/png" sizes="114*114">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <!-- link owl carasoul  -->
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <!-- link slick carasoul  -->
  <link href="css/slick.css" rel="stylesheet" type="text/css">
  <link href="css/slick-theme.css" rel="stylesheet" type="text/css">

  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>

  <div id="cursor" class="cursor">
    <div class="ring">
      <div><!--Border--></div>
    </div>
    <div class="ring">
      <div><!--Pointer--></div>
    </div>
  </div>

  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo1" alt="img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">SERVICES</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SERVICES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Health Optimization</a></li>
                <li><a class="dropdown-item" href="#">Anti Aging</a></li>
                <li><a class="dropdown-item" href="#">Hormone Replacement (BHRT)</a></li>
                <li><a class="dropdown-item" href="#">Weight loss</a></li>
                <li><a class="dropdown-item" href="#">Dermatology</a></li>
                <li><a class="dropdown-item" href="#">Primary Care </a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="blog.php">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="term.php">TERMS & CONDITIONS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="app.php">MOBILE APP</a>
            </li>
          </ul>
          <span class="header1">
            <div class="header2">
              <a href="contact.php">CONTACT US</a>
            </div>
            <div class="social">
              <a href="#">
                <img src="images/instagram.png" alt="insta">
              </a>
              <a href="#">
                <img src="images/facebook.png" alt="insta">
              </a>
              <a href="#">
                <img src="images/linkdin.png" alt="insta">
              </a>
            </div>
          </span>
        </div>
      </div>
    </nav>
  </div>