<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i <= 100; $i++) {
            echo ("$i,");
    }
    
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i %2== 0) {
            echo ("<span style=\"font-weight: 700;\">$i,</span>");
        }
        else{
            echo ("$i,");
        }
            
            
    }
    
    ?>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for ($i = 1; $i < 10; $i++) {
        echo("<p>$i ".(10-$i)."</p>");
    }
    ?>
    
</body>
</html>