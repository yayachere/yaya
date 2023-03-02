<?php include('header.php');
include('dbcon.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
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
          <li class="breadcrumb-item active">Forgot Password</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   <section class="section contact">

      <div class="row gy-4">

        <div class="col-md-9">
          <div class="card p-4">
 <?php
  
 if(isset($_POST['send']))
  {  
     $user_id1=$_POST['uid'];
     $email1=$_POST['email'];
     $type=$_POST['type'];
     $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $str = str_shuffle($str);
    $passwordd = substr($str, 0,10);
    $pass=base64_encode($passwordd);
    $password = md5($passwordd);

$result=mysqli_query($conn,"select * from users_account where user_id='$user_id1' AND 
e_mail='$email1'")or die( mysqli_error($conn));

if(mysqli_num_rows($result) >= 1)  {
  $row = mysqli_fetch_assoc($result);
  $account_type = $row['user_type'];
  $f_name = $row['f_name'];
  $m_name = $row['m_name'];

if($type==$account_type)
 {    
        $subject="Sodo City Vehicle Registration";  
                    $message = "Dear $f_name $m_name 
                    Your password is changed as per your request.<br><br>
                    Your new password is : $passwordd<br>
                    Use this password to login to your Sodo City Vehicle Registration System account.<br><br>
                    DON'T REPLY TO THIS EMAIL";
                    $headers = 'From: sodocityrta@gmail.com'. "\r\n". 'MIME-Version: 1.0'. "\r\n" . 'Content-type: text/html; charset=utf-8';

                          // Send mail by PHP Mail Function
                    $mail = mail($email1, $subject, $message,$headers);
                    $connection = @fsockopen('www.google.com',80);
                    //check connection          
          if (!$connection) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="bi bi-wifi-off me-1"></i>You have no internet connection!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
          elseif ($mail == true) {
                                
               mysqli_query($conn,"Update users_account set password ='$password' where user_id='$user_id1'")or die(mysqli_error());

              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle-fill me-1"></i>
      Changed Successfully. Your password is sent on your email address.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
          }else {

            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="bi bi-x-octagon-fill me-1"></i>
                  Failed to send email. Please check your connection and try again!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }                
  
        } 
else
        {    
 
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-x-octagon-fill me-1"></i>
      There is no '. $type. ' account with this email and user_id!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';  
 
        }
   
  } else
        {  
 
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-x-octagon-fill me-1"></i>
      There is no account with this user_id and email 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

        }}
?>
    
 <form method="post" action="#">
    <div class="mb-3 mt-3">
      <label for="cid" class="form-label text-dark">User ID:</label>
      <input type="text" class="form-control" id="uid" placeholder="Enter User ID" name="uid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your User ID here" required>
     
    </div>
    <div class="mb-3">
      <label for="email" class="form-label text-dark">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your Email here" required>
    </div>
<div class="form-floating mb-3">
                      <select class="form-select" name="type" id="type" aria-label="Floating label select example" required>
                        <option disabled selected></option>
                        <option value="Admin">Admin</option>
                        <option value="customer">Customer</option>
                        <option value="employee">Employee</option>
                      </select>
                      <label for="type">Choose account type from the list:</label>
    </div>
    
  <button type="submit" class="btn btn-primary" name="send">Submit</button>
  <button type="reset" class="btn btn-danger">Cancel</button>
  </form>
          </div>

        </div>
 <?php include('aside.php')?>
      </div>

    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>