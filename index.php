<?php
/* 
HANDS ON 1 - PRELIM QUIZ
SANCHEZ, DANNAH MIKAYLA M. 
WD-203
DECEMBER 3, 2025
 */

 $username = "Mika";
 $greeting = "Hello, " . $username . "!";
 
 $offer = [
    'item' => 'Lady Dior Bag',
    'quantity' => 2,
    'normal' => 1000,
    'discounted' => 950
 ]; 

 $usual_price = $offer['quantity'] * $offer['normal'];
 $offer_price = $offer['quantity'] * $offer['discounted'];
 $saving = $usual_price - $offer_price;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>balagBAG</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php require "includes/header.php" ?>
    <h2>MULTI-BUY OFFER</h2>
    <p><?= $greeting ?><p>

    <div class="saving">
        <h2>Save: $<?= $saving ?></h2>
    </div>

    <p>Buy 2 of our bags for $<?= $offer['discounted']?>. The usual price is $<?=$offer['normal']?>.</p>

    <img src="img/bag1.jpg" alt="Lady Dior Bag"/>

    <?php include "includes/footer.php" ?>
</body>
</html>