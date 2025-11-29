<?php 
// IF ELSE
$stocks = 10;
    if ($stocks > "0") {
        $message = "We still have some stocks left.";
    } else {
        $message = "We have no more stocks.";
    }

// SWITCH
$flower = "";
switch ($flower){
    case 'rose':
        $choice = "You selected a classic rose!";
        break;
    case 'tulip':
        $choice = "You selected a tulip!";
        break;
    case 'carnation':
        $choice = "You selected a carnation!";
        break;
    default:
        $choice = "You might love our best-selling flower, mixed lilies!";
}

// MATCH
$day = 'Saturday';
$offer = match ($day){
    'Monday' => 'Free 1 random flower!',
    'Tuesday' => 'No sale today see you tomorrow!',
    'Wednesday' => 'Enjoy a 5% off discount',
    'Thursday' => 'Free 1 flower per bundle purchase',
    'Friday' => '10% off on any bundle purchase',
    'Saturday', 'Sunday' => 'Weekend gift ahead!',
};

// WHILE LOOP
$flowerTypes = ["Tulip", "Rose", "Carnation", "Mixed Lilies"];
$counter = 1;
$bundle = 4;
$price = 200;
$bundleOutput = "<h2>Flower Bundles</h2>";
while ($counter <= $bundle){
    $bundleOutput .= '<div class="while">';
    $bundleOutput .= $counter . ' bundle/s cost $' . ($price * $counter);
    $bundleOutput .= '<br></div>';
    $counter++;
}

// FOREACH LOOP
$flowers = [
    "rose" => 90,
    "tulip" => 120, 
    "carnation" => 100, 
    "mixed lilies" => 150,
];

$bestSellers = ['Mixed Lilies', 'Tulip'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?> 

    <section class="hero">
        <div class="hero-content">
        </div>
    </section>

    <section class="info-boxes">
        <div class="info-card">
            <h3>Status</h3>
            <p><?= $message ?></p>
        </div>
        <div class="info-card">
            <h3>Your Choice</h3>
            <p><?= $choice ?></p>
        </div>
        <div class="info-card">
            <h3>Today's Offer</h3>
            <p><?= $offer ?></p>
        </div>
    </section>

    <section class="flowers">
        <h2>Available Flowers</h2>
        <table>
            <tr><th>Flower</th><th>Price</th></tr>
            <?php foreach ($flowers as $type => $price) { ?>
                <tr>
                    <td><?= $type ?></td>
                    <td>$<?= $price ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>

    <section class="best-sellers">
        <h2>Best Sellers</h2>
        <?php foreach ($bestSellers as $flowerName) { ?>
            <p><?= $flowerName ?></p>
        <?php } ?>
    </section>

    <?php include 'includes/footer.php'; ?> 
</body>
</html>