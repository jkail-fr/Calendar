<?php
// calling session, db connection and functions
require_once ('includes/includes.php');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connect to your whislists</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<h1>Manage your whishlists</h1>
<?php
if (!empty($_POST['username']) AND !empty ($_POST['password']))
{
?>
    <h2>Your whisllist</h2>
    <ul>
        <li>list 1 + change name + delete</li>
        <li>list 2 + change name + delete</li>
        <li>... </li>
    </ul>
    <a href="createlist.php">Create a new list</a>
<?php
}
else
{
    ?>

<h2>Login to see your lists</h2>
<div class="login">
    <p>Log in to manage your whishlists</p>
    <form action="#" method="POST">
        <input type="text" placeholder="Enter your username" value="" name="username"/><br/>
        <input type="password" placeholder="Enter your password" value="" name="password"/><br/>
        <input type="submit"/>
    </form>
    <p>No account : <a href="createaccount.php">click here to create one</a></p>
</div>
<?php
}
?>


</body>
</html>

