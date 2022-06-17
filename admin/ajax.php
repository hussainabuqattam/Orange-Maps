<?php
    include "include/init.php";

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

    if(isset($_GET['locationid'])){
        $location = $_GET['locationid'];
        $stmt = $connect->prepare("SELECT * FROM marker WHERE id = ?");
        $stmt->execute([$location]);
        $locationData = $stmt->fetch();

        $data['location'] = $locationData['location'];
        $data['governorate'] = $locationData['governorate'];
        $data["description"] = $locationData['description'];
        $data['orange_section_id'] = $locationData['orange_section_id'];
        $data['full_address'] = $locationData['full_address'];

        $data['lat'] = $lat = substr_replace($locationData['location'], " ", strpos($locationData['location'], "/"));
        $data['lng'] = $lng = str_replace("/", "", substr($locationData['location'], strpos($locationData['location'], "/")));

        // var_dump($lat, $lng);die;

        $data['AllCity'] = file_get_contents("layout/js/newlocation.json");


        echo json_encode($data);
    }


    if(isset($_POST['marker_id']))
    {
        $stmt = $connect->prepare("DELETE FROM marker WHERE id = ?");
        $result = $stmt->execute([$_POST['marker_id']]);
        if($result == true){
            echo true;
        }else{
            echo false;
        }
    }
    
?>