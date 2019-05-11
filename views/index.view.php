<!DOCTYPE html>
<html>

<head>
  <title><?= $title; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <?= $intro; ?>

  <nav>
    <ul>
      <li><a href="controllers/about.php">About Us</a></li>
      <li><a href="controllers/about-culture.php">Our Culture</a></li>
      <li><a href="controllers/contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <ul>
    <?php foreach ($tasks as $task): ?>
      <li>
        <?php if($task->status): ?>
          <strike><?= $task->description; ?></strike>
        <?php else: ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>
