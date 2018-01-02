<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: tampilanAwal.php"); // Redirecting To Home Page
}
?>
