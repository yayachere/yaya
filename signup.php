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
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
          <li class="breadcrumb-item active">Sign Up</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fill Sign Up Form</h5>
 <?php

                                include('dbcon.php');
             function test_input($data) {
                          $data = trim($data);
                          $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                          return $data;
                              }                         
                                $error=0;
$fname =$mname =$lname =$fullname =$address =$email =$phone =$age =$gender =$image_name ="";
                                   
                if (isset($_POST['enter'])){ 
                    $fname = test_input(ucfirst($_POST['fname']));
                    $mname = test_input(ucfirst($_POST['mname']));
                    $lname = test_input(ucfirst($_POST['lname']));
                    $fullname = $fname."".$mname.''.$lname;
                    $address = test_input(ucfirst($_POST['address']));
                    $email = test_input($_POST['email']);
                    $phone = test_input($_POST['phone']);
                    $age = test_input($_POST['age']);
                    $gender = $_POST['gender'];
                    $tw = date('A');
                   if ($tw == "AM") {
                     $signup_on = date("Y-m-d h:i:s");
                   }else {
                    $d = strtotime("+0 Hours");                                
                   $signup_on = date("Y-m-d H:i:s", $d);

                   }


                   

                        // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
                          
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            <i class="bi bi-info-circle-fill me-1"></i>
                    <strong>Failed! </strong>Only letters and white space allowed for name!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                        // check if email has a valid format
                        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-x-octagon-fill me-1"></i>
                            <strong>Error! </strong>Invalid Email format!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                       
                        }else{

                                $query = "SELECT * FROM customer_signup WHERE fname='$fname' && lname= '$lname' && email = '$email'";
                                $result = mysqli_query($conn,$query)or die(mysqli_error());
                                $row= mysqli_fetch_array($result);
                                $em = "SELECT * FROM customer_signup WHERE email = '$email'";
                                $res = mysqli_query($conn,$em)or die(mysqli_error());

                if(mysqli_num_rows($result) >= 1)  {
                 
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            <i class="bi bi-info-circle-fill me-1"></i>
                    <strong>Failed! </strong>There is an account with this name and email!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';

                                
                }elseif (mysqli_num_rows($res) >= 1) {

                  echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <i class="bi bi-info-circle-fill me-1"></i>
                      <strong>Failed! </strong>This Email Address Already Exists Please Try Another!                            
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';

                }
              
                else {
                   $image = $_FILES['kebele_id']['tmp_name'];                  
                   if ($image=="") {
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <i class="bi bi-info-circle-fill me-1"></i>
                      <strong>Failed! </strong>Please Insert kebele_id Image!                            
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                $error = 1;                                      
                           }
                  else {        
                    $image_name = $_FILES['kebele_id']['name'];
                    $image_size = getimagesize($_FILES['kebele_id']['tmp_name']);
                    $target_dir = "Uploads/";
                    $target_file = $target_dir . basename($_FILES["kebele_id"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $width = $image_size[0];
                    $height = $image_size[1];
                    $image_type = $_FILES['kebele_id']['type'];
                    $image_error = $_FILES['kebele_id']['error']; 

                    if($image_size==FALSE && $error ==0 ){
 
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <i class="bi bi-info-circle-fill me-1"></i>
                      <strong>Failed! </strong>kebele_id you have Inserted is not an image.              
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                      $error = 1;
                    }
                    else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

              echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <i class="bi bi-info-circle-fill me-1"></i>
                      <strong>Failed! </strong>Only<strong>JPG, PNG, JPEG AND GIF</strong> file formats are allowed!!              
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                      $error = 1;
                    }
                  else if($width < 500 && $height < 500){

              echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <i class="bi bi-info-circle-fill me-1"></i>
                      <strong>Failed! </strong>Image dimension must be greater than 500 x 500.              
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                      $error = 1;
                    }
                    else if($image_error > 0 && $error == 0){

              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-x-octagon-fill me-1"></i>
                            <strong>Error! </strong>There is error in uploading an kebele_id.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                      $error = 1;
                    }
                    else if($error == 0){

                  $qry = "INSERT INTO customer_signup(fname,mname,lname,address,email,phone,kebele_id,age,gender,signup_on) values('$fname','$mname','$lname','$address','$email','$phone','$image_name','$age','$gender','$signup_on')"or die(mysqli_error( $conn));
                  mysqli_query($conn,$qry)or die(mysqli_error($conn));
                  if(move_uploaded_file($image,"Uploads/".$image_name)) {
                    $source = $target_file;
                    $dest = $source;
                    $size = getimagesize($source);
                    $width = $size[0];
                    $height = $size[1];
                    $rwidth = 1000;
                    $rheight = 700;
                    if ($imageFileType =='jpeg' || $imageFileType == 'jpg') {           
                    $original = imagecreatefromjpeg($source);
                    $resized = imagecreatetruecolor($rwidth, $rheight);
                    imagecopyresampled($resized,$original, 0, 0, 0, 0, $rwidth, $rheight, $width, $height);
                    imagejpeg($resized, $dest);
                    }elseif ($imageFileType =='png') {
                    $original = imagecreatefrompng($source);
                    $resized = imagecreatetruecolor($rwidth, $rheight);
                    imagecopyresampled($resized,$original, 0, 0, 0, 0, $rwidth, $rheight, $width, $height);
                    imagepng($resized, $dest);
                  }elseif ($imageFileType =='gif') {
                    $original = imagecreatefromgif($source);
                    $resized = imagecreatetruecolor($rwidth, $rheight);
                    imagecopyresampled($resized,$original, 0, 0, 0, 0, $rwidth, $rheight, $width, $height);
                    imagegif($resized, $dest);
                  }

                  }

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-1"></i>
                      <strong>Sent!</strong> Your Sign Up Completed Successfully!<br>
                    You Will Receive A Notification on Your Email Address When Your Account is Activated.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                    
                  $fname =$mname =$lname =$fullname =$address =$email =$phone =$age =$gender =$image_name ="";
                            
                            }}}}}  
?>

              <!-- Sign Up Form -->
              <form method="post" action="#" class="row g-3"enctype="multipart/form-data">

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name:" value="<?php echo $fname;?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your first name" required>
                    <label for="floatingName">First Name:</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name:" value="<?php echo $mname;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your middle name" required="">
                    <label for="floatingName">Middle Name:</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name:" value="<?php echo $lname;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your last name" required>
                    <label for="floatingName">Last Name:</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address:" value="<?php echo $address;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your address here" required>
                    <label for="floatingName">Address:</label>
                  </div>
                </div>
                 <div class="col-md-12">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address:" value="<?php echo $email;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your email address here" required>
                    <label for="floatingName">Email Address:</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number:" value="<?php echo $phone;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your phone number here" required="">
                    <label for="floatingName">Phone Number:</label>
                  </div>
                </div>
                
                 <div class="col-md-12">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="age" name="age" min = "18"placeholder="Enter Your Age:" value="<?php echo $age;?>"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fill your age here" required>
                    <label for="floatingName">Age:</label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="pt-1">
                          <h6>Kebele Id:</h6>
                          <input type="file" class="form-control mt-4" name="kebele_id" id="kebele_id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enter your Kebele id card image" />
                        </div>
                </div>
<fieldset class="row mb-3 mt-3">
                  <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female"
                      value="Female"data-bs-toggle="tooltip" data-bs-placement="right" title="Female" checked>
                      <label class="form-check-label" for="gender">
                        Female
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male"
                       value="Male"data-bs-toggle="tooltip" data-bs-placement="right" title="Male">
                      <label class="form-check-label" for="gender">
                        Male
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                
           
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="enter">Signup</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                <a href="login.php">Already have an account?</a>
              </form><!-- End floating Labels Form -->

            </div>
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