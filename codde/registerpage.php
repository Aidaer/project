<!DOCTYPE html>
<html lang="en">
<head>
  <title>NewsArchive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src = "myscript.js"> </script>
</head>
<body>
  <div class="container">
  <h2>Registration</h2>
  <form id="form" onsubmit="return calc()" method= "post" action="polzovatel.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
     <div class="form-group">
      <label for="nickname">Nickname:</label>
      <input type="text" class="form-control" id="nickname" placeholder="Enter nickname" name="nickname">
    </div>
    <div class="form-group">
      <label for="fname">Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter name" name="fname">
    </div>
    <div class="form-group">
      <label for="surname">Surname:</label>
      <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
    </div>
    <div class="form-group">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
      <p class="text-danger">*at least 8 symbols with one or more uppercase </p>

    </div>
    <div class="form-group">
      <button  type="submit" class="btn btn-primary" name = "knopka">Submit</button>
    </div>
</form>
</div>

</body>
</html>