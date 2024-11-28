<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        .container{
            width: 800px;
            margin-top: 0;
            margin-left: 300px;
            padding: 20px 50px 40px;
            background-color: white;
        }
        
    </style>
</head>
<body>
    <div class = "container">
        <h1>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</h1> 
        <?php if (empty($flowers)): ?> <p>Chưa có hoa nào để hiển thị</p>
        <?php else: ?>
        <?php foreach ($flowers as $index => $flower): ?>
        <div class = "flower">
            <div class = "flower-name"><?= $index + 1 ?>. <?=$flower['name'] ?></div>
            <div class = "flower-description"><?= $flower['description'] ?></div>
            <div class = "flower-image">
                <img src="<?= $flower['image'] ?>" alt="">
            </div>
        </div>
        <?php endforeach?>
        <?php endif?>
    </div>
</body>
</html>