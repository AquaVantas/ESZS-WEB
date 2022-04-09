<?php
if (!isset($_FILES["image"])) {
    header("HTTP/1.1 400 Bad Request");
    die();
}

$targetdir = 'images/articles/';
$targetfile = $targetdir . uniqid() . $_FILES['image']['name'];

if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetfile)) {
    header("HTTP/1.1 500 Internal Server Error");

    echo "Target_file := " . $targetfile . "<br>";

    echo "Upload_file := " . $_FILES['image']['tmp_name'] . "<br>";

    die();
}
echo $targetfile;
exit(0);
?>
