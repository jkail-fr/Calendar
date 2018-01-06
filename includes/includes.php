<?php
// managing session, db connection, function

//Session management
session_start();
if (!empty($_POST['username']) AND !empty ($_POST['password']))
{
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

//Function : logout
function logout()
{
    // if user is login out
    if ($_POST['logout'] = 'logout')
    {
        session_destroy();
    }
}