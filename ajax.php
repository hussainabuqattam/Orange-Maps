<?php

include "include/init.php";

$stmt = $connect->prepare("SELECT * FROM marker");
$data = [];
$stmt->execute();
$markers = $stmt->fetchAll();
foreach ($markers as $index => $marker) {
    $data[$index]['lat'] =  substr_replace($marker['location'], " ",strpos($marker['location'], "/"));
    $data[$index]['lng'] =  str_replace("/", "", substr($marker['location'], strpos($marker['location'], "/")));
    $data[$index]['name'] = $marker['governorate'];
}

echo json_encode($data);