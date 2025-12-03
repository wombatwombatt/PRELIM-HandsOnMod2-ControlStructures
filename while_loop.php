<!--Bermas, Estella Mae E.
    CYB-201
    December 3, 2025 -->
<?php

$best_sellers = ['Echeveria', 'Jade Plant', 'Aloe Vera', 'String of Pearls'];

$idx = 0;
$top_picks = [];
// while loop: collects up to 3 top picks using while loop
while ($idx < 3 && $idx < count($best_sellers)) {
    $top_picks[] = $best_sellers[$idx];
    $idx++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>While Loop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/nav.php'; ?>
  <div class="container">
    <h1>Green Thumb Succulents</h1>

    <h2>Top Picks</h2>
    <div class="card">
      <?php foreach ($top_picks as $pick): ?>
        <p class="box-inline"><?= $pick; ?></p>
      <?php endforeach; ?>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
