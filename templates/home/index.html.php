<?php if (!empty($name)): ?>
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
    <div class="container d-flex align-items-center flex-column">
             
             <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
           
             <h1 class="masthead-heading text-uppercase mb-0">Hello <?= $name ?></h1>
     
             <div class="divider-custom divider-light">
                 <div class="divider-custom-line"></div>
                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                 <div class="divider-custom-line"></div>
             </div>
           
             <p class="masthead-subheading font-weight-light mb-0">Welcome To My Website -Buy Me A Coffee</p>
             </p>
         </div>




    </div>
  </header>















































































































<?php else: ?>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
             
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
              
                <h1 class="masthead-heading text-uppercase mb-0">Buy Me A Coffee</h1>
        
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
              
                <p class="masthead-subheading font-weight-light mb-0">BSIT Student 3rd year - Aspiring Web Developer - Software Engineer</p>
                </p>
            </div>
        </header>
      
<?php endif; ?>


