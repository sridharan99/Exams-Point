<html>
<head>
<title>Hello
</title>
</head>
<body>
<?php
$mysql_hostname = "localhost";

$mysql_user = "root";

$mysql_password = "";

$mysql_database = "exams";

$prefix = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

mysql_select_db($mysql_database, $bd) or die("Could not select database");

if(!$bd)
	echo 'hello';
else
	echo 'welcome';
?>

<p>Welcome to the world of php</p>
</body>
</html>