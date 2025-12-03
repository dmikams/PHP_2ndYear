<?php
/* 
HANDS ON 1 - PRELIM QUIZ
SANCHEZ, DANNAH MIKAYLA M. 
WD-203
DECEMBER 3, 2025
 */

 $name = "Mika";
 $greeting = "Hello!";

    if ($name) {
        $greeting = "Hello and Welcome Back, " . $name . "!" ;
    }

$product = "Lady Dior Bag";
$cost = 10; 
$totals = [];

    for ($i = 1; $i <=15; $i++){
        $subtotal = $cost * $i;
        $discount = $cost /100 * 4;

        $totals[$i]= $subtotal - $discount;
    }

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

    <p><?= $greeting ?><p>
    <h2><?= $product ?></h2>

    <table>
        <tr>
            <th>PACKS</th>
            <th>PRICE</th>
        </tr>

    <?php
    foreach ($totals as $quantity => $price):
    ?>

    <tr>
        <td>
            <?=$quantity?> 
            <?php ($quantity == 1) ? $display = "pack" : $display = "packs"; 
            echo $display;?>
        </td>
        <td><?=$price?></td>
    </tr>
    <?php endforeach ?> 
    </table>

    <?php include "includes/footer.php" ?>

</body>
</html>