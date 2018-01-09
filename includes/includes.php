<?php
// managing session, db connection, function

//Session management

//we create the session value if they exist with the $_POST
if (!empty($_POST['username']) AND !empty ($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}


//Function : logout
function logout()
{
    // if user is login out
    if ($_POST['logout'] = 'logout') {
        session_destroy();
        header('Location: index.php');
    }
}

