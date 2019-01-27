<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?= form_open('admin/update') ?>
<br>
<br>
<input type="text" name="username" value="<?= $username ?>">
<input type="text" name="email" value="<?= $email ?>">
<input type="text" name="hobby" value="<?= $hobby ?>">

<input type="hidden" name="id" value="<?= $id ?>">
<input type="submit" value="送信">

<?= form_close() ?>

</body>
</html>
