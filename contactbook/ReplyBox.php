<?php
	require_once("../lib/dbconect.php");
	$send_name = $_POST['sendto'];
	$send_seq = $_POST['send_seq'];
	$title = $_POST['title'];
	$link_id = $_POST['link_id'];
	$contents = $_POST['contents'];

?>

<html>
	<head>
	　　<title> 返信</title>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta http-equiv="Content-Style-Type" content="text/css">
	    <link rel="stylesheet" type="text/css" href="../css/button.css" />
	    <link rel="stylesheet" type="text/css" href="../css/back_ground.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	    </head>

	<body>
	
	
<div id="main">
<!-- メインコンテンツ▼ -->
<h2>返信</h2>
<p>
		<form action="relay.php" method="POST" id="input">
		  <font size="3">宛先　： </font>
		  <?= "$send_name"?><br>
		  <font size="3">件名　： </font>
		  <input size="40" type="text" name="title" value="Re: <?= "$title"?>"><br><br>
	      <font size="3">本文</font><br>
	      <textarea rows="40" cols="50" name="contents">＞<?= "$contents" ?></textarea><br>
	      <input type="hidden" value="<?= $send_seq ?>" name="send_seq">
	      <input type="hidden" value="<?= $link_id ?>" name="link_id">
	      <input class="button4" type="submit" value="送信" name = "send">
		  <input class="button4" type="submit" value="保存" name="Preservation"><br>
	    </form>
</p>
</div>
	
    </body>
</html>
