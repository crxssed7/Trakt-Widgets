<?php

$quotes = array (
    "Ooohhhhhhhhh!!!!!^Regular Show",
    "I'm Pickle Rickkk!!!!^Rick, Rick and Morty",
    "Bazinga!^Sheldon Cooper, The Big Bang Theory",
    "I am the danger, I am the one who knocks.^Walter White, Breaking Bad",
    "Nobody exists on purpose.^Morty, Rick and Morty",
    "Bird is the word.^Peter Griffin, Family Guy",
    "You shall not pass!^The Lord of the Rings",
    "Wubalubadubdub!^Rick, Rick and Morty",
    "D'oh!^Homer Simpson, The Simpsons",
    "Cool cool cool cool cool cool cool cool.^Jake Peralta, Brooklyn Nine-Nine",
    "We're all goofy goobers.^Spongebob, Spongebob Square Pants",
    "That's what she said.^Michael Scott, The Office (US)",
    "Oh my God, they killed Kenny!^South Park",
    "Oh my God, its happening. Everybody stay calm!^Michael Scott, The Office (US)",
    "Oh hello, Jackie.^Jim Bell, Friday Night Dinner",
    "I'm gonna wreck it!^Ralph, Wreck-it Ralph",
    "Jolly good show!^Pops, Regular Show",
    "Hamboninggggggg.^Rigby, Regular Show",
    "You were the chosen one!^Obi-Wan Kenobi, Star Wars",
    "ARE YOU WILLING TO FIGHT?!^Parzival, Ready Player One",
    "Going outside is highly overrated.^Anorak, Ready Player One",
    "Dude, am I in the frame?^Soos, Gravity Falls",
    "Bacon Pancakes, making Bacon Pancakes!^Jake, Adventure Time",
    "This is the way.^The Mandalorian",
    "YUMYAN OWNS YOU ALL!^Yumyan, Kipo and the age of Wonderbeasts",
    "Here's to another lousy millennium 🍻^ Phillip J Fry, Futurama"
);

$ran = array_rand($quotes);
$single_quote = $quotes[$ran];

?>

<svg id="poster_watched" width="500" height="250" viewBox="0 0 500 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <style>
    <?php require 'fonts/Exo-2.php'; ?>
    text {
      font-family: 'Exo 2', sans-serif;
    }
    </style>
  </defs>

    <!-- Text -->
    <rect x="0" y="0" width="500" height="250" fill="black" rx="10"/>
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"><?php echo $single_quote; ?></text>  

</svg>