<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>打印后端</title>
	</head>

	<body>
	<?php
		
		$name = $_POST['name'];
		$content = $_POST['content'];
		$content = stripslashes($content);
		//phpinfo();
		$filename = "./code/".$name."-".date('H-i-s');
		$fp = fopen($filename, "wb");
		$content = date('H-i-s')."\t\t".$name."\n\n".$content;
		fwrite($fp, $content);
		fclose($fp);
		$command = "lpr -o prettyprint ".$filename;
		system($command);	
		echo "<script language=javascript>alert('打印成功，文件将尽快送达!');</script>";
		echo "<script language=javascript>history.back();</script>";
	?>
	</body>
</html>
