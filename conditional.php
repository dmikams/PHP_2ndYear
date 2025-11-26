<?php
//SANCHEZ, Dannah Mikayla M. | WD-203
//PRLM Hands On Module 2 | CONDITIONAL STATEMENTS
//NOVEMBER, 26, 2025

$name = "Jennie";

//1. IF ELSE
$stocks = 10;
    if ($stocks > "0") {
        $message = "We still have some stocks left.";
    } else {
        $message = "We have no more stocks.";
    }

// 2. SWITCH
    $shade = "coral";
        switch ($shade) {
            case "pink":
                $choice = "A pink blush!";
                break;
            case "coral":
                $choice = "A coral blush!";
                break;
            case "red":
                $choice =  "A red blush!";
                break;
            default:
                $choice =  "You might like our best-seller, mauve pink!";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blush Store</title>
    <link rel = "stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'header.php'?> 
    <h1>The Blush Store</h1>
    <h2>Hello <?= $name ?>, Welcome Back!</h2>
    <p> <?= $message ?></p><br>
    
    <p>--------------------</p>
    <h2>Your Order:</h2>
    <p> <?=$choice?> </p>

    <?php include 'footer.php'?> 
</body>
</html>