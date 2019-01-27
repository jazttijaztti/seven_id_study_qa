<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<!--
  <script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
-->
</head>
<body>

<?= form_open('qa/update') ?>
<input type="radio" name="hotel_id" value="1" <?= check_hotel_kinds(1 , $hotel_id)?>>KIKKA
<input type="radio" name="hotel_id" value="2" <?= check_hotel_kinds(2 , $hotel_id)?>>SEVEN
<input type="radio" name="hotel_id" value="3" <?= check_hotel_kinds(3 , $hotel_id)?>>VINTAGE
<br>
<textarea name="question" id="editor2"><?= $question ?></textarea>
<br>
<textarea name="answer" id="editor"><?= $answer ?></textarea>
<input type="hidden" name="id" value="<?= $id ?>">
<input type="submit" value="送信">

<?= form_close() ?>
<script>
  CKEDITOR.replace('editor', {
  });
  CKEDITOR.replace('editor2', {
  });
</script>

</body>
</html>
