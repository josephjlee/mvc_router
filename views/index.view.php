<?php require __DIR__.('/partials/head.php'); ?>
<div class="box1 boxRounded">
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
</div>

<?php require __DIR__.('/partials/footer.php'); ?>