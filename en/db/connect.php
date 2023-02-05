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
    $site_title = $fetch['site_title_en'];
    $site_keywords = $fetch['site_keywords_en'];
    $site_description = $fetch['site_description_en'];
    $site_logo = $fetch['logo_img_en'];
    $logo_title = $fetch['logo_title_en'];
    $index_gallery_title = $fetch['index_gallery_title_en'];
    $sirket_adi_yasal = $fetch['sirket_adi_yasal_en'];
    $sirket_phone = $fetch['sirket_phone'];
    $sirket_mail = $fetch['sirket_mail'];
    $sirket_adres = $fetch['sirket_adres'];
    $footer_hakkimizda = $fetch['footer_hakkimizda_en'];
}

?>