<?php
$conn = new mysqli("localhost", "root", "", "myDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display image
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT image_type, image_data FROM images WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($type, $data);
    $stmt->fetch();

    header("Content-Type: $type");
    echo $data;
    exit;
}

// Upload image
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_FILES["image"]["name"];
    $type = $_FILES["image"]["type"];
    $data = file_get_contents($_FILES["image"]["tmp_name"]);

    $stmt = $conn->prepare("INSERT INTO images(image_name,image_type,image_data) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $type, $data);
    $stmt->execute();
}

function displayImages($conn) {
    $result = $conn->query("SELECT id, image_name FROM images");

    while ($row = $result->fetch_assoc()) {
        echo "<img src='?id=".$row['id']."' width='150'><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Upload and Display Images</h1>

<form method="post" enctype="multipart/form-data">
Choose Image: <input type="file" name="image">
<input type="submit" value="Upload">
</form>

<h2>Uploaded Images</h2>
<?php displayImages($conn); ?>

</body>
</html>
