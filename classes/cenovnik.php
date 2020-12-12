<?php
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenovnik</title>
</head>
<body>
    <?php 
    $testObject =new Test();
    echo $testObject->getCenovnik();
    ?>

</body>
</html>