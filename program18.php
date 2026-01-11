<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("username", $_POST["username"], time() + (86400 * 30), "/");
    echo "<p>Cookie set! Reload to see value.</p>";
}

if (isset($_COOKIE["username"])) {
    echo "<p>Welcome back, ".$_COOKIE["username"]."</p>";
} else {
    echo "<p>Welcome, guest!</p>";
}
?>

<form method="post">
Enter your name:
<input type="text" name="username">
<input type="submit" value="Set Cookie">
</form>

</body>
</html>
