<?php
  $cp = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  $cpage = explode('.',$cp); 
  $page=$cpage[0];
?>
<section class="nav-up">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-12">
        <p><i class="fas fa-envelope"></i> : <a href="mailto:yuvakalyanparishad@gmail.com">yuvakalyanparishad@gmail.com</p></a>
      </div>
      <div class="col-md-4 col-6">
        <p><i class="fas fa-mobile"></i> : <a href="tel:09693630001"> 9693630001</p></a>
      </div>
      <div class="col-md-4 col-6">
        <div class="social-media">
          <p><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;<i class="fab fa-instagram-square"></i>&nbsp;&nbsp;<i class="fab fa-whatsapp-square"></i>&nbsp;&nbsp;<i class="fab fa-twitter-square"></i></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/log.png" class="img-fluid" alt="YKP Logo" title="Yuva Kalyan Parishad"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($page == 'index'){echo 'active'; } ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page == 'about'){echo 'active'; } ?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page == 'certificate'){echo 'active'; } ?>" href="certificate.php">Certificate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if( ($page == 'media-gallery') || ($page == 'photo-gallery')){echo 'active'; } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gallery
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="media-gallery.php">Media Gallery</a>
            <a class="dropdown-item" href="photo-gallery.php">Photos Gallery</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page == 'downloads'){echo 'active'; } ?>" href="downloads.php">Downloads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page == 'contact'){echo 'active'; } ?>" href="contact.php">Contact Us</a>
        </li>
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>
    </div>
  </div>
</nav>