<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shortest-Longest</title>
</head>
<body>
    <?php
        $my_array = array("bmw","jeep","dastun","ferrari","Honda");
        //recherche la chaine la plus courte et la plus longue
        $new_array = array_map('strlen', $my_array);
        echo " la longueur de chaîne la plus courte est : ". min($new_array).'.'."<br>";
        echo " la longueur de chaîne la plus longue est : ".  max($new_array).'.';
    ?>
</body>
</html>