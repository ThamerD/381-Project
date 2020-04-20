<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_e.css">
    <title>Document</title>
</head>
<body>
<?php include_once "base.php"; ?>

<div class = "coBody opactiy-Cobody" id="coBody">
    <h2>Inbox</h2>
    <div class="Container-inbox">
    <div class = 'dw' style=' text-align: left;' >
            <a style=' text-decoration: none;color:black;' href='product.php?ID={$row['PRODUCT_ID']}'>
                <p>subject: {$row['PRODUCT_NAME']}</p>
                <p>Type:{$row['CATEGORY']} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; price:{$row['PRICE']} SAR</p>

                </a>
        </div>
    </div>
</body>
</html>