<?php
$conn = new mysqli("localhost", "root", "", "myDB");
if ($conn->connect_error) die("DB Error");

// Handle Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg = $_POST["regno"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $action = $_POST["action"];

    if ($action == "Add")
        $sql = "INSERT INTO student VALUES('$reg','$name','$age','$course')";
    elseif ($action == "Update")
        $sql = "UPDATE student SET name='$name', age='$age', course='$course' WHERE regno='$reg'";
    else
        $sql = "DELETE FROM student WHERE regno='$reg'";

    $conn->query($sql);
}

// Display Function
function showData($c) {
    $r = $c->query("SELECT * FROM student");
    if ($r->num_rows == 0) { echo "No Records"; return; }

    echo "<table border=1><tr><th>Reg No</th><th>Name</th><th>Age</th><th>Course</th></tr>";
    while ($row = $r->fetch_assoc()) {
        echo "<tr><td>{$row['regno']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['course']}</td></tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Student Management</h2>

<form method="post">
Reg No: <input name="regno" required><br><br>
Name: <input name="name"><br><br>
Age: <input type="number" name="age"><br><br>
Course: <input name="course"><br><br>

<input type="submit" name="action" value="Add">
<input type="submit" name="action" value="Update">
<input type="submit" name="action" value="Delete">
</form>

<br>
<?php showData($conn); ?>

</body>
</html>
