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
<?= form_open('question/register') ?>

<?= validation_errors(); ?>
<input type="radio" name="hotel_id" value="1">KIKkA <br>
<textarea name="question" id="editor2"></textarea>
<textarea name="answer" id="editor"></textarea>

<script>
  CKEDITOR.replace('editor', {
//    uiColor: '#EEEEEE',
//    width:800,
//    height: 200,
  });
</script>
<script>
  CKEDITOR.replace('editor2', {
//    uiColor: '#EEEEEE',
//    width:800,
//    height: 200,
  });
</script>

<input type="submit" value="送信">

<?= form_close(); ?>
</body>

</html>
