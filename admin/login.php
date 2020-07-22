<html>
<head>

</head>
<body>
<?php
session_start();
include "../lib/koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query ($koneksi, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
$data = mysqli_fetch_array ($query);
$jml_data = mysqli_num_rows ($query);

if ($jml_data==1) {
    $_SESSION['nama_admin']=$data['nama_admin'];
    $_SESSION['status']=$data['status'];

    $_SESSION["user"]=$data;

    
} else {
        
}

?>
</body>
</html>