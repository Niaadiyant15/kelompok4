<?php

session_start();

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['pass']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($uname))
    {
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass))
    {
        header("Location: index.php?error=Password is required");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM account WHERE Username='$uname' AND Password='$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] == $uname && $row['Password'] == $pass)
            {
                $_SESSION['Username'] = $row['Username'];
                header("Location: ElekStok.php");
                exit();
            }
            else
            {
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        }
        else
        {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
}
else
{
    header("Location: index.php");
    exit();
}