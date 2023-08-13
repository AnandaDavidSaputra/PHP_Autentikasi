<?php

include_once "Auth.php";

if (isset($_POST['register'])) {
    $data = [
        "email" => $_POST["email"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "Cpassword" => $_POST["Cpassword"],
    ];

    $register = Auth::register($data);

    if ($register["status"] === "sukses") {
        header("Location: Login.php");
    } 
    else {
        header("Location: Register.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>    

    <div class="card m-auto mt-5" style="width: 30em;">
        <div class="card-body m-auto pt-4 w-75">

        <form action="" method="post">

            <h5 class="text-center">
                <div class="d-inline text-primary">N</div><div class="d-inline text-warning">o</div><div class="d-inline text-danger">o</div><div class="d-inline text-primary">d</div><div class="d-inline text-success">l</div><div class="d-inline text-danger">e</div>
            </h5>

            <h4 class="text-center">Buat Akun Noodle</h4>
            <h6 class="text-center">Masukan Data Anda</h6>
            <br>

            <div class="input-group input-group-lg">
            <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="input-group input-group-lg">
            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="input-group input-group-lg">
            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="input-group input-group-lg">
            <input type="password" name="Cpassword" placeholder="Confirm Password" class="form-control" autocomplete="off">
            </div>

            <br>

            <div class="float-right">
            <button class="btn btn-primary" type="submit" name="register" style="float: right;">Buat</button>
            </div>

        </form>

        </div>
    </div>

</body>

</html>