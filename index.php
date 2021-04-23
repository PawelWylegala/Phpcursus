<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 1</title>
    <style>

    </style>
</head>

<body>




    <?php

    $titiel = "Opdracht1";



    $tekst = "X gon' give it to ya Fuck waiting for you to get it on your own, X gon' deliver to ya Knock knock, open up the door, it's real With the non-stop, pop pop of stainless steel Go hard, getting busy wit it But I got such a good heart That I'll make a motherfucker wonder if he did it Damn right, and I'll do it again, cause I am right so I gots to win Break bread with the enemy, but no matter how many cats I break bread with I'll break who you sendin' me You motherfuckers never wanted nothing But your life saved, bitch, and that's on a light day I'm getting down, down like a nigga said Freeze! But won't be the one ending up on his knees Bitch please, if the only thing you cats did Was came out to play, stay out my way, motherfucker!";


    $patterns = array();
    $patterns[0] = '/Fuck/';
    $patterns[1] = '/motherfucker/';
    $patterns[2] = '/Bitch/';
    $replacements = array();
    $replacements[2] = '*****';
    $replacements[1] = 'mother(...)';
    $replacements[0] = '****';
    echo preg_replace($patterns, $replacements, $tekst);


    $AntalWorden = str_word_count($tekst);
    $AntalReplace = count($replacements);


    $eerstWord = ucfirst($tekst);
    $AntalEerstWorden = strlen($eerstWord);
    if (
        $AntalWorden >= 20
    ) {
        echo  "(...)";
    }

    echo "<table border='1'>";
    echo "<tr><th>Aantal woorden</th><th>Antal vervangen woorden</th><th>Aantal gecorrigeerde hoofdletters</th><th>Percentage vervangen woorden</th></tr>";
    $col_names = array("$AntalWorden", "$AntalReplace", "$AntalEerstWorden");



    // for ($i = 1; $i <= $total; $i++) {

    //     echo "<tr>";
    //     echo "<td>" . $i . "</td>";
    //     echo "<td>" . ($i * $mile) . "</td>";
    //     echo "<td>" . ($i * $mile) . "</td>";
    //     echo "<td>" . ($i * $mile) . "</td>";

    //     echo "</tr>";
    // }
    echo "<tr>";
    for ($i = 0; $i < count($col_names); $i++) {
        echo "<td>" . $col_names[$i] . "</td>";
    }
    echo "</tr>";


    if ($patterns > 2) {
        echo '<div class=“green”>Niet grof</div>';
    } ?>
</body>

</html>