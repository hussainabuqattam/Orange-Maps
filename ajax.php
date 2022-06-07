<?php

include "include/init.php";



if(isset($_GET['locationid'])){
    $location = $_GET['locationid'];
    $stmt = $connect->prepare("SELECT * FROM marker WHERE id = ?");
    $stmt->execute([$location]);
    $locationData = $stmt->fetch();

    $data["image1"] = $locationData['image1'];
    $data["image2"] = $locationData['image2'];
    $data["image3"] = $locationData['image3'];
    $data["image4"] = $locationData['image4'];
    $data["image5"] = $locationData['image5'];
    $data["image6"] = $locationData['image6'];
    $data["description"] = $locationData['description'];

    echo json_encode($data);
}

if(isset($_GET['getAllLocation'])) {

    $stmt = $connect->prepare("SELECT * FROM marker");
    $data = [];
    $stmt->execute();
    $markers = $stmt->fetchAll();
    foreach ($markers as $index => $marker) {
        $data[$marker['id']]['lat'] = substr_replace($marker['location'], " ", strpos($marker['location'], "/"));
        $data[$marker['id']]['lng'] = str_replace("/", "", substr($marker['location'], strpos($marker['location'], "/")));
        $data[$marker['id']]['name'] = $marker['governorate'];
    }

    echo json_encode($data);
}

if(isset($_GET['id'])){
    if(!empty($_GET['id'])) {
        $stmt = $connect->prepare("SELECT * FROM marker WHERE orange_section_id IN ?");
        $stmt->execute([$_GET['id']]);
    }else{
        $stmt = $connect->prepare("SELECT * FROM marker");
        $stmt->execute();
    }
    $markers = $stmt->fetchAll();
    $data = [];

    foreach ($markers as $index => $marker) {
        $data[$marker['id']]['lat'] = substr_replace($marker['location'], " ", strpos($marker['location'], "/"));
        $data[$marker['id']]['lng'] = str_replace("/", "", substr($marker['location'], strpos($marker['location'], "/")));
        $data[$marker['id']]['name'] = $marker['governorate'];
    }

    echo json_encode($data);
}