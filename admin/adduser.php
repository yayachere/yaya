<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="../jquery-3.6.0.js"></script>
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
  <!-- ======= Sidebar ======= -->
<?php include('sidebar.php');?>
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Add_user</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fill The User_Id Below</h5>
              <!--Begin the validation states--->
<?php
                     $error = 0;
      if (isset($_POST['register'])){   
            
                  $fname = $_POST['uid'];
                  $status = "Active";
                  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                  $str = str_shuffle($str);
                  $passwordd = substr($str, 0,10);
                  $pass=base64_encode($passwordd);
                  $password = md5($passwordd);
                  $created_by = $session_id;
/*                  $connection = @fsockopen('www.google.com',80);
          
          //check connection          
          if (!$connection) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="bi bi-wifi-off me-1"></i>You have no internet connection!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    //check if the user is Employee
          else*/ if(mysqli_num_rows(mysqli_query($conn,"select * from employee where emp_id ='$fname'")) >= 1)  {
            $queryss = mysqli_query($conn,"select * from users_account where user_id ='$fname'");
                                       
                if(mysqli_num_rows($queryss) >= 1)  {
                  echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            <i class="bi bi-info-circle-fill me-1"></i>
                            There is an account for this user !!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';

                }
                else {
                    $querys = mysqli_query($conn,"select * from employee where emp_id ='$fname'");
                  while($rows = mysqli_fetch_assoc($querys)){
                    $user_id=ucfirst($rows['emp_id']);
                    $f_name=ucfirst($rows['f_name']);   
                    $m_name =ucfirst($rows["m_name"]);
                    $l_name =ucfirst($rows["l_name"]);
                    $user_type='employee';
                   $e_mail=$rows["email"];
                   $phone_no=$rows["Phone_no"];
                   $pro_image=$rows["profile_image"];
                   $about_me=ucfirst($rows["about_me"]);

                   //Send mail by PHP Mail Function
                    $subject="Sodo City Vehicle Registration"; 
                    
                   $message = "Dear $f_name $l_name below is your username and password for Vehicle Registration System.<br><br>
                  Your User Id : $user_id <br>  
                  Your Password : $passwordd<br><br>
                  Please use this information to login to Vehicle Registration System!!<br>
                  DON'T REPLY to this email";
                  $headers = 'From: sodocityrta@gmail.com'. "\r\n". 'MIME-Version: 1.0'. "\r\n" . 'Content-type: text/html; charset=utf-8';
                  $mail = mail($e_mail, $subject, $message,$headers);
                 
                 /*if (!$mail== true) {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-x-octagon-fill me-1"></i>
                            Failed to create account Check your connection and try again!!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
            } else {*/

                    mysqli_query($conn,"insert into users_account( user_id,f_name, m_name,l_name,user_type,e_mail,phone_no,pro_image,about_me,password,status,created_by) values('$user_id','$f_name','$m_name','$l_name','$user_type','$e_mail','$phone_no','$pro_image','$about_me','$password','$status','$created_by')")or die(mysqli_error($conn));
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-1"></i>
                            New '. $user_type. ' Account Created successfully!!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';?>

        <a href='print.php?empnm=<?php echo $f_name;?>&emplnm=<?php echo $m_name;?>&usrnm=<?php echo $user_id;?>&psswdr=<?php echo $passwordd;?>' class="btn btn-success">Print</a> 
                          
                <?php 
              
                }}} 
                    
            
                //check if the user is Admin

          else if(mysqli_num_rows(mysqli_query($conn,"select * from admin where admin_id ='$fname'")) >= 1)  {
                  
            $queryss = mysqli_query($conn,"select * from users_account where user_id ='$fname'");
                      
              if(mysqli_num_rows($queryss) >= 1)  {
                  
                   echo '  <div class="alert alert-danger alert-dismissible fade show">
                     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      There is an account for this user !!</div>';
                  
                }
                else{
                $querys = mysqli_query($conn,"select * from admin where admin_id ='$fname'");
     while($rows = mysqli_fetch_assoc($querys)){
                    $stud_id=$fname;
                    $f_name=ucfirst($rows['f_name']);                   
                    $m_name =ucfirst($rows["m_name"]);
                    $l_name =ucfirst($rows["l_name"]);
                    $user_type='Admin';
                   $e_mail=$rows["email"];
                   $phone_no=$rows["Phone_no"];
                   $pro_image=$rows["profile_image"];
                   $about_me=ucfirst($rows["about_me"]);

                   //Send mail by PHP Mail Function
                    $subject="Sodo City Vehicle Registration"; 
                    
                   $message = "Dear $f_name $l_name below is your username and password for Vehicle Registration System.\n\n
                  Your User Id : $user_id \n  
                  Your Password : $passwordd\n
                  Please use this information to login to Vehicle Registration System!!\n
                  DON'T REPLY to this email";
                  $headers = 'From: sodocityrta@gmail.com'. "\r\n". 'MIME-Version: 1.0'. "\r\n" . 'Content-type: text/html; charset=utf-8';
                  $mail = mail($e_mail, $subject, $message,$headers);
                 
                 /*if (!$mail== true) {
              echo '  <div class="alert alert-danger alert-dismissible fade show">
                     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      Failed to send email!!</div>';
            } else {*/
                    mysqli_query($conn,"insert into users_account( user_id,f_name, m_name,l_name,user_type,e_mail,phone_no,pro_image,about_me,password,status,created_by) values('$stud_id','$f_name','$m_name','$l_name','$user_type','$e_mail','$phone_no','$pro_image','$about_me','$password','$status','$created_by')")or die(mysqli_error($conn));
          
          echo '  <div class="alert alert-success alert-dismissible fade show">
                     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      New '. $user_type. ' Created successfully!!</div>';
          ?>
        <a href='print.php?empnm=<?php echo $f_name;?>&emplnm=<?php echo $m_name;?>&usrnm=<?php echo $stud_id;?>&psswdr=<?php echo $passwordd;?>' class="btn btn-success">Print</a> 
                          
                <?php 
                
                }}}                   
              }?>

              <form action="#" method="post"  enctype="multipart/form-data">
                <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="uid" name="uid" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enter user_id here" required="">
                      <label for="floatingInput">User_Id</label>
                    </div>

                <div class="row mb-3">
                  <div class="col-sm-10 text-center">
                    <button type="submit" class="btn btn-primary" name="register" >Add</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

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
                <script>  
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  

   
</script> 
</body>

</html>