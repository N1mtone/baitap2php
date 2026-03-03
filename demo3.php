<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 3 - Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>BÀI 3</h2>

<div class="row">
<?php for($i = 1; $i <= 6; $i++) { ?>
    <div class="col-md-4 mb-4 text-center">
        <img src="images/<?php echo $i; ?>.jpg" class="img-fluid">
        <h5 class="mt-2">Hình ảnh <?php echo $i; ?></h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $i; ?>">
            View
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal<?php echo $i; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Hình ảnh <?php echo $i; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/<?php echo $i; ?>.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

<?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
