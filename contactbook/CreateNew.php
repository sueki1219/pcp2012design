<?php
		 //データベースの呼出
         require_once("../lib/dbconect.php");
         $dbcon = DbConnect();

         //ユーザーの件数の取り出し
	     $sql = "SELECT * FROM m_user";
	     $result = mysql_query($sql);
	     $kensu = mysql_num_rows($result);

	     //データベースを閉じる
	     DBdissconnect($dbcon);
?>

<html>
	<head>
	　　<title> 新規作成</title>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	  <meta http-equiv="Content-Style-Type" content="text/css">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	  </head>

	<body>
	<div id="main">
<!-- メインコンテンツ▼ -->
<h2>新規作成</h2>
<p>
		<form action="relay.php" method="POST" id="input">
			  <font size="3">宛先</font>
			  <select name="to">
			  <?php
				   for ($i = 0; $i < $kensu; $i++)
				   {
				   		$row = mysql_fetch_array($result);
			  ?>
				    	<option value="<?=$row['user_seq']?>"><?= $row['user_name'] ?></option>
			  <?php
			    	}
			  ?>

			  </select>
			  <br>
			  <font size="3">件名</font>
			  <input size="40" type="text" name="title"><br><br>
		      <font size="3">本文</font><br>
		      <textarea rows="40" cols="50" name="contents"></textarea><br>

		      <!-- 隠し文字 -->
		      <input type="hidden" value="0" name="link_id">
		      <table>
		      	<tr>
		      		<td><input class="button4" type="submit" value="送信" name = "send"></td>
		      		<td><input class="button4" type="submit" value="保存" name="Preservation"></td>
			  	</tr>
			  </table>
	    </form>
</p>
<div class="up"><a href="#top">Page Top ▲</a></div>
<!-- メインコンテンツ▲ -->
</div>
	
    </body>
</html>
