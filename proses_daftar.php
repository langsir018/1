<?php
include 'config.php';

$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$program = mysqli_real_escape_string($conn, $_POST['program']);

$sql = "INSERT INTO pelajar (nama, email, program)
        VALUES ('$nama', '$email', '$program')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Pelajar berjaya didaftarkan!');
            window.location='senarai.php';
          </script>";
} else {
    echo "Ralat: " . mysqli_error($conn);
}
?>