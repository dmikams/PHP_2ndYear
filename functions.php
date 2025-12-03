<?php 
/* 
PRLM Assign Mod3 - Functions
SANCHEZ, Dannah Mikayla M.
WD-203
DECEMBER 03, 2025
*/

declare(strict_types = 1);

$flower_inventory = [
    "Rose" => ['price' => 90, 'stock' => 10],
    "Tulip" => ['price' => 120, 'stock' => 13],
    "Carnation" => ['price' => 100, 'stock' => 15],
    "Mixed lilies" => ['price' => 150, 'stock' => 25],
    "Daisy" => ['price' => 80, 'stock' => 20],
    "Sunflower" => ['price' => 95, 'stock' => 8],
    "Gypsophila" => ['price' => 110, 'stock' => 14],
    "Peony" => ['price' => 130, 'stock' => 23],
];

$tax_rate = 20;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax_rate): float {
    return ($price * $qty) * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom</title>
    <link rel="stylesheet" href="css/styles.css?v=3">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="flowers">
    <h2>STOCK CONTROL</h2>

    <table>
        <tr>
            <th>PRODUCT</th>
            <th>STOCK</th>
            <th>RE-ORDER</th>
            <th>TOTAL VALUE</th>
            <th>TAX DUE</th>
        </tr>

        <?php foreach ($flower_inventory as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td>₱<?= get_total_value($data['price'], $data['stock']) ?></td>
            <td>₱<?= get_tax_due($data['price'], $data['stock'], $tax_rate) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>