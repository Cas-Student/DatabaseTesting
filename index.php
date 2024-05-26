<?php
$mysqli = mysqli_connect("ep-misty-tree-a4x4f674.us-east-1.pg.koyeb.app","koyeb-adm","xtOnbmZ81KYT"."koyebdb")

if (mysqli_connect_errno() {
    exit();
} else {
    $sql = "CREATE TABLE users (fName VARCHAR(10), lName VARCHAR(10), pin INT NOT NULL)";
  $res = mysqli_query($mysqli, $sql);

if ($res === TRUE) {
  echo "Table Created";
} else {
  echo "Error";
}

mysqli_close($mysqli);

?>
