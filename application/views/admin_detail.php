<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<a href="<?= base_url('admin/edit/'.$id) ?>">編集</a>
<a href="<?= base_url('admin/delete/'.$id) ?>">削除</a>

<?= $id ?>
<br>
<?= $username ?>
<br>
<?= $email ?> 

<br>
<?= $hobby ?> 
</body>
</html>
