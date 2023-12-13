   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?= site_url() ?>">
                <?php
                 if(!empty($isUserLogin) && $isUserLogin === true):?>
                  <img  src="assets/img/coffee.png"><?= $name ?>

                 <?php else:?>
                  <img  src="assets/img/coffee.png"><?= site_name() ?>
                 
                <?php endif; ?>
              </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <?php if (!empty($isUserLogin) && $isUserLogin === true): ?>
                      <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Donate</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('/account/logout')?>">Logout</a>
                        </li>

                      <?php else: ?>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('') ?>">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('/signup') ?>">Sign Up</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                          <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('/signin') ?>">Login</a>
                        </li>
                                                
                      <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

       
