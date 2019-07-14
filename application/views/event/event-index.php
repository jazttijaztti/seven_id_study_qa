<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url('static/sevenevent/css/seven.css') ?>" rel="stylesheet">
<link href="<?= base_url('static/sevenevent/css/reset.css') ?>" rel="stylesheet">
<link href="<?=base_url('static/sevenevent/css/itiran.css') ?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('static/sevenevent/slick/slick/slick.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('static/sevenevent/slick/slick/slick-theme.css') ?>">
<link href="https://fonts.googleapis.com/css?family=Rasa:400,700" rel="stylesheet">
<script type="text/javascript" src="<?= base_url('static/sevenevent/slick/slick/slick.min.js') ?> "></script>
<script src="<?= base_url('static/sevenevent/jquery.rotate-master/jquery.rotate.js') ?> "></script>
<script src="<?= base_url('static/sevenevent/js/seven.js') ?>"></script>
<script>

$(function(){



$('#tab-1').click( function(){
  $('.reserve').css('display', 'none');
});

$('#tab-2').click( function(){
  $('.reserve').css('display', 'block');
});


});

</script>
<style>
  .reserve{
    display: none;
  }

.header{
  display: block;
}
.well_event_icon{
  background: black;
  color: #fff;
    border:solid 2px;
    height: 50px;
    width: 50px;
    text-align: center;
    vertical-align: middle;
    padding-top: 15px;
    font-size: 15px;
}

.kikka_event_icon{
  background: #fff;
  color: black;
    border:solid 2px;
    height: 50px;
    width: 50px;
    text-align: center;
    vertical-align: middle;
    padding-top: 15px;
    font-size: 15px;
}

.well_finished_event_icon{
  background: black;
  color: #fff; 
    border:solid 2px;
    height: 50px;
    width: 50px;
    text-align: center;
    vertical-align: middle;
    padding-top: 15px;
    z-index: 2;
    position: absolute;
    right:-15px;
    top:-15px;
    font-size: 15px;
}

.kikka_finished_event_icon{
  background: #fff;
  color: black; 
    border:solid 2px;
    height: 50px;
    width: 50px;
    text-align: center;
    vertical-align: middle;
    padding-top: 15px;
    z-index: 2;
    position: absolute;
    right:-15px;
    top:-15px;
    font-size: 15px;
}

a.disabled{
    pointer-events: none;
}
</style>
</head>
<body>
<div class="all">


</script>
</head>
<body>


    <div class="header">
        <ul>
            <li><a style="color: black;" href="<?= base_url('event/index'); ?>">TOP</a></li>
            <li style="color: black;"><a style="color: black;" href="#event">EVENT</a></li>
            <a href="<?= base_url('event/contact'); ?>"><li class="header__contact">CONTACT</li></a>
            <li><a href="#top">TOP</a></li>
            <li><a href="#event">EVENT</a></li>
            <li><a href="#space">SPACE</a></li>
            <li><a href="#system">SYSTEM</a></li>
            <li><a href="#cafe">CAFE</a></li>
            <li><a href="#access">ACCESS</a></li>
            <a href=""><li class="header__contact">CONTACT</li></a>
        </ul>
    </div><!--header-->








    <div id="event" class="clearfix">
        <div class="h2__title">
            <h2>EVENT</h2>
        </div><!--h2__title-->
        <div class="block">
        <?php foreach ($event as $key => $val){ ?>
            <a class="<?= show_event_link_class($val['link']);  ?>" href="<?= show_event_link($val['link']); ?>">
	            <div class="event__block__contents clearfix">
                <div class="event__img">
	                	<div style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;" class="event__img_pic"></div>
                </div><!--event__img-->
                <div class="event__content">
                    <div class="event__content1">
                        <div class="day">
                            <p><?= $val['eventdate'] ?></p>
                        </div><!--day-->
                        <div class="">
                            <p class="<?= hotel_class($val['hotel_id']); ?>"><?= show_hotel_from_id($val['hotel_id']) ?></p>
                        </div><!--kikka__icon-->
                    </div><!--event__content1-->
                    <div class="event__content2">
                        <h3><?= $val['title'] ?></h3>
                    </div><!--event__content2-->
                    <div class="event__content3">
                        <p>
                          <?= $val['description'] ?>
                    　　</p>
                    </div><!--event__content3-->
                </div><!--event__content-->
            </div></a><!--event__block__contents-->
          <?php } ?>


        </div><!--block-->
        <div class="viewAll">
	  <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/4/SEVENGARDEN-plus2-1562931349.png">
          <p class="View all">
	</div>
    </div><!--event-->




    <div id="finished" class="clearfix">
        <div class="finished__title">
            <h2>FINISHED EVENT</h2>
        </div><!--finished__title-->
        <?php $count = count($finished_event);  ?>
        <div class="finished__block">
	        <ul class="finished__list">   
                <?php foreach ($finished_event as $key => $val) { ?>
                <?php if($key%2 == 0 || $key == 0) { ?>
		        <li class="finished__contents">
		        	<div class="<?= finished_hotel_class($val['hotel_id']); ?>">
	              <p><?= show_hotel_from_id($val['hotel_id']) ?></p>
	            </div>
	            <ul class="finished__pic_list Flist01">
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link <?= show_event_link_class($val['link']);  ?> " style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
                    </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link <?= show_event_link_class($val['link']);  ?> " style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link <?= show_event_link_class($val['link']);  ?> " style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
	            </ul>
	            <a href="" class="finished__link" class="<?= show_event_link_class($val['link']);  ?>" >
	            <a href="" class="finished__link">
		            
                        <h3 class="finished__contents_title">
                      <?= $val['title'] ?>
		            </h3>
		            <p class="finished__contents_text">
                      <?= $val['description'] ?>
		            </p>
	            </a>
		        </li>
                <?php } ?>
                <?php } ?>

                <?php foreach ($finished_event as $key => $val) { ?>
                <?php if($key%2 !==0) { ?>
		        <li class="finished__contents">
		        	<div class="<?= finished_hotel_class($val['hotel_id']); ?>">
                <p><?= show_hotel_from_id($val['hotel_id']); ?></p>
              </div>
	            <ul class="finished__pic_list Flist02">
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link <?= show_event_link_class($val['link']); ?> " style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link <?= show_event_link_class($val['link']);  ?>" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']);  ?>" class="finished__pic_link <?= show_event_link_class($val['link']);  ?> " style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
	            </ul>
	            <a href="" class="finished__link <?= show_event_link_class($val['link']);  ?>">
		            <h3 class="finished__contents_title">
			            <?= $val['title'] ?>
		            </h3>
		            <p class="finished__contents_text">
                      <?= $val['description'] ?>
		            </p>
	            </a>
		        </li>
                <?php } ?>
                <?php } ?>
	        </ul>
        </div>
    </div><!--finished-->
    <div class="footer">
        <div class="footer__left">
            <p>SEVEN GAEDEN.All Rights Rserved</p>
        </div><!--footer__left-->
        <div class="footer__right">
            <a href="https://seven-garden.com/ja/hotel/SEVENGARDEN"><img src="<?= base_url('static/sevenevent/img/logo_well.png') ?>"></a>
            <a href="https://seven-garden.com/ja/hotel/KIKKA"><img src="<?= base_url('static/sevenevent/img/logo_kikka.png') ?>"></a>
        </div><!--footer__right-->
    </div><!--footer-->
</div><!--all-->
</body>
</html>
