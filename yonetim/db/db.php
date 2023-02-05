<?php
session_start();
ob_start();

GLOBAL $site_name;
$site_name = 'Almila Ambalaj Yonetim Paneli';

$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=almNew', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
