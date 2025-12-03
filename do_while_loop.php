<!--Bermas, Estella Mae E.
    CYB-201
    December 3, 2025 -->

<?php
$step = 1;
$packing_steps = [];
// do...while loop: simulates packing steps for an order (always runs at least once)
do {
    $packing_steps[] = "Step {$step}: " . ($step === 1 ? 'Pick item from shelf' : 'Pack and label');
    $step++;
} while ($step <= 2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Do...While Loop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Green Thumb Succulents</h1>

    <h2>Packing Process</h2>
    <div class="card">
      <?php foreach ($packing_steps as $p): ?>
        <p class="box-inline"><?= $p; ?></p>
      <?php endforeach; ?>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
