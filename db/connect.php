<?php
$user = 'root';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=almNew', $user, $pass);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$run = $dbh->query("select * from settings");

while($fetch = $run->fetch()){
    $site_title = $fetch['site_title'];
    $site_keywords = $fetch['site_keywords'];
    $site_description = $fetch['site_description'];
    $site_logo = $fetch['logo_img'];
    $logo_title = $fetch['logo_title'];
    $index_gallery_title = $fetch['index_gallery_title'];
    $sirket_adi_yasal = $fetch['sirket_adi_yasal'];
    $sirket_phone = $fetch['sirket_phone'];
    $sirket_mail = $fetch['sirket_mail'];
    $sirket_adres = $fetch['sirket_adres'];
    $footer_hakkimizda = $fetch['footer_hakkimizda'];
}

?>