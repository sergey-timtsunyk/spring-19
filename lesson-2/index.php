<h1>Привет!</h1>

<?php

    $str = 'Hi!';

    if (1) {
        $str = "Сергей";
        $str = $str . "+DEV";
    }

    echo $str."<br>";


    $var = 1;
    $var = $var + 10;
    $var1 = &$var;

    echo "var = $var<br>";
    echo "var1 = $var1<br>";

    $var = 0;

    echo "______________<br>";
    echo "var = $var<br>";
    echo "var1 = $var1<br>";

    // Коментарий не выводится!
    # Коментарий не выводится!
    /* Коментарий не выводится! */
    //include "test.php";
?>

