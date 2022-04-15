<?php 
session_start();

if(!isset($_SESSION['id'])){

  header('location:login.php');

}

?>
<?php

if (isset($_POST['submit'])) {

  //  email on which you would like to recevied mail
  $email_to = "abc@gmail.com";

  //  webmail on which you upload info@domainname.com
  $sender = "abc@gmail.com";


  $name = $_POST['name']; // required
  $lname = $_POST['lname']; // required
  $subject = $_POST['subject']; // required
  $message = $_POST['message']; // required
  $email = $_POST['email']; // required



  $email_message = "Below are the details of the contact form that was submitted
from www.focus4floors.nl:\n\n";
  $email_subject = "Contact Form - $subject";


  function clean_string($string)
  {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
  }

  $email_message .= "Name: " . clean_string($name) . "\n";
  $email_message .= "Last Name: " . clean_string($lname) . "\n";
  $email_message .= "Telephone: " . clean_string($telephone) . "\n";
  $email_message .= "Email: " . clean_string($email) . "\n";
  $email_message .= "Product: " . clean_string($product) . "\n";
  $email_message .= "Sort: " . clean_string($sort) . "\n";
  $email_message .= "Message: " . clean_string($message) . "\n";


  // create email headers

  $headers = 'From:' . $sender . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  $sent = mail($email_to, $email_subject, $email_message, $headers);


  if ($sent) {
    echo "<script> alert('Thank you very much we will soon get back to you')
  location.replace('contact/')
  </script>";
  } else {
    echo "<script> alert('Something was wrong please try again')
  location.replace('contact/')
  </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once('page/head.php'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require_once('page/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once('page/sidebar.php'); ?>
  <!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">
            <form action="" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>