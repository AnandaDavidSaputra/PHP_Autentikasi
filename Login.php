<?php

include_once 'Auth.php';

if(isset($_POST['login'])){
   $data = [
    "email" => $_POST["email"],
    "password" => $_POST["password"],
   ];

    $result = Auth::login($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Login</title>



</head>

<body>

    <div class="card m-auto mt-5" style="width: 30em;">
        <div class="card-body m-auto pt-4 w-75">
        <form action="" method="post">

            <h5 class="text-center">
                <div class="d-inline text-primary">N</div><div class="d-inline text-warning">o</div><div class="d-inline text-danger">o</div><div class="d-inline text-primary">d</div><div class="d-inline text-success">l</div><div class="d-inline text-danger">e</div>
            </h5>

            <h4 class="text-center">Sign in to Noodle</h4>
            <h6 class="text-center">Use your Noodle Account</h6>
            <br>

            <div class="input-group input-group-lg">
            <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="input-group input-group-lg">
            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="float-right fw-bold">
            <a href="Register.php" style="text-decoration: none;">Create account</a>
            <button class="btn btn-primary" type="submit" name="login" style="float: right;">Login</button>
            </div>

        </form>
        </div>
    </div>
    
    <br>
    
    <?php if(isset($result)) : ?>

            <div class="alert alert-<?php $result["status"] === "emailsalah" ? print("danger") : print("danger")?>  w-50 m-auto">
            <?= $result["message"] ?> <button style="float: right; border-radius:7px; background-color:red;"><a href="Login.php" style="text-decoration: none; font-weight:bold; color:white;">Oke</a></button>
            </div>
        <?php endif ?>
</body>

</html>