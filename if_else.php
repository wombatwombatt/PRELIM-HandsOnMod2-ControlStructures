<!--Bermas, Estella Mae E.
    CYB-201
    November 27, 2025 -->
<?php
$stock = 0; 

//if...else (if stock is 0, displays "In stock", else "Out of stock")
if ($stock > 0) {
    $availability = 'In stock';
} else {
    $availability = 'Out of stock';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>if..else</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Availability</h1>

    <div class="card">
      <p class="box small">Availability of stock: <?= $availability; ?></p>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
