<h2><?= $title ?></h2>
	
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">STAGE</th>
      <th scope="col">AMOUNT</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($opportunities as $opportunity) : ?>
    <tr>
      <td><?php echo $opportunity['Name']; ?></td>
      <td><?php echo $opportunity['Stage']; ?></td>
      <td><?php echo $opportunity['Amount']; ?></td>

      <td>
        <a href="opportunities/edit/<?php echo $opportunity['OpportunityID'];?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

      <a href="opportunities/delete/<?php echo $opportunity['OpportunityID'];?>" class="btn btn-danger" onclick="return confirm('Are you sure  to Delete?')"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
