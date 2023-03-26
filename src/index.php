<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <?php

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phoneNumber = $_Post["phoneNumber"];
    $gender = $_POST["genderList"];
    $guest = $_POST["guest"];

    $host = 'localhost';
	$username = 'root';
	$password = 'password';
	$dbname = 'comicon';

    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

    if (mysqli_connect_errno()){
        die("Connection error: " . mysqli_connect_errno());
    }

    echo "Connection successful.";

    $sql = "INSERT INTO users (users_name, users_surname, users_email,
            users_phone_number, users_password, users_gender, users_preferred_guest)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $name, $surname, $email, $phoneNumber, $password, $gender, $guest);

    mysqli_stmt_execute($stmt);

    echo "Record Saved.";

    ?>
</body>
</html>

