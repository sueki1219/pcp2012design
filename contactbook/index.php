<?php
	//SESSIONでユーザIDの取得
	session_start();
	$user_seq = $_SESSION['login_info[user]'];
?>
			<?php

				//データベースの呼出
				require_once("../lib/dbconect.php");
				$dbcon = DbConnect();

				/***************************************************/
				/*         フラグの種類　　　　　　　                            　　　　　　　　　　*/
				/*   new_flg（連絡帳受信時　１：未読　０：既読）                          　　*/
				/*   send_flg（連絡帳未送信時　１：未送信　０：送信済み）              */
				/*   print_flg（プリント受信時　１：未読　０：既読）                            */
				/*   print_send_flg（プリント未送信時　１：未送信　０：送信済み） */
				/***************************************************/

				//フラグの情報をデータベースから取得し、その件数を数える　（連絡帳の新着受信）
				$sql = "SELECT new_flg FROM contact_book
						WHERE new_flg = 1
						AND contact_book.reception_user_seq = $user_seq;";
				$result = mysql_query($sql);
				$cnt_new = mysql_num_rows($result);

				//フラグの情報をデータベースから取得し、その件数を数える　（連絡帳の未送信）
				$sql = "SELECT send_flg FROM contact_book
						WHERE send_flg = 1
						AND contact_book.reception_user_seq = $user_seq;";
				$result = mysql_query($sql);
				$cnt_send = mysql_num_rows($result);

				//フラグの情報をデータベースから取得し、その件数を数える　（プリント配信の新着受信）
//				$sql = "SELECT * FROM  print_check
	//					WHERE user_seq = '$user_seq'
		//				AND print_check_flg = 1;";
			//	$result = mysql_query($sql);
				//$cnt_print_flg = mysql_num_rows($result);

				//データベースを閉じる
				Dbdissconnect($dbcon);

			?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=850" />
<meta http-equiv="content-style-type" content="text/css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title>連絡帳</title>
</head>
<body>
<!-- body▼ -->
<div id="body">
<!-- header▼ -->
<div id="header">
<h1 name="top" id="top"><a href="index.html">SITE NAME</a></h1>
</div>
<!-- header▲ -->
<!-- メニュー▼ -->
<div id="menu">
<ul>
<li><a href="../index.php">HOME</a></li>
<li><a href="page2.html">スケジュール</a></li>
<li><a href="contactbook/">連絡帳</a></li>
<li><a href="page2.html">授業</a></li>
<li><a href="page2.html">成績確認</a></li>
<li><a href="page2.html">アンケート</a></li>
</ul>
</div>
<div id="menu">
<ul>
<li><a href="index.html">権限管理</a></li>
<li><a href="page2.html">グループ管理</a></li>
<li><a href="page2.html">ユーザ管理</a></li>
<li><a href="page2.html">成績管理</a></li>
<li><a href="page2.html">プリント配信</a></li>
<li><a href="page2.html">出席管理</a></li>
</ul>
</div>
<!-- メニュー▲ -->
<!-- left▼ -->
<div id="left">
<h4>MENU</h4>
<!-- サブメニュー▼ -->
<ul id="menu2">
<li><a href="#a01">新規作成</a></li>
<li><a href="#a01">受信箱（<?= $cnt_new + $cnt_print_flg ?> ）</a></li>
<li><a href="#a01">送信箱</a></li>
<li><a href="#a01">下書き （<?= $cnt_send?> ）</a></li>
</ul>
<!-- サブメニュー▲ -->
<!-- leftコンテンツ▼ -->
<!-- サイドボックス▼ -->
<div class="box_head">サイドボックス</div>
<div class="box_main">
<p>
ここにテキスト
</p>
</div>
<!-- サイドボックス▲ -->
<h4>&lt;h4&gt;&lt;/h4&gt;見出し</h4>
<h5>&lt;h5&gt;&lt;/h5&gt;見出し</h5>
<!-- leftコンテンツ▲ -->
</div>
<!-- left▲ -->
<!-- main▼ -->
<div id="main">
<!-- メインコンテンツ▼ -->
<h2>&lt;h2&gt;&lt;/h2&gt;見出し</h2>
<p>
ここにテキスト
</p>
<h3>&lt;h3&gt;&lt;/h3&gt;見出し</h3>
<p>
ここにテキスト
</p>
<div class="up"><a href="#top">Page Top ▲</a></div>
<!-- メインコンテンツ▲ -->
</div>
<!-- main▲ -->
<!-- footer▼ -->
<div id="footer">
<br /><br /><br />
Copyright (C) <a href="index.html">サイト名</a> All Rights Reserved.
</div>
<!-- footer▲ -->
<div id="copy">
<!--削除しないでください-->
<p><a href="http://homepagetemplate.web.fc2.com/" target="_blank" title="ホームページ テンプレート フリー H.P.T.F">ホームページ テンプレート フリー</a></p><p>Design by</p>
</div>
</div>
<!-- body▲ -->
</body>
</html>