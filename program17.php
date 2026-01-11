<!DOCTYPE html>
<html>
<head>
<title>Validation</title>
</head>
<body>

<form method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($name))
        echo "Name is required<br>";

    if (empty($email))
        echo "Email is required<br>";

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Invalid Email Format<br>";

    else
        echo "Email: $email<br>";
}
?>
</body>
</html>
