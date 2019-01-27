<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
span {
  color:red;
}
</style>
</head>
<body>
<?= form_open("seven/result") ?>
<?= form_error('name' , '<span class="error">','</span>')?>
名前<input type="text" name="name" value="<?= set_value('name');?>">
<?= form_error('age' , '<span class="error">','</span>') ?>
年齢<input type="text" name="age" value="<?= set_value('age');?>">
<input type="submit" value="送信">
<?= form_close();?>
</body>
</html>
