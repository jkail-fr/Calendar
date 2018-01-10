<?php
// if user logout, we destroy the sessio ndata and redirect the user to home page
session_start();

if ($_POST['logout'] = 'logout') {
    session_destroy();
}
//if user logged in already
header('Location: ../index.php');