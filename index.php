<?php
$mysqli = mysqli_connect("ep-sweet-sound-a40jvt3t.us-east-1.pg.koyeb.app","koyeb-adm","R24IfvslAyqU"."koyebdb")

if (mysqli_connect_errno() {
    exit();
} else {
    $sql = "CREATE TABLE users (Pin INT NOT NULL, First VARCHAR(10), Last VARCHAR(10))";
    $res = mysqli_query($mysqli, $sql);
}
if ($res === TRUE) {
    echo "Table Created";
} else {
  echo "Error";
}

mysqli_close($mysqli);

?>

/*

$mysqli = mysqli_connect("ep-misty-tree-a4x4f674.us-east-1.pg.koyeb.app","koyeb-adm","xtOnbmZ81KYT"."koyebdb")

if (mysqli_connect_errno() {
  exit();
} else {
  $sql = "INSERT INTO users ('First','Last','Pin') VALUES $_POST['fName'], $_POST['lName'], $_POST['pin']";
  $res = mysqli_query($mysqli, $sql);
  if ($res === TRUE) {
    echo "Table Created";
  } else {
    echo "Error";
  }
  
  mysqli_close($mysqli);
}

*/
