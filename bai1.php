<?php
$name = "Nguyễn Huy Hoàng";
$age = 25;
$email = "luongitvnsoft@gmail.com";
$phone = "0986421127";
$address = "Số 7 - Mỹ Đình - Cầu Giấy - Hà Nội";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
</head>
<body>
<h2>BÀI 1</h2>
<table border="1" cellpadding="10">
    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
    <tr><td>Age</td><td><?php echo $age; ?></td></tr>
    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
</table>
</body>
</html>
