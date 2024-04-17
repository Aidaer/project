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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
  <div class="spinner-grow text-primary"></div>

  <div class="container">
  <h2>Log</h2>
  <form id="form"  method= "post" action = "log.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>
      <button  id = "btn" type="submit" class="btn btn-primary" name = "knopka">Submit</button>
    </div>
  </form>

</body>
</html>

