<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- <?php
$convert_to_upper = "hello";
$convert_to_lower = "HIIIII";
$first_letter = "abdallah";
$second_letter = "Abdallah";
echo strtoupper($convert_to_upper)."<br>";
echo strtolower($convert_to_lower)."<br>";
echo ucfirst($first_letter)."<br>";
echo lcfirst($second_letter)."<br>";

?> -->

<!-- <?php 
$numeric_string = "085119";
$time_string = strtotime($numeric_string);
echo date ('h:i:s' , $time_string )."<br>";
?> -->

<!-- <?php 
$about_me = "I am a full stack developer at orange coding academy";
if(str_contains($about_me, "orange")){
    echo "word found";
}
?> -->

<!-- <?php 
$email = "info@orange.com";
$at_pos = strpos($email, "@");
echo substr($email, 0, $at_pos);
?> -->

<!-- <?php 
$email = "info@orange.com";
echo substr($email, -3);
?> -->

<!-- <?php 
$random = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
echo substr(str_shuffle($random),0,12);
?> -->

<!-- <?php 
$first_sentence = "That new trainee is so smart";
echo str_replace("That", "Our", $first_sentence);
?> -->

<!-- <?php 
$string1 = "dragonball";
$string2 = "dragonboll";
if($string1 > $string2){
    $short = $string2;
}else {
    $short = $string1;
}
for($i = 0; $i<strlen($short) ; $i++){
    if($string1[$i] !== $string2[$i]){
        echo "First difference between two strings at position ".$i." : ".$string1[$i]." vs ".$string2[$i];
        break;
    }
}
?> -->

<!-- <?php 
$song = "Twinkle, twinkle, little star";
var_dump(explode(" ", $song));
?> -->

<!-- <?php 
$letter_a = "a";
$next_letter = ++$letter_a;
echo $next_letter[0];
$letter_z = "z";
$next_letter_z = ++$letter_z;
echo $next_letter_z[0];
?> -->

<!-- <?php 
$fox = "The brown fox";
$new_word = "quick ";
echo substr_replace($fox, $new_word, 4,0);
?> -->

<!-- <?php 
$number_with_zeros = "00000657022.24";
echo str_replace("0","",$number_with_zeros);
?> -->

<!-- <?php 
$new_fox = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox","", $new_fox);
?> -->

<!-- <?php 
$neww_fox = "The quick brown fox jumps over the lazy dog---";
echo trim($neww_fox,"-");
?> -->

<!-- <?php 
$special = "/*1+2/3*2.2-3/4*3";
echo str_replace(array("/","+","*","-","."), " ", $special);

?> -->

<!-- <?php 
$old_fox = "The quick brown fox jumps over the lazy dog";
$new_array = explode(" ", $old_fox);
$five_words = implode(" ", array_splice($new_array, 0,5));
echo $five_words;
?> -->

<!-- <?php 
$comma = "2,543.12";
echo str_replace(",", "",$comma);
?> -->

<!-- <?php 
for ($char = 'a'; $char <= 'z'; $char++) {
    if($char === "z"){
        echo $char[0]." ";
        break;
    }
    echo $char[0]." ";
}
?> -->
</body>
</html>
