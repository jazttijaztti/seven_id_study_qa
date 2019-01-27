<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?= form_open('admin/register') ?>
<br>
名前<input type="text" name="username"><br>
パスワード<input type="password" name="password"><br>
メール<input type="email" name="email"><br>
趣味<input type="hobby" name="hobby"><br>

<input type="submit" value="送信">

<?= form_close() ?>
<script>
  CKEDITOR.replace('editor2', {
  });
</script>

</body>
</html>
