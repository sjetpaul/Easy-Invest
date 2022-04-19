<?php 
// session_start();

// if(!isset($_SESSION['id'])){

//   header('location:login.php');

// }

?>
<?php

if (isset($_POST['contact_submit'])) {

  //  email on which you would like to recevied mail
  $email_to = "wcodr01@gmail.com";

  //  webmail on which you upload info@domainname.com
  $sender = "wcodr01@gmail.com";


  $name = $_POST['name']; // required
  $email = $_POST['email']; // required
  $subject = $_POST['subject']; // required
  $message = $_POST['message']; // required




  $email_message = "Below are the details of the contact form that was submitted
from www.focus4floors.nl:\n\n";
  $email_subject = "Contact Form - ".$subject;


  function clean_string($string)
  {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
  }

  $email_message .= "Name: " . clean_string($name) . "\n";
  $email_message .= "Email: " . clean_string($email) . "\n";
  $email_message .= "Message: " . clean_string($message) . "\n";


  // create email headers

  $headers = 'From:' . $sender . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  $sent = mail($email_to, $email_subject, $email_message, $headers);

  if ($sent) {
    echo "<script> alert('Thank you very much we will soon get back to you')
  </script>";
  
  } else {
    echo "<script> alert('Something was wrong please try again')
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
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

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
                 <button type="submit" name="contact_submit">Send Message</button>
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