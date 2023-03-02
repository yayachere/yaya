<form action="#" class="form-horizontal" id="form_sample_1" method="post" 
           enctype="multipart/form-data">
<?php
$conn=new mysqli("localhost","yaya","admin","demosite");
                            if($conn->connect_error){
                           echo "Failed to connect!";
                           }
                     $id = $_GET["ID"];
               $result = mysqli_query($conn,"SELECT * FROM wp_swpm_members_tbl where user_name='$id'") or die(mysqli_error());  
               $rows = mysqli_fetch_array($result);    
               $f_name=$rows['first_name'];
               $m_name =$rows["last_name"];
               $email=$rows["email"];
            
            if (isset($_POST['update'])){   
    
                    $passwordd = $_POST['password'];             
                    $password=md5($passwordd);                   
      
               $query = mysqli_query($conn,"Update wp_users set user_pass='$password' where user_login='$id'")or die(mysqli_error($conn));
       if ($query == true) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="bi bi-check-circle-fill me-1"></i>
                      User Account Has Been Updated Now!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
         } else {

            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="bi bi-x-octagon-fill me-1"></i>Failed to Update user account!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
       
              }?>
                      <?php 
                                $query=mysqli_query($conn,"select * from wp_users where user_login='$id'")or die(mysqli_error($conn));
                                 $row=mysqli_fetch_array($query);
                                ?> 

              <h2> <?php echo $rows['user_login']. " ". $rows['display_name']; ?></h2>
              <h3> <?php echo $rows['user_type']; ?></h3>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $rows['user_nicename']. " ". $rows['display_name']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Account Type</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $rows['user_type']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">User_Id</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $rows['user_login']; ?> </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $row['user_status']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $rows['user_email']; ?></div>
                  </div>
                       <div class="mb-4 mt-5">
      <label for="uid" class="form-label text-dark">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enter new password here" required>
    </div>         
  <button type="submit" class="btn btn-success mt-4" 
  name="update" id="update" >Update User</button>
  <a class="btn btn-danger mt-4" href="http://localhost/demosite/edit_user/">Cancel</a>
                                       
                         </form>