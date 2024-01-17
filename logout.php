<?php
// Start the session (if it's not already started)
session_start();

// Check if the user is logged in
if (isset($_SESSION['id'])) {
    // If the user is logged in, clear the session data to logout
    session_unset();
    session_destroy();
}

// Redirect the user to the login page or any other page after logout
header("Location: index.php");
exit();
?>
