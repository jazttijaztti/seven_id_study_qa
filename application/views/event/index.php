<!DOCTYPE HTML>
<html>
<head>

<meta charaset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php show_common_css(); ?>

<?php show_common_js(); ?>
<script>

</script>


</head>
<body>
<div class="all">
  <?php show_header(); ?>


    <div id="top">
        <h1>SEVEN<br>PLACE</h1>
        <div class="top__logo">
            <div>
                <a href=""><img src="<?= base_url()?>static/sevenevent/img/logo_kikka.png"></a>
            </div>
            <div>
                <a href=""><img src="<?= base_url()?>static/sevenevent/img/logo_well.png"></a>
            </div>
        </div><!--top__logo-->
        <div class="menu">
            <ul>
                <li><a href="#top">TOP</a></li>
                <li><a href="html/event.html">EVENT</a></li>
                <li><a href="html/finished.html">FINISHED EVENT</a></li>
                <li><a href="html/space.html">SPACE</a></li>
                <li><a href="html/system.html">SYSTEM</a></li>
                <li><a href="html/cafe.html">CAFE</a></li>
                <li><a href="html/access.html">ACCESS</a></li>
                <li class="header__contact"><a href="">CONTACT</a></li>
        </div><!--menu-->
    </div><!--top-->



    
    <div id="event">
        <div class="h2__title">
            <h2>EVENT</h2>
        </div><!--h2__title-->
        <div class="block">
        <?php foreach ($event as $key => $val) {  ?>
            <a href="">
                <div class="event__block__contents">
                    <div class="event__img">
                        <img src="<?= show_event_images($val['image_name']); ?>">
                    </div><!--event__img-->
                    <div class="event__content">
                        <div class="event__content1">
                            <div class="day">
                                <p><?= $val['eventdate'] ?></p>
                            </div><!--day-->
                            <div class="kikka__icon">
                                <p><?= show_hotel_from_id($val['hotel_id']);?></p>
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
                </div>
            </a><!--event__block__contents-->
        <?php } ?>
        </div><!--block-->
        <div class="page_links">
            <?= $page_links  ?>
        </div>
    </div><!--event--> 


    <div id="finished">
        <div class="finished__title">
            <h2>FINISHED EVENT</h2>
        </div><!--finished__title-->

        <div class="block2">
            <div class="flex">
            <a href=""><div class="finished__block">
                <div class="well">
                    <p>well</p>
                </div><!--well-->
                <div class="finished__block__block">
                    <div class="slider">
                        <img
                         src="<?= base_url()?>static/sevenevent/img/finishdevent_photo.jpg">
                    </div><!--slider-->
                    <h3>イベント名が入ります<br>
                    イベント名が入ります</h3>
                    <div class="finished__border">
                    </div><!--finished__border-->
                    <div class="finished__content">
                        <p>イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が
                        </p>
                    </div><!--finished__content-->
                </div><!--finished__block__block-->
            </div></a><!--finished__block-->

              <a href=""><div class="finished__block">
                <div class="kikka">
                    <p>kikka</p>
                </div><!--kikka-->
                <div class="finished__block__block">
                    <img src="<?= base_url()?>static/sevenevent/img/finishdevent_photo.jpg">
                    <h3>イベント名が入ります<br>
                    イベント名が入ります</h3>
                    <div class="finished__border">
                    </div><!--finished__border-->
                    <div class="finished__content">
                        <p>イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が
                        </p>
                    </div><!--finished__content-->
                </div><!--finished__block__block-->
            </div></a><!--finished__block-->
        </div><!--flex-->

        <div class="flex">
            <a href=""><div class="finished__block">
                <div class="well">
                    <p>well</p>
                </div><!--well-->
                <div class="finished__block__block">
                    <img src="<?= base_url()?>static/sevenevent/img/finishdevent_photo.jpg">
                    <h3>イベント名が入ります<br>
                    イベント名が入ります</h3>
                    <div class="finished__border">
                    </div><!--finished__border-->
                    <div class="finished__content">
                        <p>イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が
                        </p>
                    </div><!--finished__content-->
                </div><!--finished__block__block-->
            </div></a><!--finished__block-->

            <a href=""><div class="finished__block">
                <div class="kikka">
                    <p>kikka</p>
                </div><!--kikka-->
                <div class="finished__block__block">
                    <img src="<?= base_url()?>static/sevenevent/img/finishdevent_photo.jpg">
                    <h3>イベント名が入ります<br>
                    イベント名が入ります</h3>
                    <div class="finished__border">
                    </div><!--finished__border-->
                    <div class="finished__content">
                        <p>イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が入ります。イベントの簡単な説明が
                        </p>
                    </div><!--finished__content-->
                </div><!--finished__block__block-->
            </div></a><!--finished__block-->
            </div><!--flex-->
        </div><!--block-->
    </div><!--finished-->
    



    <div id="space">
        <div class="h2__title">
            <h2>SPACE</h2>
        </div><!--h2__title-->
        <div class="tabs">
            <input id="tab-1" type="radio" name="tab-radio" checked>
            <label class="tab-label" for="tab-1">well</label>
            <input id="tab-2" type="radio" name="tab-radio">
            <label class="tab-label tab2" for="tab-2">kikka</label> 
            <div class="tab-content tab-1-content">
                <div class="space__slider">
                    <img src="<?= base_url()?>static/sevenevent/img/space_photo.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/space_photo.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/space_photo.jpg">
                </div><!--space__slider-->
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
                        <img src="<?= base_url()?>static/sevenevent/img/floor_well.png" alt="">
                    </div><!--space__right-->
                </div><!--flex-->
            </div>
            <div class="tab-content tab-2-content">
                <div class="space__slider2">
                    <img src="<?= base_url()?>static/sevenevent/img/1.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/1.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/1.jpg">

                </div><!--space__slider-->
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
                        <img src="<?= base_url()?>static/sevenevent/img/floor_well.png" alt="">
                    </div><!--space__right-->
                </div><!--flex-->
            </div>
        </div>
    </div><!--space-->





    <div id="system">
        <div class="h2__title">
            <h2>SYSTEM</h2>
        </div><!--h2__title-->
        <div class="tabs2">
            <input id="tab2-1" type="radio" name="tab2-radio" checked>
            <label class="tab2-label" for="tab2-1">well</label>
            <input id="tab2-2" type="radio" name="tab2-radio">
            <label class="tab2-label tab3" for="tab2-2">kikka</label> 
            <div class="tab2-content tab2-1-content">
                <div class="space__slider">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                </div><!--space__slider-->
            </div>
            <div class="tab2-content tab2-2-content">
                <div class="space__slider2">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                    <img src="<?= base_url()?>static/sevenevent/img/system_dummy.jpg">
                </div><!--space__slider-->
            </div><!--tab2-content-->
        </div><!--tab2-->
        <div class="reserve">
            <a href="" target="_blank"><p>空き状況の確認</p></a>
        </div><!--reserve-->
    </div><!--system-->
    



    <div id="cafe">
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
                <img src="<?= base_url()?>static/sevenevent/img/logo_well_b.png">
                <a href="https://www.instagram.com/well_asakusa_cafe/"><img src="<?= base_url()?>static/sevenevent/img/insta.png"></a>
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
                    <img src="<?= base_url()?>static/sevenevent/img/access_well.jpg">
                    <div class="access__logo">
                        <img src="<?= base_url()?>static/sevenevent/img/logo_well_b.png">
                        <div class="map">
                            <a href="https://www.instagram.com/well_asakusa_cafe/"><img src="<?= base_url()?>static/sevenevent/img/insta.png"></a>
                            <a href="https://goo.gl/maps/P9rAgP9bGdv" target="_blank"><img src="<?= base_url()?>static/sevenevent/img/map_o.png"></a>
                        </div><!--map-->
                    </div><!--access__logo-->
                    <div class="access__content">
                        <h3>SEVEN GAEDEN (1F well)</h3>
                        <p>〒111-0032　東京都台東区浅草1-34-2</p>
                        <p>Mail: sevengarden@7garden.co.jp</p>
                        <p>Tell: 03-5830-7140</p>
                        <p>イベント利用可能時間：18:00-23:00</p>
                        <p>最寄り駅：　銀座線浅草駅徒歩2分・浅草線浅草駅徒歩5分</p>
                    </div><!--access__content-->
                </div><!--access__block-->
                <div class="access__block">
                    <img src="<?= base_url()?>static/sevenevent/img/access_kikka.jpg">
                    <div class="access__logo2">
                        <img src="<?= base_url()?>static/sevenevent/img/logo_kikka_c.png"> 
                        <div class="map2">
                            <a href="https://www.instagram.com/hostel_kikka/"><img src="<?= base_url()?>static/sevenevent/img/insta.png"></a>
                            <a href="https://goo.gl/maps/LYJZfrDJbAr" target="_blank"><img src="<?= base_url()?>static/sevenevent/img/map_g.png"></a>
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
            <a href=""><img src="<?= base_url()?>static/sevenevent/img/logo_well.png"></a>
            <a href=""><img src="<?= base_url()?>static/sevenevent/img/logo_kikka.png"></a>
        </div><!--footer__right-->
    </div><!--footer-->
</div><!--all-->
</body>
</html>
