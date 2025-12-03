<!--Bermas, Estella Mae E.
    CYB-201
    December 3, 2025 -->
<?php

$best_sellers = ['Echeveria', 'Jade Plant', 'Aloe Vera', 'String of Pearls', 'Snake Plant', 'Cactus Mix', 'Haworthia', 'Sedum'];
$prices = [120, 150, 90, 75, 135, 85, 110, 95];
$catalog = [];
// for loop: builds a product catalog combining product names and prices
for ($i = 0; $i < count($best_sellers); $i++) {
    $catalog[] = [
        'name' => $best_sellers[$i],
        'price' => $prices[$i] ?? 0,
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>For Loop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Green Thumb Succulents</h1>

    <h2>Product Catalog</h2>
    <ul class="best-sellers">
      <?php for ($m = 0; $m < count($catalog); $m++): ?>
        <li><?= $catalog[$m]['name']; ?> — P<?= number_format($catalog[$m]['price'], 2); ?></li>
      <?php endfor; ?>
    </ul>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
