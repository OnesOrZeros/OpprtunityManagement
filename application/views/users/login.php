<?php echo validation_errors(); ?>

<?php echo form_open('users/login'); ?>
<div class="row">
 <div class="col-md-4 mx-auto col-md-offset-4">
  <div class="mb-3">
      <h1 class="text-center"><?= $title; ?></h1>
     <div class="form-group row">
     <label for="inputEmail3" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter Username">
     </div>
   </div>  
 </div>      
</div>

<div class="row">
 <div class="col-md-4 mx-auto col-md-offset-4">
   <div class="mb-3">  
     <div class="form-group row">
     <label for="inputPassword3" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Password">
     </div>
   </div>  
  </div>
</div>

     <div class="d-grid col-4 mx-auto ">
     <button type="submit" class="btn btn-primary btn-block">Log In</button>
     </div>

<?php echo form_close(); ?>