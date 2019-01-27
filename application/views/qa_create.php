<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?= base_url('static/plugins/ckeditor/ckeditor.js'); ?>"></script>
  
</head>
<body>
<?= form_open('qa/register') ?>
<input type="radio" name="hotel_id" value="1">KIKKA
<input type="radio" name="hotel_id" value="2">SEVEN
<input type="radio" name="hotel_id" value="3">VINTAGE
<br>
<textarea name="question" id="editor2"></textarea>
<br>
<textarea name="answer" id="editor" class="ckeditor"></textarea>
<input type="submit" value="送信">

<?= form_close() ?>
<script>
  CKEDITOR.replace('editor2', {
  });
</script>

</body>
</html>
