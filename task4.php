<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php 
    $liczba = rand(5,10);
    for ($i = 0; $i < $liczba; $i++) {
        echo "<p></p>";
    for ($j = 0; $j < $liczba; $j++) {
        $liczba1 = rand(100,999);
        if($liczba1 %2 == 0) {
            echo("<span style=\"background-color:cyan; \"> $liczba1 </span>") ;
        }
        else{
            echo("<span> $liczba1 </span>") ;
        }

    }
    }
    ?>
</body>
</html>