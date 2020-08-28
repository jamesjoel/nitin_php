<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!-- 
  get
  post
 -->
<div class="container">
  <h2>Registration</h2>
  <div class="col-md-6 offset-md-3">
    <form action="save.php" method="post">
      <div class="form-group">
        <label >Full Name:</label>
        <input type="text" class="form-control" placeholder="Full Name" name="fullname">
      </div>
      
      <div class="form-group">
        <label >Email:</label>
        <input type="text" class="form-control"  placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
      <div class="form-group">
        <label >City:</label>
        <select class="form-control" name="city">
          <option>Select</option>
          <option>Indore</option>
          <option>Bhopal</option>
          <option>Mumbai</option>
        </select>
      </div>
      <div class="form-group">
        <label >Gender:</label>
        Male <input type="radio" name="gender" value="male">
        Female  <input type="radio" name="gender" value="female">
      </div>
      <div class="form-group">
        <label >Address:</label>
        <textarea class="form-control" name="address"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

</body>
</html>
