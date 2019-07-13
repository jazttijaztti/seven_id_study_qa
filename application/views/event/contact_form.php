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
</head>
<main>
		     <div id="mein" style="margin-top: 100px;">
			<h2 style="font-size: 28px;">CONTACT</h2>
			<div class="foam-subtitle">
				<p>
				  イベント開催希望者様、イベント参加希望者様共に受け付けております。<br>
                                  お気軽にお問い合わせくださいませ。
				<p>
			</div>
		<?= form_open_multipart('event/confirm'); ?>
                         <div class="foam-block cf">
                             <div class="foam-left">
				     <p>必須</p>
                             </div>
                             <div class="foam-right">
				     <p>お名前</p>
                             </div>
                             <input type="text" name="name" placeholder="">
                         </div>
                         <div class="foam-block cf">
                             <div class="foam-left">
				     <p>必須</p>
                             </div>
                             <div class="foam-right">
				     <p>メールアドレス</p>
                             </div>
                             <input type="text" name="email" placeholder="">
                         </div>
                         <div class="foam-block cf">
                             <div class="foam-left">
				     <p>必須</p>
                             </div>
                             <div class="foam-right">
				     <p>電話番号</p>
                             </div>
                             <input type="text" name="phone_num" placeholder="">
                         </div>
                         <div class="foam-block cf">
                             <div class="foam-left">
				     <p>必須</p>
                             </div>
                             <div class="foam-right">
				     <p>お問い合わせ内容</p>
                             </div>
			     <textarea name="content" cols="50" rows="5" placeholder="" ></textarea>
                         </div>
                         <div class="foam-send">
				 <input type="submit" value="送信する">
                         </div>
		<?= form_close(); ?>
                <?= validation_errors(); ?>
			 <!--foam-block-->
                       </div>
		       <!--mein-->

		</main>
