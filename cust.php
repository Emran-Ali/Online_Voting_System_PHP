<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'nav.php'; ?>

    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
    alert("Please Log In First");
    window.location="./adminLogin.php";
    </script>';
    }
    $data = $_SESSION['data'];
    if ($_SESSION['vote'] == 1) {
        $vote = '<b class="text-success">Already voted</b>';
    } else {
        $vote = '<b class="text-danger">Not voted any one</b>';
    }

    ?>

    <section id="vn">
        <a href="./logout.php"><button class="votbtn">Log out</button></a>
        <h3> you are <?php echo $vote ?></h3>
        <div class="container">
            <div class="row">
                <?php
                if (isset($_SESSION['catagory'])) {
                    $catagory = $_SESSION['catagory'];
                    for ($i = 0; $i < count($catagory); $i++) {
                ?>
                        <div class="card bg col-md-3 m-5 p-2 bg-dark" style="width: 18rem; height:27rem;">
                            <img src="upload/<?php echo $catagory[$i]['photo'] ?>" class="card-img-top img" alt="card img">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $catagory[$i]['name'] ?> </h5>
                                <p class="card-text"><?php echo $catagory[$i]['mobile'] ?> </p>
                                <form action="./voting.php" method="POST">
                                    <input type="hidden" name="catagvote" value="<?php echo $catagory[$i]['tvote'] ?>">
                                    <input type="hidden" name="catagid" value="<?php echo $catagory[$i]['id'] ?>">

                                    <?php
                                    if ($_SESSION['vote'] == 1) {
                                    ?>
                                      <fieldset disabled>
                                        <button class="btn btn-primary">voted</button>
                                        </fieldset>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn btn-primary">vote</button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="card form col-md-4 m-5 p-2 bg-dark" style="width: 18rem; height:25rem;">
                        <img src="fill3.png" class="card-img-top img" alt="Opps!!!">
                        <div class="card-body">
                            <h5 class="card-title">No candidate available</h5>
                            <p class="card-text">Please try Latter</p>
                            <a href="#" class="btn btn-primary">vote</a>
                        </div>
                    <?php } ?>
                    </div>
            </div>
    </section>
</body>

</html>