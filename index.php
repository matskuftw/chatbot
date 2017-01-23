<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Welcome to Chatbot</title>
</head>
<body>
<?php if ($_GET['name'] == NULL): ?>
<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php 

elseif ($_GET['reply'] == NULL):

$name = $_GET['name'];
$half_name_length = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($nytt_namn) - $half_name_length;
$name_end = mb_substr($name, $half_name_length, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_length);
$botname = $name_end . $name_beginning;
?>

<p><stong><?= $botname ?>:</stong> Hej <?= $name ?></p>
<form>
	<input type="text" name="reply">
	<input type="hidden" name="name" value="<?= $name ?>">
	<input type="hidden" name="botname" value="<?= $botname ?>">
	<input type="submit" value="Reply">
</form>
<?php
else:
	$name = $_GET['name'];
$botname = $_GET['name'];
$reply = $_GET['reply'];
?>


<p><stong><?= $botname ?>:</stong> Hej <?= $name ?></p>

<p><stong><?= $name ?>:</stong><?= $reply ?></p>


<?php

$array = ["Fint väder?", "hej", "schysst meme", "dank", "kapitalismen kommer segra"];
$botreply = $array[random_int(0, count($array) -1)];

?>

p><stong><?= $botname ?>:</stong> <?= $botreply ?></p>

<?php endif ?>

</body>
</html>