<h2><?= $title ?></h2>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($accounts as $account) : ?>
    <tr>
      <td><?php echo $account['Name']; ?></td>
      <td><?php echo $account['Address']; ?></td>
      <td><?php echo $account['Email']; ?></td>

      <td>
        <a href="accounts/edit/<?php echo $account['Name'];?>" class="btn btn-info">Edit</a>

      <a href="accounts/delete/<?php echo $account['AccountID'];?>" class="btn btn-danger" onclick="return confirm('Are you sure  to Delete?')"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
