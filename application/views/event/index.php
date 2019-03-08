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



</script>
</head>
<body>
<div class="all">
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">

        <h2>SEVEN PLACE</h2>
        <ul>
            <li class="back1"><a href="#top">TOP</a></li>
            <li class="back1"><a href="#event">EVENT</a></li>
            <li><a href="#finished">FINISHED EVENT</a></li>
            <li class="back1"><a href="#space">SPACE</a></li>
            <li class="back1"><a href="#system">SYSTEM</a></li>
            <li class="back1"><a href="#cafe">CAFE</a></li>
            <li class="back1"><a href="#access">ACCESS</a></li>
            <a href=""><li class="back2" >CONTACT</li></a>
        </ul>
      </div>
  </div>


    <div class="header">
        <ul>
            <li><a href="#top">TOP</a></li>
            <li><a href="#event">EVENT</a></li>
            <li><a href="#space">SPACE</a></li>
            <li><a href="#system">SYSTEM</a></li>
            <li><a href="#cafe">CAFE</a></li>
            <li><a href="#access">ACCESS</a></li>
            <a href=""><li class="header__contact">CONTACT</li></a>
        </ul>
    </div><!--header-->




    <div id="top" style="background: url(<?= base_url('static/sevenevent/img/sample_pic.jpg')?> ) center center no-repeat;background-size: cover;">
<!--         <h1>SEVEN<br>PLACE</h1> -->
				<div class="top__main">
					<h1 class="top__title">
						<img src="<?= base_url('static/sevenevent/img/logo_place.png') ?>">
					</h1>
	        <div class="top__logo">
	          <a href=""><img src="<?= base_url('static/sevenevent/img/logo_kikka.png') ?>"></a>
	          <a href=""><img src="<?= base_url('static/sevenevent/img/logo_well.png')?>"></a>
	        </div><!--top__logo-->
				</div>
        <div class="menu">
            <ul>
                <li><a href="#top">TOP</a></li>
                <li><a href="#event">EVENT</a></li>
                <li><a href="#finished">FINISHED EVENT</a></li>
                <li><a href="#space">SPACE</a></li>
                <li><a href="#system">SYSTEM</a></li>
                <li><a href="#cafe">CAFE</a></li>
                <li><a href="#access">ACCESS</a></li>
                <li class="header__contact"><a href="">CONTACT</a></li>
        </div><!--menu-->
    </div><!--top-->




    <div id="event" class="clearfix">
        <div class="h2__title">
            <h2>EVENT</h2>
        </div><!--h2__title-->
        <div class="block">
        <?php foreach ($event as $key => $val){ ?>
            <a href="<?= show_event_link($val['link']); ?>">
	            <div class="event__block__contents clearfix">
                <div class="event__img">
	                	<div style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;" class="event__img_pic"></div>
                </div><!--event__img-->
                <div class="event__content">
                    <div class="event__content1">
                        <div class="day">
                            <p><?= $val['eventdate'] ?></p>
                        </div><!--day-->
                        <div class="kikka__icon">
                            <p><?= show_hotel_from_id($val['hotel_id']) ?></p>
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
		        	<div class="well">
	              <p><?= show_hotel_from_id($val['hotel_id']) ?></p>
	            </div>
	            <ul class="finished__pic_list Flist01">
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
                    </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
	            </ul>
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
		        	<div class="kikka">
                <p><?= show_hotel_from_id($val['hotel_id']); ?></p>
              </div>
	            <ul class="finished__pic_list Flist02">
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']); ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
		            <li class="finished__pic_item">
		            	<a href="<?= show_event_link($val['link']);  ?>" class="finished__pic_link" style="background: url(<?= show_event_images($val['image_name']); ?>) center center no-repeat;background-size: cover;"></a>
		            </li>
	            </ul>
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
	        </ul>
        </div>
    </div><!--finished-->
    



    <div id="space" class="clearfix">
        <div class="h2__title">
            <h2>SPACE</h2>
        </div><!--h2__title-->
        <div class="tabs">
            <input id="tab-1" type="radio" name="tab-radio" checked>
            <label class="tab-label" for="tab-1">well</label>
            <input id="tab-2" type="radio" name="tab-radio">
            <label class="tab-label tab2" for="tab-2">kikka</label> 
            <div class="tab-content tab-1-content">
                <ul class="space__slider">
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/space_photo.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/space_photo.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/space_photo.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
                </ul><!--space__slider-->
                <div class="flex">
                    <div class="space__left">
                        <h3>浅草駅徒歩2分<br>
                        実質￥0円のレンタルスペース</h3>
                        <div class="space__left__content1">
                            <p>1階のカフェwellが18:00からは￥0のレンタルスペースに早変わり。この場所で行われるイベントの共通テーマは「JOY」。パーティ・パフォーマンス・Eスポーツなど様々なシーンでご利用いただける実質￥0のレンタルスペースです。
                            </p>
                        </div><!--space__left__content1-->
                        <div class="space__left__content2">
                            <h4>設備</h4>
                            <ul>
                                <li>プロジェクター</li>
                                <li>ワイヤレスマイク</li>
                                <li>スピーカー</li>
                                <li>ブランケット</li>
                                <li>Free　Wifi</li>
                                <li>コンセント</li>
                                <li>キッチン</li>
                                <li>ドリンカー</li>
                                <li>カトラリー</li>
                            </ul>
                        </div><!--space__left__content2-->
                    </div><!--spsce__left-->
                    <div class="space__right">
                        <img src="img/floor_well.png" alt="">
                    </div><!--space__right-->
                </div><!--flex-->
            </div>
            <div class="tab-content tab-2-content">
                <ul class="space__slider2">
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/1.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
	                <li>
                		<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/1.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
	                <li>
                		<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/1.jpg) center center no-repeat;background-size: cover;"></div>
	                </li>
                </ul><!--space__slider-->
                <div class="flex">
                    <div class="space__left">
                        <h3>浅草駅徒歩2分<br>
                            実質￥0円のレンタルスペース</h3>
                        <div class="space__left__content1">
                            <p>1階のカフェwellが18:00からは￥0のレンタルスペースに早変わり。この場所で行われるイベントの共通テーマは「JOY」。パーティ・パフォーマンス・Eスポーツなど様々なシーンでご利用いただける実質￥0のレンタルスペースです。
                            </p>
                        </div><!--space__left__content1-->
                        <div class="space__left__content2">
                            <h4>設備</h4>
                            <ul>
                                <li>プロジェクター</li>
                                <li>ワイヤレスマイク</li>
                                <li>スピーカー</li>
                                <li>ブランケット</li>
                                <li>Free　Wifi</li>
                                <li>コンセント</li>
                                <li>キッチン</li>
                                <li>ドリンカー</li>
                                <li>カトラリー</li>
                            </ul>
                        </div><!--space__left__content2-->
                    </div><!--spsce__left-->
                    <div class="space__right">
                        <img src="<?= base_url('img/floor_well.png') ?>" alt="">
                    </div><!--space__right-->
                </div><!--flex-->
            </div>
        </div>
    </div><!--space-->





    <div id="system" class="clearfix">
        <div class="h2__title">
            <h2>SYSTEM</h2>
        </div><!--h2__title-->
        <div class="tabs2">
            <input id="tab2-1" type="radio" name="tab2-radio" checked>
            <label class="tab2-label" for="tab2-1">well</label>
            <input id="tab2-2" type="radio" name="tab2-radio">
            <label class="tab2-label tab2" for="tab2-2">kikka</label> 
            <div class="tab2-content tab2-1-content">
                <ul class="space__slider">
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/mocihkomi0305.jpeg) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/mocihkomi03052.jpeg) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/mocihkomi03053.jpeg) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/mocihkomi03054.jpeg) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
                </ul><!--space__slider-->
            </div>
            <div class="tab2-content tab2-2-content">
                <ul class="space__slider2">
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/KIKKA_event0304_13.png) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/KIKKA_event0304_14.png) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/KIKKA_event0304_15.png) center center no-repeat;background-size: cover;"></div>
	                </li>
	                <li>
	                	<div class="space__slider_pic" style="background: url(../../../static/sevenevent/img/KIKKA_event0304_16.png) center center no-repeat;background-size: 99% 350px;"></div>
	                </li>
                </ul><!--space__slider-->
            </div><!--tab2-content-->
        </div><!--tab2-->
        <div class="reserve">
            <a href="" target="_blank"><p>空き状況の確認</p></a>
        </div><!--reserve-->
    </div><!--system-->
    



    <div id="cafe" class="clearfix">
        <div class="h2__title">
            <h2>CAFE</h2>
        </div><!--h2__title-->
        <div class="cafe__contents">
            <h3>ふんわり記事と盛りだくさんフルーツのフレンチトースト専門店</h3>
            <p>wellの7:30-10:00はモーニング、10:00-18:00はランチ・カフェタイム営業をしております。オレンジを基調としたスタイリッシュな内装と、ゆったりとしたリラックス空間でフレンチトーストやスペシャリティーコーヒーを楽しむことができます。イベント利用以外にもお気軽に遊びに来てください。</p>
            <div class="flex">
            <div class="cafe__menu">
                <ul>
                    <li>プレーン</li>
                    <li>ミックスベリー</li>
                    <li>焼きりんご</li>
                    <li>メープルオレンジ</li>
                    <li>バナナショコラ</li>
                    <li>チーズ＆ソーセージ</li>
                </ul>
            </div><!--cafe__menu-->
            <div class="cafe__price">
                <ul>
                    <li>￥680</li>
                    <li>￥880</li>
                    <li>￥880</li>
                    <li>￥880</li>
                    <li>￥880</li>
                    <li>￥880</li>
                </ul>
            </div><!--cafe__price-->
        </div><!--flex-->

            <div class="cafe__logo">
                <img src="<?= base_url('static/sevenevent/img/logo_well_b.png') ?>" class="cafe__logo_img">
                <a href="https://www.instagram.com/well_asakusa_cafe/" class="cafe__logo_insta"><img src="<?= base_url('static/sevenevent/img/insta.png') ?>"></a>
            </div><!--cafelogp-->
        </div><!--cafe__contents-->
    </div><!--cafe-->



     <div id="access">
        <div class="h2__title">
            <h2>ACCESS</h2>
        </div><!--h2__title-->
        <div class="block">
            <div class="flex2">
                <div class="access__block">
                    <img src="<?=base_url('static/sevenevent/img/access_well.jpg')?>">
                    <div class="access__logo">
                        <img src="<?= base_url('static/sevenevent/img/logo_well_b.png') ?>" class="access__logo_img">
                        <div class="map">
                            <a href="https://www.instagram.com/well_asakusa_cafe/" class="access__logo_insta"><img src="<?= base_url('static/sevenevent/img/insta.png') ?>"></a>
                            <a href="https://goo.gl/maps/P9rAgP9bGdv" target="_blank" class="access__logo_map"><img src="<?= base_url('static/sevenevent/img/map_o.png') ?>"></a>
                        </div><!--map-->
                    </div><!--access__logo-->
                    <div class="access__content">
                        <h3>SEVEN GAEDEN (1F well)</h3>
                        <p>〒111-0032　東京都台東区浅草1-34-2</p>
                        <p>Mail: sevengarden@7garden.co.jp</p>
                        <p>Tell: 03-5830-7140</p>
                        <p>イベント利用可能時間：18:00-23:00</p>
                        <p>最寄り駅：銀座線浅草駅徒歩2分・浅草線浅草駅徒歩5分</p>
                    </div><!--access__content-->
                </div><!--access__block-->
                <div class="access__block">
                    <img src="<?= base_url('static/sevenevent/img/access_kikka.jpg') ?>">
                    <div class="access__logo">
                        <img src="<?= base_url('static/sevenevent/img/logo_kikka_c.png')?>" class="access__logo_img"> 
                        <div class="map">
                            <a href="https://www.instagram.com/hostel_kikka/" class="access__logo_insta"><img src="<?= base_url('static/sevenevent/img/insta.png') ?>"></a>
                            <a href="https://goo.gl/maps/LYJZfrDJbAr" target="_blank" class="access__logo_map"><img src="<?= base_url('static/sevenevent/img/map_g.png') ?>"></a>
                        </div><!--map2-->
                    </div><!--access__logo-->
                    <div class="access__content">
                        <h3>kikka (B1F)</h3>
                        <p>〒101-0032　東京都千代田区東神田3-3-3</p>
                        <p>Mail: kikka@7garden.co.jp</p>
                        <p>Tell: 03-5825-4806</p>
                        <p>イベント利用可能時間：　18:00-23:00</p>
                        <p>最寄り駅： 総武線馬喰町駅徒歩3分・新宿線馬喰横山駅徒歩5分・浅草線東日本橋駅徒歩7分・日比谷線小伝馬町駅徒歩4分</p>
                    </div><!--access__content-->
                </div><!--access__block-->
            </div><!--flex-->
            <a href="" target="_blank">
                <div class="access__contact">
                    <p>CONTACT</p>
                </div><!--access__contact-->
            </a>
        </div><!--block-->
    </div><!--acces-->



    <div class="footer">
        <div class="footer__left">
            <p>SEVEN GAEDEN.All Rights Rserved</p>
        </div><!--footer__left-->
        <div class="footer__right">
            <a href=""><img src="<?= base_url('static/sevenevent/img/logo_well.png') ?>"></a>
            <a href=""><img src="<?= base_url('static/sevenevent/img/logo_kikka.png') ?>"></a>
        </div><!--footer__right-->
    </div><!--footer-->
</div><!--all-->
</body>
</html>
