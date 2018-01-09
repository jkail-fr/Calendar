<?php
// managing session, db connection, function

//Session management
//we create the session value if they exist with the $_POST

if (!empty($_POST['username']) AND !empty ($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

/*
// The system get the data sent via $_POST, compare them to the user database (function login) and if it returns "true" then it adds the values necessary in the session
function login($login,$pwd)
{
//get data from database
    $connect = $bdd->prepare('SELECT password FROM user WHERE password = :password ');
    $connect->execute(array('password' => $_POST['password']));
    $passwordDB = $connect['password'];
    if ($passwordDB = $_POST['password']) {
        $_SESSION['username'] = $login;
        $_SESSION['password'] = $pwd;
        return true;
    } else {
        return false;
    }
}

//we create the session value if they exist with the $_POST
if (!empty($_POST['username']) AND !empty ($_POST['password'])) {
    login ($_POST['username'],$_POST['password']);
}
*/

//Function : logout
function logout()
{
    // if user is login out
    if ($_POST['logout'] = 'logout') {
        session_destroy();
       return true;
    }
}
/*
function redirect()
{
    $redirection = logout();
    if ($redirection = true) {
        header('Location: index.php');
    }
}
*/