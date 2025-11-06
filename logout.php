<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login page (adjust path if needed)
header("Location: login.php");
exit;
