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
  <h3 class="text-center">Bootstrap Array</h3>
<?php
$Cities = array("India","Austraili" ,"Russia" ,"France" ,"America" ,"England");
?>
         
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>Cities</th>
       
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><?php echo $Cities[0]?></td>
      
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo $Cities[1]?></td>
      
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo $Cities[2]?></td>
      
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo $Cities[3]?></td>
      
      </tr>
      
    </tbody>
  </table>
</div>
</div>

</body>
</html>
