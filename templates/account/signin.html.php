<div class="center">
  <form method="post" action="<?= site_url('/signin')?>">

  <p> 
    <label for="email">Email</label>
    <input type="text" name="email" id="email" required="required">
  </p>
  <p> 
    <label for="password">Password</label>
    <input type="text" name="password" id="password" required="required">
  </p>
  <button type="submit" name="signin_button" value="1">Login</button>
  </form>
</div>