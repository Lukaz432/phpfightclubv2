<?php

$zodziai = [
    'Lukas',
    'pareigunas',
    'moteris', 
    'vyras',
    'naktis', 
    'prietema',
    'saulelydis',
    'vidurnaktis',
    'bego',
    'pasove',
    'pamylejo',
    'isjunge',
    'automobiliu',
    'motociklu',
    'irankiu',
    'ranka',
    'sankryzoje',
    'namuose',
    'greitkelyje',
    'televizijos_bokstas',
    'greitai',
    'apsvaigusiai',
    'tingiai',
    'mikliai'
    ];


for ($i = 0; $i <  rand(100,300); $i++) {
    $random_word = $zodziai[(rand(0, count($zodziai) - 1))];
    $rasinys .= " $random_word";
}


$h1 = 'rasinys';


?>
<html>
    <head>
        <title>Class Work</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <ul>
            <li>
                <?php print $rasinys ?>
            </li>
        </ul>
    </body>
</html>