<?php 

function dd($param) {
    print "<pre>";
    var_dump($param);
    exit;
}

function check_hotel_kinds($hotel_value , $hotel_id) {
    if ($hotel_id == $hotel_value) {
        return "checked";
    }
}


function show_hotel_from_id($hotel_id) {
    if ($hotel_id == "1") {
       return "KIKKA";

    }elseif ($hotel_id == "2") {
       return "VINTAGE";
    } elseif ($hotel_id == "3"){
       return "セブンガーデン 浅草";
    } else {
       return "^ ^b";
    }
}


?>
