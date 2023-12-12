
<div class="center">
  <form method="post" action="<?= site_url('/edit')?>">
  <p> 
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required="required">
  </p>

  <p> 
    <label for="email">Email</label>
    <input type="text" name="email" id="email" required="required">
  </p>
  
  

  <button type="submit" name="edit_button" value="1">Update</button>
  </form>
</div>