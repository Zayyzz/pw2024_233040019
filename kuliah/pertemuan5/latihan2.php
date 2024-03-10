<?php
$binatang = ["🐈", "🐇", "👹", "😍", "❤️"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for ($i = 0; $i < 5; $i++) {?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>


    <h3>Daftar Makanan</h3>
    <ul>
        <li>🍛</li>
        <li>🍕</li>
        <li>🍪</li>
    </ul>
</body>
</html>