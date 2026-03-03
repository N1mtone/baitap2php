<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Loop Images</title>
</head>
<body>
<h2>BÀI 1</h2>

<?php for($i = 1; $i <= 6; $i++) { ?>
    <img src="images/<?php echo $i; ?>.jpg" width="150">
<?php } ?>

</body>
</html>
