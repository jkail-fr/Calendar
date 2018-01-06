<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connect to your whislists</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>Manage your whishlists</h1>
<div class="login">
    <p>Log in to manage your whishlists</p>
    <form action="#" method="POST">
        <input type="text" placeholder="Enter your username" value="" name="username"/><br/>
        <input type="password" placeholder="Enter your password" value="" name="password"/><br/>
        <input type="submit"/>
    </form>
    <p>No account : <a href="create.php">click here to create one</a></p>
</div>
<?php
var_dump($_POST);
echo $_POST['username'];

?>

</body>
</html>

