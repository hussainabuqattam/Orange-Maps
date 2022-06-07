<?php

include "include/init.php";

$stmt = $connect->prepare("SELECT * FROM marker");
$data = [];
$stmt->execute();
$markers = $stmt->fetchAll();
foreach ($markers as $index => $marker) {
    $data[$marker['id']]['lat'] =  substr_replace($marker['location'], " ",strpos($marker['location'], "/"));
    $data[$marker['id']]['lng'] =  str_replace("/", "", substr($marker['location'], strpos($marker['location'], "/")));
    $data[$marker['id']]['name'] = $marker['governorate'];
}

echo json_encode($data);