<?php require __DIR__.('/partials/head.php'); ?>

  <form method="POST" action="index.php">
    <input type="hidden" name="uri" value="<?= $formURI ?>">
    <label for="name">Enter your name</label>
    <input type="text" name="name" id="name">
    <button type="submit">Submit</button>

  </form>

<?php require __DIR__.('/partials/footer.php'); ?>