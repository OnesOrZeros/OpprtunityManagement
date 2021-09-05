<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
     <div class="mb-4">
        <h1 class="text-center"><?= $title; ?></h1>
       <div class="form-group row">
         <label>Username</label>
         <input type="text" class="form-control" name="username" placeholder="Username">
       </div>
     </div> 
    </div>  
  </div>    

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
       <div class="mb-4">
         <div class="form-group">
           <label >Password</label>
           <input type="password" class="form-control" name="password" placeholder="Password">
         </div>
       </div> 
    </div> 
  </div>   

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-4">
        <div class="form-group">
         <label>Confirm Password</label>
         <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
        </div> 
      </div>
    </div>
  </div>   

   <div class="d-grid col-4 mx-auto ">
     <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
   </div>

<?php echo form_close(); ?>