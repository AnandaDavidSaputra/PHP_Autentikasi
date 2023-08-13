<?php

session_start();

include_once "Db.php";

class Auth extends DB{
    public static function register($data){
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $Cpassword = $data['Cpassword'];

    if ($password === $Cpassword){
            $password = password_hash($password, PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO regis_login(email,username,password) VALUES ('$email', '$username', '$password')";
            $result = DB::connect()->query($sql);
             return ["status" => "sukses"];
    } 
}


public static function checkEmail($email){
    $sql = "SELECT * FROM regis_login WHERE email = '$email'";
    $result = DB::connect()->query($sql)->fetch_assoc();

    return $result;
}

public static function checkPassword($password, $password_hash){
    $decrpty = password_verify($password, $password_hash);
    return $decrpty;
}

public static function login($data){
    $email = $data['email'];
    $password = $data["password"];

    $user = Auth::checkEmail($email);
    if ($user != null)
    {
        $decrpty = Auth::checkPassword($password, $user["password"]);

        if ($decrpty)
        {
        $_SESSION["email"] = $email;
        setcookie("email", $email, time() + 86400);
        header("Location: Home.php");
        }
        else{
            return [
                "status" => "passwordsalah",
                "message" => "Password tidak cocok"
            ];
        }
    }
    else{
        return [
            "status" => "emailsalah",
            "message" => "Email tidak cocok"
        ];
    }
}
}
