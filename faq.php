<?php include('header.php')?>
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
<?php include('navbar.php')?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('sidebar.php')?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>1.What is the purpose of this website?</h6>
                <p>The main purpose of this website is to ease the vehicle registration and update process of the authority and assuring the security and consistency of the customers data.</p>
              </div>

              <div class="pt-2">
                <h6>2. Who can have an account to this site?</h6>
                <p>The users who are allowed to have an accont from this site are administrators, employees of the organization and customers of the organization.</p>
              </div>

              <div class="pt-2">
                <h6>3. Who is the owner of this website?</h6>
                <p>The owner of this site wolaita sodo city road transport authority, by developing this website the authority is intended to give efficient service to customers of the authority.</p>
              </div>

            </div>
          </div>

         

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How to use the website</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                      How to signup to have a customer account?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      1. Firstly, on the home page of the system click a signup button found at the left side bar.<br>
                      2. When you are redirected to the signup page fill all the information asked by the system.<br>
                      3. if you do not fill all the information needed as the system asked  the system will show you an informative error otherwise,the system will send you an email to the email address you have inserted.<br>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                      How to log in to your account?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      1. After you have received an email by the system get username and password from the email.<br>
                      2. Open the website and click on login button found at the top right side of the page.<br>
                      3. When the login page is displayed fill username and password field with your username and password send by system and click login button.<br>
                      4. If you username and password are right the system will provide you home page as your account type.<br>
                      5. If your username and password is wrong the system will show you an informative message by reading the message fix the error and try to login again.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                      What to do when password is forgotten?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      1.Click on forgot password link found at the top right side of the page.<br>
                      2.When forgot password page is displayed fill your username, email and account type then click submit button.<br>
                      3.If you don't fill the right information the system will show you informative error information, otherwise the system will show you success message and send you new password with your email address.<br>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                      How to send feedback to the system administrator?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      1.Login to the system by entering your username and password as a customer.<br>
                      2.At customer page you will find feedback link at the left sidebar click on the link.<br>
                      3.When feedback page is displayed enter you name, email and you feedback and click send message button, the system will send your message and show you success message.<br>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

         

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include('footer.php')?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>