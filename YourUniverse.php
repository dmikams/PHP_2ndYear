<?php

//references used for lyrics and foreach commad
//LYRICS: https://genius.com/Rico-blanco-your-universe-lyrics
//CODE REF: https://www.w3schools.com/php/php_looping.asp
// https://www.w3schools.com/php/php_looping_foreach.asp

//3 string variables
$title = "Your Universe";
$artist = "Rico Blanco";  
$mood = "happy";

//Numeric variables
$verseCount = 2; 
$repeatChorus = 3;
$bridgeCount = 1;
$outroCount = 1;
$nounsCount = 11;
$verbsCount = 16;
$adjectivesCount = 7;

//Operators and Juggling
$totalSection = $verseCount + $repeatChorus + $bridgeCount + $outroCount;
$lines = "There are " . ($verseCount + 0) . " verse in the lyrics."; 
$chorusRepeatText = "Chorus will repeat " . ($repeatChorus + 0) . " times.";
$info = "You can learn " . ($nounsCount) . " Nouns, " . ($verbsCount) . " Verbs, and " . ($adjectivesCount) . " Adjectives."; 


//array of nouns
$nouns = [
    "rain", "face", "smile", "tiredness", "fear", "joy", "universe", "hand", "heart", "clouds", "stars",
];

//array of verbs and adjectives
$verbs = [
    "tell", "fall", "replace", "feel", "know", "say", "make", "think", "realize", "hold", "lose", "photograph", "sing", "laugh", "be", "thank"
];

$adjectives = [
    "golden", "summer", "tired", "afraid", "precious", "lucky", "other"
];

// Array of Song section 
$verse1 = [
    "Tell me something",
    "When the rain falls on my face",
    "How do you quickly replace it with",
    "A golden summer smile?",
    "Tell me something",
    "When I'm feelin' tired and afraid",
    "How do you know just what to say",
    "To make everything alright?"];

$chorus = [
    "I don't think that you even realize",
    "The joy you make me feel when I'm inside",
    "Your universe",
    "You hold me like I'm the one who's precious",
    "I hate to break it to you but it's just",
    "The other way around",
    "You can thank your stars all you want but",
    "I'll always be the lucky one"];

$verse2 = [
    "Tell me something",
    "When I'm 'bout to lose control",
    "How do you patiently hold my hand",
    "And gently calm me down?",
    "Tell me something",
    "When you sing and when you laugh",
    "Why do I always photograph",
    "My heart flying way above the clouds?"];

$bridge = [
    "Woah",
    "Woah",
    "Woah"];

$outro = [
    "You can thank your stars all you want but",
    "I'll always be the lucky one",
    "I'll always be the lucky one",
    "I'll always be the lucky one"
];

//Display function for calling
function display($lyrics) {
    foreach($lyrics as $line){
        echo $line;
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> Lyrics</title>

    <style>
        body{
            font-family: 'Arial', sans-serif;
            background-color: seashell;
            color: #222;
            text-align: center;
            padding: 20px;
        }

        h1,h3{
            text-align: center;
            margin-bottom: 15px;
        }

        .section{
            margin-top: 20px;
            padding: 20px;
            background: #fff;
            border: 2px solid #ccc;
            font-size: 15px;
        }

        .section h5{
            font-style: oblique;
            font-weight: bold;
            font-size: 18px;
        }
        
        .line {
            margin: 2px 0;
        }

        footer p{
            color: #555;
            font-style: italic;
            font-size: 13px;
        }
    </style>
</head>
<body>

<body>
    <h1><?= $title ?></h1>
    <h3><?= $artist ?></h3>

    <h4>Verse 1</h4>
    <?= display($verse1) ?>


    <h4>Chorus</h4>
    <?= display($chorus) ?>

    <h4>Verse 2</h4>
    <?= display($verse2) ?>

    <h4>Chorus</h4>
    <?= display($chorus) ?>

    <h4>Bridge</h4>
    <?= display($bridge) ?>

    <h4>Chorus</h4>
    <?= display($chorus) ?>

    <h4>Outro</h4>
    <?= display($outro) ?>

    <div class = section>
    <h5>Information:</h5>
    Total Sections: <?= $totalSection ?><br>
    <?= $lines ?><br>
    <?= $chorusRepeatText ?><br>
    <?= $info ?>

    </div>

<footer>
    <p>Created by Dannah Mikayla M. Sanchez | WD-203</p>
</footer>

</body>
</html>