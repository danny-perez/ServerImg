<?php
//*************************************************************
ini_set('max_execution_time', 600);
function curl_get($host, $referer = null){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_USERAGENT, "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.51");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_URL, $host);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $html = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);
    return $html;
}
//***************************************************************
// array {cam1, frame1} {cam2, frame2} ... {camn, framen}
$data = $_REQUEST['data'] ?? 'null';
$arr_data = json_decode($data);
//***************************************************************
foreach($arr_data as $ad){
    $res = curl_get('http://1--1.pro/index.php?cam='.$ad->cam.'&frame='.$ad->frame);
    $img_complex[] = array ('cam'=>$ad->cam, 'frame'=>$ad->frame, 'data' => $res);
}

// $fin = unserialize($res);
$result = serialize($img_complex);
echo '<pre>';
print_r($result);
echo '</pre>';

