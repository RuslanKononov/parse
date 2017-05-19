<?php

namespace Command;


require __DIR__.'/../..'
        . '/vendor/autoload.php';

//$img = file_get_contents('https://pp.userapi.com/c615718/v615718832/163b0/4kvVv_XA0ZY.jpg');
//var_dump($img);
//file_put_contents('/var/www/img_test.jpg', file_get_contents('https://pp.userapi.com/c615718/v615718832/163b0/4kvVv_XA0ZY.jpg'));

$csvFile = file('/var/www/data_users/ny_24_3.csv');
$data = [];
$dir = '/var/www/data_users/ny_24_3';
mkdir($dir);
foreach ($csvFile as $key => $line) {
    $data = str_getcsv($line);
//    var_dump($data);
    $userDir = $dir . $data[0];
    mkdir($userDir);
    
    file_put_contents( $userDir .'/avatar.jpg', file_get_contents($data[2]));
    $images = json_decode($data[7]);
    foreach ($images as $k => $image)
    {
        $img = str_replace('\/', '/' , $image);
            
        var_dump($img);
        
        file_put_contents( $userDir ."/$k.jpg", file_get_contents($img));
    }
}


//['id', 'name', 'avatar', 'birthday', 'city', 'languages', 'about me', 'photos']);

