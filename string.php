<?php
// string lenght function
$name ="Taniya Silhi";
echo strlen($name);
echo "<br>";

// string replace function
echo str_replace("Hello", "Hi", "Hello Taniya");
echo "<br>";

//string that count words
echo str_word_count("Hey You There");
echo "<br>";

//string that reverse words
echo strrev($name);
echo "<br>";

// string position
echo strpos("Hello World", "o");
echo "<br>";

// string concatination
print_r(str_split("Taniya"));
echo "<br>";

// string concatination
echo str_concat("Taniya","Silhi");
echo "<br>";

// string compare
echo strcmp("Hello","Helloo");
echo "<br>";

// string to lower
echo strtolower("HEY WHATS'S UP");
echo "<br>";

// string to uppercase
echo strtoupper("hi");
echo "<br>";

// string to uppercase
echo ucwords("hi welcome");
echo "<br>";

echo strlen(md5("Taniya"));
echo "<br>";
echo md5("Taniya");
echo "<br>";

print_r(explode("Hello World",2));
echo "<br>";
?>