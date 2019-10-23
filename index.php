<?php

$my_memories = [
    'ginklas',
    'suvis',
    'sirenos',
    'suolis',
    'adrenalinas',
    'pabegimas',
    'blykste',
 ];
$friend_memories = [
    'ginklas',
    'suvis',
    'klyksmas',
    'suolis',
    'mirtis',
    'pabegimas',
    'peilis',
 ];

$max_index = count($my_memories) -1;
$memory_index = rand(0, $max_index);
$memory_text = $my_memories[$memory_index];

$f_max_index = count($friend_memories) -1;
$f_memory_index = rand(0, $f_max_index);
$f_memory_text = $friend_memories[$f_memory_index];





$h1 = 'Kas buvo penktadieni?!';
$h2 = 'Luko prisiminimai';
$h3 = "Flashback: $memory_index : $memory_text";
$h4 = "Flashback: $f_memory_index : $f_memory_text";
?>
<html>
    <head>
        <title>Class Work</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>      
        <h1><?php print $h1?></h1>
        <h2><?php print $h2?></h2>
        <h3><?php print $h3?></h3>
        <ul>
            <?php foreach ($my_memories as $memory): ?>
            <li><?php print $memory; ?></li>
            <?php endforeach; ?>
        </ul>
        <h4><?php print $h4?></h4>
        <ul>
            <?php foreach ($friend_memories as $memory): ?>
            <li><?php print $memory; ?></li>
            <?php endforeach; ?>
        </ul>
        
    </body>
</html>