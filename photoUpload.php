<?php
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);

    $photoname = uniqid().'.jpeg';
    $folderPath = "kebele_id_image/";
    $file = $folderPath . $photoname;

    $result = file_put_contents($file, $binary_data);


    if($result) {
        echo 'success';

    } else {
        echo die('Could not save image! check file permission.');
    }
}