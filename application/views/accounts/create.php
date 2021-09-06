<?php echo validation_errors(); ?>

<?php echo form_open('accounts/create')?>

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group row">
        <label class="sr-only" for="inlineFormInputName">Name</label>
        <input type="text" name="name" class="form-control" id="inlineFormInputName" placeholder="Enter Name">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <div class="form-group row">
        <label class="sr-only" for="inlineFormInputName">Address</label>
        <input type="text" name="address" class="form-control" id="inlineFormInputName" placeholder="Enter Address">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <div class="form-group row">
        <label class="sr-only" for="inlineFormInputName">Mobile</label>
        <input type="text" name="mobile" class="form-control" id="inlineFormInputName" placeholder="Enter Mobile NO">
        </div>
      </div>
    </div>
  </div> 

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <div class="form-group row">
        <label class="sr-only" for="inlineFormInputName">Email</label>
        <input type="text" name="email" class="form-control" id="inlineFormInputName" placeholder="Enter Email">
        </div>
      </div>
    </div>
  </div>

      <div class="d-grid col-4 mx-auto ">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>

  <?php echo form_close(); ?>