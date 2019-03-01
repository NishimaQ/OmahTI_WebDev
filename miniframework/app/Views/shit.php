<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $GLOBALS['path']; ?>/css/style.css">
    <title>shit</title>
</head>
<body>
    <h1>SHit</h1>
    <?php foreach ($data['users'] as $user => $value) { ?>
        <p><?php echo $value['name'] ?></p>
    <?php } ?>
</body>
</html>