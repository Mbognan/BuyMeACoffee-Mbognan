<?php if (!empty($name)): ?>
<p>  Hello <?= $name ?> <?= date('H:i:s') ?> </p>
<?php else: ?>
  <p>Welcome Player!</p>
<?php endif; ?>


