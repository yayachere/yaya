<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
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
    #preloader {
      background: #fff url(../Loading_2.gif) no-repeat center center;
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
<div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Signup List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" style="overflow-x:auto;">
            <div class="card-body">
              <h5 class="card-title">Sign Up Table</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable table-striped">
                <thead>
                  <tr>
                           <th class="head0">Id</th>
                            <th class="head1">Full Name</th>
                            <th class="head0">Address</th>
                            <th class="head0">E-mail Address</th>
                            <th class="head1">Action</th> 
                  </tr>
                </thead>
                <tbody>
  <?php
                       
                $querys = mysqli_query($conn,"SELECT * FROM customer_signup where status = '0'");

                  while($rows = mysqli_fetch_assoc($querys)){
                  $idnum = $rows['cust_id'];
                 ?>
          <tr>
              <td><?php echo $rows['cust_id'];?></td>
              <td><?php echo $rows['fname'];?> <?php echo $rows['lname'];?></td>
              <td><?php echo $rows['address'];?></td>
              <td class="center"><?php echo $rows['email'];?></td>
              <td class="center"><a  href=" signup_detail.php?ID=<?php echo $idnum;?> " data-toggle="modal" class="btn btn-success">Detail</a></td>
                        </tr> <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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