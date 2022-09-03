<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<!-- voter register section -->
<section class="bg-dark text-white">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center pt-2 mt-2  mb-1 pb-1 text-contact">
            <h1>Apply for Voter</h1>
          </div>
        </div>
        <div class="col-md-6 mb-6 pb-6 form">
          <form class=" w-50 m-auto" action="../VotE/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" name="name" placeholder="Enter your full name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Mobile Number</label>
              <input type="text" name="mobile" placeholder="Enter your Mobile number" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="cpassword" placeholder="confirm password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Insert your photo</label>
              <input type="file" name="photo" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Applying as:</label>
              <select name="catag" class="form-select">
                <option value="voter">voter</option>
                <option value="candidate">Candidate</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary votbtn">Apply</button>
          </form>
        </div>
        <div class="col-md-6 mx-6 px-6  ">
          <img class="my-2 px-5 py-3" src="fill3.png" alt="form photo" width="90%" height="650vh">
        </div>
      </div>
    </div>
  </section>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>