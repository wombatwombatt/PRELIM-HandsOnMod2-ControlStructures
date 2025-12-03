<?php
// Step 1: Turns on strict types
declare(strict_types=1);
/*  Bermas, Estella Mae E.
    CYB-201
    December 3, 2025 */

$succulents = [ // Step 2: Multidimensional array storing product data (price and stock)
    'Echeveria' => ['price' => 120.00, 'stock' => 12],
    'Jade Plant' => ['price' => 150.00, 'stock' => 26],
    'Aloe Vera' => ['price' => 90.00, 'stock' => 8],
    'String of Pearls' => ['price' => 75.00, 'stock' => 5],
    'Snake Plant' => ['price' => 135.00, 'stock' => 15],
    'Cactus Mix' => ['price' => 85.00, 'stock' => 7],
    'Haworthia' => ['price' => 110.00, 'stock' => 18],
    'Sedum' => ['price' => 95.00, 'stock' => 9],
];

$tax_rate = 12; // Step 3: Global variable for tax rate

function get_reorder_message(int $stock_level): string { // Step 4: Function to determine if reorder is needed | Step 5: Ternary operator checks if stock level is less than 10 (Returns 'Yes' if stock < 10, otherwise 'No'
    return $stock_level < 10 ? 'Yes' : 'No';
}
// Step 6: Function to calculate total value of stock
function get_total_value(float $price, int $quantity): float {
    // Step 7: Returns price multiplied by quantity
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float { // Step 8: Function to calculate tax due on stock
    return ($price * $quantity) * ($tax_rate / 100); // Step 9: Returns total tax due |  Calculation: (price × quantity) × (tax_rate / 100)
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Control</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include __DIR__ . '/nav.php'; ?>
    <div class="container">
    <h1>Green Thumb Succulents</h1>

    <h2>Stock Control</h2>
    <div class="stock-table-wrapper">
        <table class="stock-table">
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>STOCK</th>
                <th>RE-ORDER</th>
                <th>TOTAL VALUE</th>
                <th>TAX DUE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($succulents as $product_name => $data): ?> <!-- Step 10: foreach loop works through products in $succulents array -->
                <tr>
                    <td><?= $product_name; ?></td> <!-- Step 11: Table row created, product name written in <td> -->
                    <td><?= $data['stock']; ?></td> <!-- Step 12: Stock level from $data array written in table cell -->
                    <!-- Note: Instructions say get_order_message() in Step 13, but Step 4 defines get_reorder_message() -->
                    <td><?= get_reorder_message($data['stock']); ?></td> <!-- Step 13: get_reorder_message() called with stock level, value shown in table -->
                    <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2); ?></td> <!-- Step 14: get_total_value() called with price and quantity, value shown in table -->
                    <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2); ?></td>  <!-- Step 15: get_tax_due() called with price, quantity, and tax rate, value shown in table -->
                </tr>
            <!-- Step 16: Closing brace ends code block, loop repeats for each element -->
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
    </div>
</body>
</html>
