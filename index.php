<?php
if (isset($_POST['submit'])) {
  // echo "<h1 class='alert alert-info'>" . $_POST['msg'] . "</h1>";
  $msg = "<h1 class='alert alert-info'>" . $_POST['msg'] . "</h1>";
  echo htmlspecialchars($msg, ENT_SUBSTITUTE, 'UTF-8');
  echo "<br>";
  echo Strip_tags($msg);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../sqlinject/style.css">
  <title>XSS Demo</title>
</head>

<body>
  <form method="POST" class="form p-5">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Print</label>
      <input name="msg" type="text" class="form-control">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

