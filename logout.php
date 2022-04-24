<?php include('page/session.php'); ?>
<?php
session_destroy();
echo "<script> location.replace('login.php')</script>";
?>
