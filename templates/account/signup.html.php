<?php  if(!empty($error_message)): ?>
  <?= $error_message; ?>
<?php endif; ?>

<div class="center">
  <form method="post" action="<?= site_url('signup')?>">
  <p> 
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required="required">
  </p>
  <p> 
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required="required">
  </p>
  <p> 
    <label for="password">Password</label>
    <input type="text" name="password" id="password" required="required">
  </p>
  <button type="submit" name="signup_button" value="1">Sign Up</button>
  </form>
</div>