<!DOCTYPE html>
<html>
<head>
<title>File Reader and Writer</title>
</head>
<body>

<!-- Write to file -->
<form action="" method="post">
<textarea name="textdata"></textarea><br>
<input type="submit" name="write" value="Write to File">
</form>

<!-- Read file -->
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="filedata"><br>
<input type="submit" name="read" value="Read File">
</form>

<?php
if (isset($_POST['write'])) {
    file_put_contents("output.txt", $_POST['textdata']);
    echo "Data written to output.txt<br><br>";
}

if (isset($_POST['read'])) {
    $content = file_get_contents($_FILES['filedata']['tmp_name']);
    echo "File Content:<br>" . nl2br(htmlspecialchars($content));
}
?>

</body>
</html>
