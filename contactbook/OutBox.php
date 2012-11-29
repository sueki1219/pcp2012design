<?php
	//SESSIONでユーザーIDを取得
	session_start();
	$user_seq = $_SESSION['login_info[user]'];

	//データベースの呼出
	require_once("../lib/dbconect.php");
	$dbcon = DbConnect();

	//連絡帳のデータベースからデータの取り出し
	$sql = "SELECT contact_book_seq, send_date,  m_user.user_name AS reception_user_name, title
			FROM contact_book
			Left JOIN m_user ON contact_book.reception_user_seq = m_user.user_seq
			WHERE contact_book.send_user_seq = $user_seq
			AND send_flg = 0
			ORDER BY send_date DESC;";

	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	//データベースを閉じる
	Dbdissconnect($dbcon);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/back_ground.css" />
		<link rel="stylesheet" type="text/css" href="../css/text_display.css" />
		<link rel="stylesheet" type="text/css" href="../css/table.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		
		<title>送信ボックス</title>
	</head>

	<body>
<div id="main">
<!-- メインコンテンツ▼ -->
<h2>送信ボックス</h2>
<p>
	
		<!-- 連絡帳の受信一覧テーブル作成 -->
			<h3>連絡帳</h3>
		<br>
			<table border="1">
				<tr bgcolor="yellow">
					<th align="center"width="150"><font size="5">日付</font></th>
					<th align="center"width="200"><font size="5">TO</font></th>
					<th align="center"width="400"><font size="5">件名</font></th>
					</tr>

				<?php
				for ($i = 0; $i < $count; $i++){
					$row = mysql_fetch_array($result);
				?>

				<tr>
					<td><?= $row['send_date'] ?></td>
					<td><?= $row['reception_user_name'] ?></td>
					<td>
						<!-- GETでシークを渡す -->
						<a href="sendview.php?id=<?= $row['contact_book_seq'] ?>"><?= $row['title'] ?></a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
		</p>
	</body>
</html>