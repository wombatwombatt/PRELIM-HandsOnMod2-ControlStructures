<!--Bermas, Estella Mae E.
    CYB-201
    November 27, 2025 -->
<?php

$qty = 7;
// if...elseif...else (multiple conditions: if quantity is more than or equal to 10, 5, or else)
if ($qty >= 10) {
    $discount = '20%';
} elseif ($qty >= 5) {
    $discount = '10%';
} else {
    $discount = '0%';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>if...else...if</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Applicable Discount</h1>

    <div class="card">
      <p class="muted">Tiered discount based on quantity:</p>
      <p class="muted">Quantity of 10 and above = 20% Discount</p>
      <p class="muted">Quantity of 5-9 = 10% Discount</p>
      <p class="muted">Quantity of 4 and below = No Discount</p>

      <p class="box small">Qty: <?= $qty; ?> — Discount: <?= $discount; ?></p>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
