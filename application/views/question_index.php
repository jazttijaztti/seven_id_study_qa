<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
.qa {
   border:1px solid #565656;
}
</style>
</head>
<body>
<?php  foreach ($qa as $key => $val) { ?>
<div class="qa">
<p>ホテル <?= $val['hotel_id'] ?></p>
<p>質問   <?= $val['question'] ?></p>
<p>解答   <?= $val['answer'] ?></p>
</div>

<?php } ?>
</body>

</html>
