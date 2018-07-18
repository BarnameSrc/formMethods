<html>
	<head>
		<title>POST</title>
	</head>
<?php
// Saving posted data to a variable
$fn = $_POST['FN'];
$ln = $_POST['LN'];
// Printing data
echo "Your name is " . $fn . $ln . "<br><br>";

// Notes
echo "همانطور که دیدید در این متد اطلاعات گرفته شده بدون هیچگونه درز اطلاعات در این فایل استفاده شد<br>";
echo "حالا برای ادامه آموزش به صفحه اصلی برگردید<br>";
?>
	<body>
		<br>
		<a href="index.php"><input type="button" name="button" value="index.php"></a>
	</body>
</html>
