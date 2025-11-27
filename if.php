<!--Bermas, Estella Mae E.
    CYB-201
    November 27, 2025 -->
<?php

$total = 60;
$shipping = 'P50';
// if condition (only runs when condition that the total is more than 50 is true)
if ($total > 50) {
    $shipping = 'Free';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>if</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Total</h1>

    <div class="card">
      <p class="muted">Shipping is free if your total is more than 50!</p>
      <p class="box">Total: P<?= $total; ?> — Shipping: <?= $shipping; ?></p>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
