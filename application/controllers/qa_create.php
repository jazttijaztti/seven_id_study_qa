<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?= form_open('qa/register') ?>
<input type="radio" name="hotel_id" value="1">KIKKA
<input type="text" name="question">
<br>
<input type="text" name="answer">
<input type="submit" value="送信">

<?= form_close() ?>
</body>
</html>
