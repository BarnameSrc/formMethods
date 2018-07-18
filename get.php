<html>
	<head>
		<title>GET</title>
	</head>
<?php
// Saving posted data to a variable
$fn = $_GET['FN'];
$ln = $_GET['LN'];
// Printing data
echo "Your name is " . $fn . $ln . "<br><br>";

// Notes
echo "همانطور که دیدید در این متد اطلاعات گرفته شده داخل آدرس بار هم در حال نمایش است این باعث میشود بتوانید بدون نیاز به فرم با تغییر آدرس از آن استفاده کنید<br>";
echo "حالا برای تمرین و فهم این متد آدرس را در آدرس بار تغییر دهید<br>";
?>
	<body>
		<br>
		<a href="index.php"><input type="button" name="button" value="index.php"></a>
	</body>
</html>
