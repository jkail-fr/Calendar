<?php
//database connect
$dbname = 'wishlist';
$dbuser = 'wishlist';
$dbhost = 'localhost';
$dbpwd = 'wishlist';
try
{
$bdd = new PDO ("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser, $dbpwd);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}