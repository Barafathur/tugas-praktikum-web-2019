<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  

<?php
// define variables and set to empty values
$name = $nim = $Box ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $nim = test_input($_POST["nim"]);
  $Box = test_input($_POST["Box"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>  
<div class="kotak_login">
    <h2 class=>Form Pendaftaran</h2>
    <form method="post">  
      Nama : <br><input type="text" name="name" placeholder="Nama">
    <br> <br>
    NIM  : <br><input type="text" name="nim" placeholder="H07118XXXX">

    <p> <input type="radio" name="Box" value="Post">Post</p>
    <p><input type="radio" name="Box" value="Get">Get</p>

      <input type="submit" name="submit" class="tombol_submit" value="Submit">  

    </form>

    <?php
    echo "<h2>Inputan mu : </h2>";
    echo $name;
    echo "<br>";
    echo $nim;
    echo "<br>";
    echo $Box;
    echo "<br>";
    ?>
</div>

</body>
</html>