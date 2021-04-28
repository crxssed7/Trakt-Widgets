<?php

$quotes = array (
    "Ooohhhhhhhhh!!!!!\nRegular Show",
    "I'm Pickle Rickkk!!!!\nRick, Rick and Morty",
    "Bazinga!\nSheldon Cooper, The Big Bang Theory",
    "I am the danger, I am the one who knocks.\nWalter White, Breaking Bad",
    "Nobody exists on purpose.\nMorty, Rick and Morty",
    "Bird is the word.\nPeter Griffin, Family Guy",
    "You shall not pass!\nThe Lord of the Rings",
    "Wubalubadubdub!\nRick, Rick and Morty",
    "D'oh!\nHomer Simpson, The Simpsons",
    "Cool cool cool cool cool cool cool cool.\nJake Peralta, Brooklyn Nine-Nine",
    "We're all goofy goobers.\nSpongebob, Spongebob Square Pants",
    "That's what she said.\nMichael Scott, The Office (US)",
    "Oh my God, they killed Kenny!\nSouth Park",
    "Oh my God, its happening. Everybody stay calm!\nMichael Scott, The Office (US)",
    "Oh hello, Jackie.\nJim Bell, Friday Night Dinner",
    "I'm gonna wreck it!\nRalph, Wreck-it Ralph",
    "Jolly good show!\nPops, Regular Show",
    "Hamboninggggggg.\nRigby, Regular Show",
    "You were the chosen one!\nObi-Wan Kenobi, Star Wars",
    "ARE YOU WILLING TO FIGHT?!\nParzival, Ready Player One",
    "Going outside is highly overrated.\nAnorak, Ready Player One",
    "Dude, am I in the frame?\nSoos, Gravity Falls",
    "Bacon Pancakes, making Bacon Pancakes!\nJake, Adventure Time",
    "This is the way.\nThe Mandalorian",
    "YUMYAN OWNS YOU ALL!\nYumyan, Kipo and the age of Wonderbeasts",
    "Here's to another lousy millennium 🍻\n Phillip J Fry, Futurama"
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