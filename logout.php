<?php include('page/session.php'); ?>
<?php
session_destroy();
echo "<script>alert('logout Sucessfully'); location.replace('login.php')</script>"
?>
