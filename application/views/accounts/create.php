<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('accounts/create')?>
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Name</label>
      <input type="text" name="name" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Address</label>
      <input type="text" name="address" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Mobile</label>
      <input type="text" name="mobile" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Email</label>
      <input type="text" name="email" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>