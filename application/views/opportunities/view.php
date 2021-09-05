<h2><?php echo $opportunity['title']; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('opportunities/update')?>
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Name</label>
      <input type="text" name="name" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Stage</label>
      <input type="text" name="stage" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Amount</label>
      <input type="text" name="amount" class="form-control" id="inlineFormInputName" placeholder="">
    </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>