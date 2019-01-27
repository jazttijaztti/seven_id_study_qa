<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?= form_open('login/exec'); ?>
名前<input type="text" name="email"><br>
パスワード<input type="text" name="password"><br>
<input type="submit" value="送信">
<?= form_close(); ?>

</body>
</html>
