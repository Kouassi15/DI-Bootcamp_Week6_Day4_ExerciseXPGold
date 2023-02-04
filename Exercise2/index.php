<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace The First</title>
</head>
<body>
    <?php
    $str = 'Techstudy - the Debugging Solution website';
      // remplaçons le the par best
    echo preg_replace('/the/', 'Best', $str, 1)."\n";
    ?>
</body>
</html>