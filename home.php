<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <?php include 'nav.php' ?>


  <!-- vot now section -->

  <section id="vn">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h1 class="ti">Online voting System</h1>
          <a href="adminLogin.php"><button class="votbtn">vote now</button></a>
        </div>
        <div class="col-md-6 mb-8 text-center">
          <img class="m-2 p-3" src="Getty_Vote_Ballot_Election.jpeg" alt="Voting img" width="90%" height="400vh">
        </div>
      </div>
    </div>

  </section>

  <?php include 'applySect.php' ?>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>