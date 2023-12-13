<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?= site_url() ?>" class="brand-logo">
      <?= site_name() ?>
      </a>
      <ul class="right hide-on-med-and-down">
        <?php if (!empty($isUserLogin) && $isUserLogin === true): ?>
              <li>
                <a href="<?= site_url('')?>">Home</a>
              </li>
              <li>
                <a href="#">Edit</a>
              </li>
              
              <li>
                <a href="<?= site_url('/payment')?>">Payment</a>
              </li>
              
              <li>
                <a href="<?= site_url('/account/logout')?>">Logout</a>
              </li>
 
      <?php else: ?>
              <li>
                <a href="<?= site_url('')?>">Home</a>
              </li>
              <li>
                <a href="<?= site_url('/signup')?>">Sign Up</a>
              </li>
              <li>
                <a href="<?= site_url('/signin')?>">Login</a>
              </li>

         
      <?php endif; ?>

      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


