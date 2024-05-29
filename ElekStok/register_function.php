<?php
session_start();
include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);
    $confirm_pass = validate($_POST['reenter-pass']);
    $email = validate($_POST['email']);

    if (empty($uname) || empty($pass) || empty($confirm_pass) || empty($email)) {
        header("Location: register.php?error=All fields are required");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=Invalid email format");
        exit();
    } elseif ($pass !== $confirm_pass) {
        header("Location: register.php?error=Passwords do not match");
        exit();
    } else {
        $sql = "SELECT * FROM account WHERE Username=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            header("Location: register.php?error=The username is taken");
            exit();
        } else {
            $sql2 = "INSERT INTO account(Username, password, email) VALUES(?, ?, ?)";
            $stmt2 = mysqli_prepare($conn, $sql2);
            mysqli_stmt_bind_param($stmt2, "sss", $uname, $pass, $email);
            $result = mysqli_stmt_execute($stmt2);

            if ($result) {
                header("Location: index.php");
            } else {
                header("Location: register.php?error=An error occurred, please try again");
                exit();
            }
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>
