<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
text-align:center;
}

.qa {
 border:1px solid #565656;
 margin:20px;
}
</style>
</head>
<body>
<p><?= $username ?>さんこんにちは、最近は<?= $hobby ?>はやっていますか？</p>
<div>
<p>わからないことは何？</p>
<?= form_open('qa/search');?>
<input type="text" name="search">
<?= form_close();?>
</div>

<?php foreach($faq as $key=>$val) { ?>
<div class="qa">
<a href="<?= base_url("qa/detail/".$val['id']);?>"> <?= show_hotel_from_id($val['hotel_id']); ?></a> <br>
<?= $val['question'] ?><br>
</div>

<?php } ?>

<?= $this->pagination->create_links();?>
</body>
</html>
