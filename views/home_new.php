<?php

$quotes = array (
    "Ooohhhhhhhhh!!!!!",
    "I'm Pickle Rickkk!!!!",
    "Bazinga!",
    "I am the danger, I am the one who knocks.",
    "Nobody exists on purpose.",
    "Bird is the word.",
    "You shall not pass!",
    "Wubalubadubdub!",
    "D'oh!",
    "Cool cool cool cool cool cool cool cool.",
    "We're all goofy goobers.",
    "That's what she said.",
    "Oh my God, they killed Kenny!",
    "Oh my God, its happening. Everybody stay calm!",
    "Oh hello, Jackie.",
    "I'm gonna wreck it!",
    "Jolly good show!",
    "Hamboninggggggg.",
    "You were the chosen one!",
    "ARE YOU WILLING TO FIGHT?!",
    "Going outside is highly overrated.",
    "Dude, am I in the frame?",
    "Hoard toilet paper, hoard it like it’s gold, cause it is.",
    "I don't have friends, I've just got one",
    "Bacon Pancakes, making Bacon Pancakes!",
    "This is the way.",
    "YUMYAN OWNS YOU ALL!",
    "Here's to another lousy millennium 🍻"
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
  
   <!-- <g id="text" width="200" height="150">
        <rect width="200" height="150" fill="black" > 
            <text x="50%" y="50%" fill="#e6e6e6" font-size="20" dominant-baseline="bottom" text-anchor="left"></text>
        </rect>
        
    </g> -->
    <rect x="0" y="0" width="500" height="250" fill="black" rx="5"/>
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"><?php echo $single_quote; ?></text>  

</svg>