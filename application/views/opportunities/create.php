<?php echo validation_errors(); ?>

<?php echo form_open('opportunities/create')?>

<div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <div class="form-group row">
          <h1 class="text-center"><?= $title; ?></h1>
            <select name="AccountID" class="form-select" aria-label="Default select example">
            <option selected>Select an account</option>
            <?php foreach($accounts as $account): ?>
            <option value="<?php echo $account['AccountID']; ?>"><?php echo $account['Name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
   
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
        <label class="sr-only" for="inlineFormInputName">Stage</label>
        <input type="text" name="stage" class="form-control" id="inlineFormInputName" placeholder="Enter Stage">
        </div>
      </div>
    </div>
  </div> 

  <div class="row">
    <div class="col-md-4 mx-auto col-md-offset-4">
      <div class="mb-3">
        <div class="form-group row">
        <label class="sr-only" for="inlineFormInputName">Amount</label>
        <input type="text" name="amount" class="form-control" id="inlineFormInputName" placeholder="Enter Amount">
        </div>
      </div>
    </div>
  </div>

    <div class="d-grid col-4 mx-auto ">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
    
<?php echo form_close(); ?>