<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
           
                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error_message; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $success_message; ?>
                    </div>
                <?php endif; ?>
            </div>
     

       
   


 