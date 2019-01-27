<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<a href="<?= base_url('qa/edit/'.$id) ?>">編集</a>
<a href="<?= base_url('qa/delete/'.$id) ?>">削除</a>

<?= $id ?>
<br>
<?= $question ?>
<br>
<?= $answer ?> 

</body>
</html>
