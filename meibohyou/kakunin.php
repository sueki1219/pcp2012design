<html>
	<head>
		<title>�o�^�m�F���</title>
	</head>
	<body>
		���͂����f�[�^��\�����܂��B
<?php
	$student_id = $_POST['student_id'];
	$student_name = $_POST['student_name'];
	$sex = $_POST['sex'];
	$class = $_POST['class'];
?>
		<table border="1" width="650">
			<tr>
				<td bgcolor="pink" widgh="150" align="center">���k�ԍ�</td>
				<td><?= $student_id ?></td>
			</tr>
			<tr>
				<td bgcolor="pink" align="center">����</td>
				<td><?= $student_name ?></td>
			</tr>
			<tr>
				<td bgcolor="pink" align="center">����</td>
				<td><?= $sex ?></td>
			</tr>
			<tr>
				<td bgcolor="pink" align="center">�N���X</td>
				<td><?= $class ?></td>
			</tr>
		</table>
		<form action="touroku3.php" method="POST">
			<input type="hidden" name="student_id" value="<?= $student_id ?>">
			<input type="hidden" name="student_name" value="<?= $student_name ?>">
			<input type="hidden" name="sex" value="<?= $sex ?>">
			<input type="hidden" name="class" value="<?= $class ?>">
			���͓��e�����m�F���������A���Ȃ���΁u�o�^�v�{�^���������Ă�������<br>
			<input type="submit" value="�o�^">
		</form>
	</body>
</html>