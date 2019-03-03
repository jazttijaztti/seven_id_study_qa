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
       return "well";
    } elseif ($hotel_id == "3"){
       return "vintage";
    } else {
       return "^ ^b";
    }
}

//indexs.cssは必ず読み込まれる。
//それ以外のcssを読みたかったら配列の値にファイル名を入れる
function show_common_css($param = false){ 
  $CI =& get_instance();
  $CI->load->view('event/common/index.css');
  if ($param != false) {
     foreach ($param as $key => $val) {
        $CI->load->view('event/common/'.$val.'.css');
     }

  }
}

//indexs.jsは必ず読み込まれる。
//それ以外のjsを読みたかったら配列の値にファイル名を入れる
function show_common_js($param = false){ 
  $CI =& get_instance();
  $CI->load->view('event/common/index.js');
  if ($param != false) {
     foreach ($param as $key => $val) {
        $CI->load->view('event/common/'.$val.'.js');
     }

  }
}

//headerとナビゲーションをロードする
function show_header($param = false){ 
  $CI =& get_instance();
  $CI->load->view('event/common/header');
}

//イベント画像が登録されているかチェックする
function show_event_images($param){
  if(empty($param)){
    $res = base_url('static/sevenevent/img/event_photo.jpg');
    return $res;
  }else{
    $res = base_url('uploads/event/' . $param );
    return $res;
  }
}

function show_event_link($param){
  if(empty($param)){
    $res = '#';
    return $res;
  }else{
    $res = $param;
    return $res;
  }
}

?>
