<?php
//get stored pasword
$userPassword=getUserPasswordInfo();

//start session
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = 0;
}

//initial wrong pwd indicated to false.
if (!isset($_SESSION['wrongPassword'])) {
    $_SESSION['wrongPassword'] = 0;
}


//get user input
$username = $_POST['username'];
$password = $_POST['password'];

//check record
$error = true;
foreach ($userPassword as $key => $value) {
    if ($username == $key) {
        if (password_verify($password, $value)) {
            $error = false;
        }
    }
}

//result handling
if ($error) {
    $_SESSION['wrongPassword'] = 1;
    header("Location: http://localhost/PHP-HAOTIAN-ZHANG/loginPage/login.php");
} else {
    $_SESSION['login'] = 1;
    unset($_SESSION['wrongPassword']);
    header("Location: http://google.ca");
}

function getUserPasswordInfo()
{
    //get stored password
    $filePointer  = fopen("../database/users.txt", "r") or die("Unable to open file!");
    $userPassword = array();
    while (!feof($filePointer)) {
        //get rid of the '/n' from fgets
        $line                        = trim(fgets($filePointer));
        $tempArray                   = array();
        $tempArray                   = explode(' ', $line);
        $hashedPassword              = password_hash($tempArray[1], PASSWORD_DEFAULT);
        $userPassword[$tempArray[0]] = "$hashedPassword";
        // $userPassword[$tempArray[0]] = $tempArray[1];
    }
// print_r($userPassword);
    fclose($filePointer);
    return $userPassword;
}
?>