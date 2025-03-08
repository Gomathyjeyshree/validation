<?php
session_start();
session_destroy();  // Destroy session
unset($_SESSION['sno']); // Unset session variables
header("Location: index.php");
exit();
?>