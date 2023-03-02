<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
  function show() {  
  var loader = document.getElementById('preloader');
    loader.style.display = "block";

  }
  function hide() {  
  var loader = document.getElementById('preloader');
    loader.style.display = "none";

  }
</script>
<style type="text/css">
  .cards {
  box-shadow: 0 7px 8px 0 rgba(0, 0, 0, 0.3);
}
 .cards:hover {
  box-shadow: 0 17px 20px 0 rgba(0, 0, 0, 0.3);
  cursor: pointer;

}
    #preloader {
      background: #fff url(Loading_2.gif) no-repeat center center;
      background-size: 10%;
      height: 100vh;
      width: 100%;
      position: fixed;
      z-index: 100;
    }
  </style>
</head>
<body onpagehide="show()" onpageshow="hide()">
<div id="preloader"></div>
  <!-- ======= Header ======= -->
<?php include('navbar.php');?>
  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->
<?php include('sidebar.php');?>
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Developers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
       <div class="col-xl-4">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/IMG_7963.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h4>Chernet Mitiku</h4>
              <h5>Programmer</h5>
              <div class="media social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
            <div class="col-xl-4">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/buza.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h4>Bizuayehu Beyene</h4>
              <h5>Designer</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
            <div class="col-xl-4">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/buzi.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h4>Bizuayehu Getero</h4>
              <h5>Group coordinator</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
            <div class="col-xl-3">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/bura.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h6>Biruktawit Ergana</h6>
              <h5>Designer</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
            <div class="col-xl-3">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/bo.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h6>Biruk Lako</h6>
              <h5>Data collector</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
            <div class="col-xl-3">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/bir.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h6>Biruk Birhanu</h6>
              <h5>Data collector</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-3">

          <div class="cards">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/bo.jpg" width="120" height="120" alt="Profile" class="rounded-circle">
              <h6>Bogale Nasero</h6>
              <h5>Data collector</h5>
              <div class="social-links mt-2">               
                <a href="https://www.facebook.com/cheru.mitiku.3" target="blank" class="facebook" style="font-size: 20px"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaya_chere/" target="blank" class="instagram" style="font-size: 20px"><i class="bi bi-instagram"></i></a>
                <a href="https://t.me/Yayachere16" target="blank" class="telegram"><i class="bi bi-telegram" style="font-size: 20px"></i></a>
              </div>
            </div>
          </div>

        </div>
      
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>