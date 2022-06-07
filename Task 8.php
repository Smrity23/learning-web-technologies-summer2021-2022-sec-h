<?php

    $array = [

        [1,2,3,'A'],

        [1,2,'B','C'],

        [1,'D','E','F']

    ];

$k=2;

    for ($i = 0; $i<3; $i++){    

        for($j = 0; $j <=$k; $j++){

        echo $array[$i][$j]." ";

    }

    $k--;

    echo "<br/>";

}

$x=3;

for ($i = 0; $i<=2; $i++){    

    for($j = $x; $j <=3; $j++){

    echo $array[$i][$j]." ";

}

$x--;

echo "<br/>";

}

?>