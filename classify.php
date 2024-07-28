<?php
/*
// Your JSON array of images
$images = [
    "10_of_clubs.png",
    "10_of_diamonds.png",
    "10_of_hearts.png",
    "10_of_spades.png",
    "2_of_clubs.png",
    "2_of_diamonds.png",
    "2_of_hearts.png",
    "2_of_spades.png",
    "3_of_clubs.png",
    "3_of_diamonds.png",
    "3_of_hearts.png",
    "3_of_spades.png",
    "4_of_clubs.png",
    "4_of_diamonds.png",
    "4_of_hearts.png",
    "4_of_spades.png",
    "5_of_clubs.png",
    "5_of_diamonds.png",
    "5_of_hearts.png",
    "5_of_spades.png",
    "6_of_clubs.png",
    "6_of_diamonds.png",
    "6_of_hearts.png",
    "6_of_spades.png",
    "7_of_clubs.png",
    "7_of_diamonds.png",
    "7_of_hearts.png",
    "7_of_spades.png",
    "8_of_clubs.png",
    "8_of_diamonds.png",
    "8_of_hearts.png",
    "8_of_spades.png",
    "9_of_clubs.png",
    "9_of_diamonds.png",
    "9_of_hearts.png",
    "9_of_spades.png",
    "ace_of_clubs.png",
    "ace_of_diamonds.png",
    "ace_of_hearts.png",
    "ace_of_spades.png",
    "ace_of_spades2.png",
    "black_joker.png",
    "jack_of_clubs.png",
    "jack_of_clubs2.png",
    "jack_of_diamonds.png",
    "jack_of_diamonds2.png",
    "jack_of_hearts.png",
    "jack_of_hearts2.png",
    "jack_of_spades.png",
    "jack_of_spades2.png",
    "king_of_clubs.png",
    "king_of_clubs2.png",
    "king_of_diamonds.png",
    "king_of_diamonds2.png",
    "king_of_hearts.png",
    "king_of_hearts2.png",
    "king_of_spades.png",
    "king_of_spades2.png",
    "queen_of_clubs.png",
    "queen_of_clubs2.png",
    "queen_of_diamonds.png",
    "queen_of_diamonds2.png",
    "queen_of_hearts.png",
    "queen_of_hearts2.png",
    "queen_of_spades.png",
    "queen_of_spades2.png",
    "red_joker.png"
];

$values = [
    'ace' => 1,
    'jack' => 11,
    'queen' => 12,
    'king' => 13,
];

// Group images by suit
$groupedImages = [];
foreach ($images as $image) {
    $chars = explode("_", $image);
    if (count($chars) == 3) {
        $row = [
            'file' => $image,
            'value' => isset($values[$chars[0]]) ? $values[$chars[0]] : (int)$chars[0],
            'type' => str_replace(["2",".png"], ["",""], $chars[2])
        ];

        array_push($groupedImages, $row);
    }
}

usort($groupedImages, function($a, $b) {
    return strcmp($a['type'], $b['type']);
});

// Output grouped images as JSON
$text = json_encode($groupedImages, JSON_PRETTY_PRINT);
file_put_contents('pack.json', $text);
echo $text;
*/

$rows = json_decode(file_get_contents("pack.json"), true);

for ($i=0; $i < count($rows); $i++) { 
    $rows[$i]['color'] = in_array($rows[$i]['type'], ["diamonds","hearts"]) ? "red" : "black";
}

$text = json_encode($rows, JSON_PRETTY_PRINT);
file_put_contents('pack.json', $text);
echo $text;
?>