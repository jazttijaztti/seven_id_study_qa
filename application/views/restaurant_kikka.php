<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
li {
   list-style:none;
}
body {
   text-align:center;
}
h1 {
   font-size:1em;
}
.error {
 color:red;
}
</style>
</head>
<body>
<?php echo form_error('name','<div class="error">', '</div>'); ?>
<?php echo form_error('gender'); ?>
<?php echo form_error('age'); ?>

<h1>あなたの情報から<br>KIKKAオススメのメニューを<br>紹介します</h1>
<?php echo form_open("index.php/restaurant/kikka_result"); ?>
<ul>
<li>名前<input type="text" name="name" value="<?php echo set_value('name'); ?>"></li>
<li>性別<input type="text" name="gender"></li>
<li>年齢<input type="text" name="age"></li>
<li><input type="submit" value="送信"></li>
</ul>
<?= form_close(); ?>

</body>
</html>
