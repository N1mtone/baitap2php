<?php
$name = "Nguyễn Huy Hoàng";
$age = 25;
$email = "luongitvnsoft@gmail.com";
$phone = "0986421127";
$gender = 1;
$address = "Số 7 - Mỹ Đình - Cầu Giấy";
$avatar = "avatar.png";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
</head>
<body>
<h2>BÀI 3</h2>
<table border="1" cellpadding="10" width="600">
<tr><td>Name</td><td><input type="text" value="<?php echo $name; ?>"></td></tr>
<tr><td>Age</td><td><input type="number" value="<?php echo $age; ?>"></td></tr>
<tr><td>Phone</td><td><input type="text" value="<?php echo $phone; ?>"></td></tr>
<tr><td>Email</td><td><input type="email" value="<?php echo $email; ?>"></td></tr>
<tr><td>Address</td><td><input type="text" value="<?php echo $address; ?>"></td></tr>
<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="1" <?php if($gender==1) echo "checked"; ?>> Nam
<input type="radio" name="gender" value="0" <?php if($gender==0) echo "checked"; ?>> Nữ
</td>
</tr>
<tr>
<td>Avatar</td>
<td>
<img src="<?php echo $avatar; ?>" width="80"><br><br>
<input type="file">
</td>
</tr>
<tr><td colspan="2" align="center"><button>Update</button></td></tr>
</table>
</body>
</html>
