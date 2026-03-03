<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Table Loop</title>
</head>
<body>
<h2>BÀI 2</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>STT</th>
        <th>Ảnh</th>
        <th>Name</th>
    </tr>

    <?php for($i = 1; $i <= 6; $i++) { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><img src="images/<?php echo $i; ?>.jpg" width="100"></td>
        <td>Hình ảnh <?php echo $i; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
