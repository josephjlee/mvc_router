<?php require __DIR__.('/partials/head.php'); ?>

<div class="box1 boxRounded">
  <ul>
  <?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
  <?php endforeach; ?>
  </ul>
</div>

<?php require __DIR__.('/partials/footer.php'); ?>