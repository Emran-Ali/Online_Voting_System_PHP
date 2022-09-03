<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <style>
      body{
            background-color:gray !important;
        }
    </style>

</head>

<body>
    <?php include 'nav.php'; ?>
    <div class=" p-5 m-5 form">
        <form class=" w-50 m-auto" action="../VotE/login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary ">Log in</button>
            </div>
        </form>
    </div>

</body>

</html>