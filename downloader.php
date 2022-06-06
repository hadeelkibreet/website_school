<?php

// function getVideoDownloadLink($video_id){ 
 
    $ch = curl_init(); 
 
    curl_setopt($ch, CURLOPT_URL, 'https://dl.ybm.pw/api/'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'id='.$video_id.'&f=mp4&t=4e6a49355a5455334d6d4d3d'); 
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); 
 
    $headers = array(); 
    $headers[] = 'Content-Type: application/x-www-form-urlencoded'; 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
 
    $result = curl_exec($ch); 
    if (curl_errno($ch)) { 
        echo 'Error:' . curl_error($ch); 
    } 
 
    curl_close($ch); 
 
    $arr = json_decode( $result, true); 
 
    // return $arr["downloadUrl"]; 
 
// }





// $downloadURL = urldecode($_GET['link']);
// $type = urldecode($_GET['type']);
// $title = urldecode($_GET['title']);
// $fileName = $title.'.'.$type;

$downloadURL =  $arr["downloadUrl"];
$type = urldecode($_GET['type']);
$title = urldecode($_GET['title']);
$fileName = $title.'.'.$type;


if (!empty($downloadURL) && substr($downloadURL, 0, 8) === 'https://') {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment;filename=\"$fileName\"");
    header("Content-Transfer-Encoding: binary");

    readfile($downloadURL);

}

?>
