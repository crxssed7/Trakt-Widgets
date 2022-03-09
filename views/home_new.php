<?php

$quotes = array (
    "Ooohhhhhhhhh!!!!!^- Regular Show",
    "I'm Pickle Rickkk!!!!^- Rick, Rick and Morty",
    "Bazinga!^- Sheldon Cooper, The Big Bang Theory",
    "I am the danger, I am the one who knocks.^- Walter White, Breaking Bad",
    "You shall not pass!^- The Lord of the Rings",
    "Wubalubadubdub!^- Rick, Rick and Morty",
    "D'oh!^- Homer Simpson, The Simpsons",
    "Cool cool cool cool cool cool cool cool.^- Jake Peralta, Brooklyn Nine-Nine",
    "We're all goofy goobers yeah!^- Spongebob, Spongebob Square Pants",
    "That's what she said.^- Michael Scott, The Office (US)",
    "Oh my God, they killed Kenny!^- South Park",
    "Oh my God, its happening. Everybody stay calm!^- Michael Scott, The Office (US)",
    "Oh hello, Jackie!^- Jim Bell, Friday Night Dinner",
    "I'm gonna wreck it!^- Ralph, Wreck-it Ralph",
    "Jolly good show!^- Pops, Regular Show",
    "Hamboninggggggg!^- Rigby, Regular Show",
    "You were the chosen one!^- Obi-Wan Kenobi, Star Wars",
    "ARE YOU WILLING TO FIGHT?!^- Parzival, Ready Player One",
    "Going outside is highly overrated^- Anorak, Ready Player One",
    "Dude, am I in the frame?^- Soos, Gravity Falls",
    "Bacon Pancakes, making Bacon Pancakes!^- Jake, Adventure Time",
    "This is the way.^- Din Djarin, The Mandalorian",
    "YUMYAN OWNS YOU ALL!^- Yumyan, Kipo and the age of Wonderbeasts",
    "Here's to another lousy millennium 🍻^- Phillip J Fry, Futurama",
    "You were my brother Anakin!^- Obi-Wan Kenobi, Star Wars",
    "It's over Anakin, I have the high ground!^- Obi-Wan Kenobi, Star Wars",
    "General Kenobi!!!!^- General Grievous, Star Wars",
    "Be careful what you wish for, Parker^- Dr. Strange, Spider-Man: No Way Home",
    "I am inevitable^- Thanos, Avengers: Endgame",
    "I, am Iron Man^- Tony Stark, Avengers: Endgame",
    "Things used to be awesome, but now they're kinda terrifying^- Wade Watts, Ready Player One"
);

$ran = array_rand($quotes);
$single_quote = $quotes[$ran];

$arr = explode("^",$single_quote);

$str1 = $arr[0];
$str2 = $arr[1];

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
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"><?php echo $str1; ?></text>  

    <text x="50%" y="75%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="smaller"><?php echo $str2; ?></text>  

</svg>
