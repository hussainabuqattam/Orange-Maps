<?php
    if(isset($_GET['getAllCountry'])){
        $data = file_get_contents("layout/js/newlocation.json");
        echo $data;
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
            $data[$marker['id']]['id'] = $marker['id'];
        }
    
        echo json_encode($data);
    }
    
?>