<?php
include "./vendor/autoload.php";
include './wxModel.php';

$wxObj = new wxModel();

$imgurl = $wxObj->getQrCode();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二维码</title>
</head>
<body>
	<img src="<?php echo $imgurl ?>" alt="" />
</body>
</html>