<?php
	session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- フレーム上部分のメニュー -->
<html>
<head>

	<META http-equiv="Content-Style-Type" content="text/css">
	<link rel="STYLESHEET"  href="../css/frame.css" type="text/css">
	<script src="../javascript/frame_jump.js"></script>
	<script src="../jquery-1.8.2.min.js"></script>
	<script src="../javascript/index_menu.js"></script>
	<meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="../jquery.li-scroller.1.0.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	


	<title>メニュー一覧</title>
</head>

<body>
		<div id="container">
	<div align="right">
		<font size="5" >ようこそ<u><!--<?= $_SESSION['login_info[user_name]'] ?>--></u>さん</font>
	</div>


	<!-- テロップ形式で表示する内容（中身：ＤＢから、個数：foreach文？） -->
<!--	<ul id="ticker01">
    	<li><span>１時間目</span><a href="#">美術</a></li>
    	<li><span>２時間目</span><a href="#">道徳</a></li>

    	 eccetera 
	</ul>
	<script>
	$(function(){
		console.log("テロップ");
		$("ul#ticker01").liScroll();
	})();
	</script>

-->

<div id="menu">
<ul>
<li><a onclick="jump_top()">HOME</a></li>
<li><a onclick="jump('../dl_calendar/calendar_main.html' , 'left')">スケジュール</a></li>
<li><a onclick="jump('../contactbook/main.php' , 'left')">連絡帳</a></li>
<li><a onclick="jump_class()">授業</a></li>
<li><a onclick="jump('../question/index.php','left')">アンケート</a></li>
<li><a onclick="jump('../autho_management/jump.php' , 'left')" >成績確認</a></li>
</ul>
</div>
<div id="menu">
<ul>
<li><a onclick="jump('../autho_management/autho_main.php','left')">権限管理</a></li>
<li><a onclick="jump('../group/group_top.php', 'left')">グループ管理</a></li>
<li><a onclick="jump('../user_manager/index.php', 'left')">ユーザ管理</a></li>
<li><a onclick="jump('../Results_management/res_main.php','left')">成績管理</a></li>
<li><a onclick="jump('../Print_delivery/p_main.php','left')">プリント配信</a></li>
<li><a onclick="jump('../Attendance_and_absence management/A_main.php','left')">出席管理</a></li>
</ul>
</div>

</body>
</html>
