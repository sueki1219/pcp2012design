<html>
	<head>
		<title>���X�g</title>
	</head>
	<body>
				<form action="kakunin.php" method="POST">
<?php
	mysql_connect("105-pc","root","");
	mysql_select_db("sample");

	mysql_query("SET NAMES sjis");

		$sql = "select student_id, student_name, sex, class from namelist";
		$result = mysql_query($sql);
		
	$kensu = mysql_num_rows($result);
?>


		
		<table border="1" width="100%">
			<tr>
				<th width="10%">�o�Ȕԍ�</th>
				<th width="10%">����</th>
				<th width="10%">����</th>
				<th width="10%">�N���X</th>
				<th width="10%">�ψ���</th>
				<th width="10%">���H����</th>
				<th width="10%">���|���</th>
				<th width="10%">�N���u����</th>
				
			</tr>
<?php
	for($i=0; $i<$kensu; $i++){
		$gyo = mysql_fetch_array($result);
?>
			

					<td><?= $gyo[0] ?></td>
					<td><?= $gyo[1] ?></td>
					<td><?= $gyo[2] ?></td>
					<td><?= $gyo[3] ?></td>

					<td>
						<select name="iinkai" style="width:130" td bgcolor="blue">
							<option value="" selected></option>
							<option value="">�w��</option>
							<option value="">����</option>
							<option value="">�ی�</option>
							<option value="">�̈�</option>
							<option value="">���I</option>
							<option value="">���y</option>
							<option value="">����</option>
							<option value="">�}��</option>
							<option value="">���H</option>
							<option value="">���|</option>
							<option value="">�^�c</option>
						</select>
					</td>
					<td>
						<select name="touban" style="width:130">
							<option value="" selected></option>
							<option value="">��,�p��</option>
							<option value="">���H</option>
							<option value="">�T���_</option>
							<option value="">����</option>
							<option value="">�t���[�c</option>
						</select>
					</td>
					<td>
						<select name="seisou" style="width:130">
							<option value="" selected></option>
							<option value="">����</option>
							<option value="">�L��</option>
							<option value="">�n��L��</option>
							<option value="">�E����</option>
							<option value="">�Z����</option>
							<option value="">���ʎ�</option>
							<option value="">�g�C��</option>
							<option value="">�̈��</option>
							<option value="">�}����</option>
							<option value="">�K�i</option>
						</select>
					</td>
					<td>
						<select name="club" style="width:130">
							<option value="" selected></option>
							<option value=""></option>
							<option value=""></option>
							<option value="">/option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
						</select>
						<tr></tr>

				</td>
<?php
	}
?>
		</table>
			<input type="submit" value="�m�F">&nbsp;&nbsp;
			<input type="reset" value="�N���A">
	</body>
</html>