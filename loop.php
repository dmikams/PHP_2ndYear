<?php
//SANCHEZ, Dannah Mikayla M. | WD-203
//PRLM Hands On Module 2 | PHP LOOPS
//NOVEMBER, 26, 2025
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blush Store 2</title>
    <link rel = "stylesheet" href="css/styles.css">
</head>

<?php include 'header.php'?> 
<body>
    <h1>The Blush Store</h1>
    <h2>Prices for each Bundle</h2>

    <?php
        $counter = 1;
        $bundle = 4;
        $price = 200;

        //1. WHILE LOOP
        while ($counter <= $bundle){
            echo '<div class="while">';
            echo $counter;
            echo ' bundle/s cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }

        // 2. FOREACH LOOP
            $shades = [
                "pink" => 55,
                "coral" => 40, 
                "red" => 45, 
                "mauve pink" => 60,
            ];
    ?>

    <h1>Updated Listing</h1>
    <h2>Item and Price List</h2>
    <table>
        <tr>
            <th>Shade</th>
            <th>Price</th>
        </tr>

        <?php foreach ($shades as $item => $prices) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $prices ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php 
    $bestSellers = ['Mauve Pink', 'Pink'];
    ?>

    <h2>Best Sellers</h2>
    <?php foreach ($bestSellers as $shades) { ?>
        <p><?= $shades ?></p>
    <?php } ?>

    <?php include 'footer.php'?> 

</body>
</html>