<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
  <h3 class="text-center">Bootstrap table</h3>
<?php
  $name ="nitin";
  $email ="nitinve950@gmail.com";
  $contact ="9907254007";
  $address ="224 sudama nagar near annapurna road indore";
  $state ="MP"
  ?>
         
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>State</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $name ;?></td>
        <td><?php echo $address ;?></td>
        <td><?php echo $email ;?></td>
        <td><?php echo $contact ;?></td>
        <td><?php echo $state;?></td>
      </tr>
      
    </tbody>
  </table>
</div>
</div>

</body>
</html>
