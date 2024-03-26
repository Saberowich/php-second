<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php 
    
    $liczba = rand(5,30);
    for ($i = 0; $i < $liczba; $i++) {
        echo "<p></p>";
        $suma = 0;
    for ($j = 0; $j < $liczba; $j++) {
        $liczba1 = rand(100,999);
        $suma += $liczba1;
        if($liczba1 %2 == 0) {
            echo("<span style=\"background-color:cyan; \"> $liczba1 </span>") ;
        }
        else{
            echo("<span> $liczba1 </span>") ;
        }
        if($liczba - $j == 1){
            echo("<span style=\"background-color:red; \">$suma </span>") ;
        }

    }
    }
    ?>
</body>
</html>