<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>sample</title>
	</head>
<body>

<?php

if (is_uploaded_file($_FILES["upfile"]["tmp_name"]))
{
	if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"]))
	{
		chmod("files/" . $_FILES["upfile"]["name"], 0644);
		echo $_FILES["upfile"]["name"] . "をアップロードしました。";
	}
	else
	{
		echo "ファイルをアップロードできません。";
	}
}
else
{
	echo "ファイルが選択されていません。";
}

?>

</body>
</html>