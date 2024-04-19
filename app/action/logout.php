<?php
session_start(); // Start the session if it's not already started
require_once '../init.php'; // Include your initialization file

// Assuming $Ouser is your user object, you can call its logout method
if (isset($_SESSION['user_id'])) {
    $Ouser->logOut();
    unset($_SESSION['user_id']); // Unset the user_id session variable
    session_destroy(); // Destroy the session
    // Redirect to wherever you want after logout
    header("Location: index.php"); // Redirect to index.php or any other page
    exit(); // Make sure to exit after redirection
} else {
    // Redirect to login page or any other page if user is not logged in
    header("Location: login.php");
    exit();
}
?>
