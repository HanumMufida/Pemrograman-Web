<!-- PENGGUNAAN REGEX PADA PHP -->
<?php
// soal 5.1
$pattern = '/[a-z]/';//Cocokan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
echo "<br><br>";
// ---------------------------------
// soal 5.2
$pattern1 = '/[0-9]+/';// Cocokan satu atau lebih digit.
$text1 = 'There are 123 apples.';
if (preg_match($pattern1, $text1, $matches)){
    echo "Cocokan: ". $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
// -----------------------------------
// soal 5.3
$pattern2 = '/apple/';
$replacement = 'banana';
$text2 = 'I like apple pie';
$new_text = preg_replace($pattern2, $replacement, $text2);
echo $new_text; // Output: "I like banana pie."
echo "<br><br>";
// ---------------------------------------
// soal 5.4
$pattern3 = '/go*d/';//Cocokan "god", "good", "gooood", dll.
$text3 = 'god is good.';
if (preg_match($pattern3, $text3, $matches1)){
    echo "Cocokan: ". $matches1[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
// -------------------------------------
// soal 5.5
$pattern4 = '/go?d/';//Cocokan "god", "good", "gooood", dll.
$text4 = 'god is good.';
if (preg_match($pattern4, $text4, $matches2)){
    echo "Cocokan: ". $matches2[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
// -----------------------------------
// soal 5.6
$pattern5 = '/go{n,m}d/';//Cocokan "god", "good", "gooood", dll.
$text5 = 'god is good.';
if (preg_match($pattern5, $text5, $matches3)){
    echo "Cocokan: ". $matches3[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
?>