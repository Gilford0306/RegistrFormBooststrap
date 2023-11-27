<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $date = $_POST["date"];

    if ( $password==$password2)
    {
        $data = "Username: $username, Email: $email, Password: $password, BirthDay:$date\n";
        file_put_contents("registered_users.txt", $data, FILE_APPEND);
        header("Location: thank_you.html");
        exit();
    }
    else
    {
        header("Location: mistake.html");
        exit();
    }
}
?>
