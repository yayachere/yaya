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
  .glow {
  text-align: center;
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
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
 <?php include('sidebar.php');?>
  <main id="main" class="main">

    
<?php include('dbcon.php');
    $status="On";
    $query = "SELECT * FROM Slide where status='$status'";
    $result = mysqli_query($conn,$query)or die(mysqli_error($conn));
    $row=mysqli_fetch_array($result);
    $pic1=$row['slide_1'];
    $pic2=$row['slide_2'];
    $pic3=$row['slide_3'];
    $pic4=$row['slide_4'];
    ?>
    <section class="section">
      <div class="row">
        <div class="col-md-9">

        <div class="card">
            <div class="card-body">
              <div class="pagetitle m-3 glow">
      <h1 class="glow">Sodo City Vehicle Registration System</h1>

    </div><!-- End Page Title -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Uploads/<?php echo $pic1;?>" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="Uploads/<?php echo $pic2;?>" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="Uploads/<?php echo $pic3;?>" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="Uploads/<?php echo $pic4;?>" class="d-block w-100" alt="...">
                    
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

              </div><!-- End Slides with captions -->

            </div>
          </div>

        </div>
       <?php include('aside.php')?>

      </div>
    </section>

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
  <?php include('footer2.php');?>
 <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>