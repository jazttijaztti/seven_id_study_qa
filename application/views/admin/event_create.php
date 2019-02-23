<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?= base_url('static/plugins/ckeditor/ckeditor.js'); ?>"></script>
  
</head>
<body>
<?= form_open_multipart('eventmanager/register') ?>
<input type="radio" name="hotel_id" value="1">KIKKA
<input type="radio" name="hotel_id" value="2">SEVEN
<input type="radio" name="hotel_id" value="3">VINTAGE
<br>
日にち<input type="text" name="eventdate"><br>
タイトル<input type="text" name="title"><br>
外部リンク<input type="text" name="link"><br>
説明<input type="text" name="description"><br>
画像<input type="file" name="event_img">
<br>
<input type="submit" value="送信">
<?= form_close() ?>

</body>
</html>
