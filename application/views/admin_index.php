<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
text-align:center;
}

.admin {
 border:1px solid #565656;
 margin:20px;
}
</style>
</head>
<body>
<div>
<p>わからないことは何？</p>
<?= form_open('admin/search');?>
<input type="text" name="search">
<?= form_close();?>
</div>

<?php foreach($admin as $key=>$val) { ?>
<div class="admin">
<a href="<?= base_url("admin/detail/".$val['id']);?>"> <?= $val['username'] ?></a> <br>
</div>

<?php } ?>

<?= $this->pagination->create_links();?>
</body>
</html>
