<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        send_input();
    } else {
        echo "Please fill in the required fields. \nThey have a red star next to the fields";
    }
    
}

function send_input(){

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $user_password = $_POST["password"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["genderList"];
    $guest = $_POST["guest"];

    if(empty($phoneNumber)) {
        $phoneNumber = "NULL";
    }

    if(empty($gender)) {
        $gender = "NULL";
    }

    if(empty($guest)){
        $guest = "NULL";
    }
    
    $host = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'comicon';

    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
    
    if (mysqli_connect_errno()){
        die("Connection error: " . mysqli_connect_errno());
    }
    
    $sql = "INSERT INTO users (users_name, users_surname, users_email,
            users_phone_number, users_password, users_gender, users_preferred_guest)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $surname, $email, $phoneNumber, $user_password, $gender, $guest);
    
    mysqli_stmt_execute($stmt);
    
    echo "Record Saved.";

}

?>

