<?php
session_start();

if ($_SESSION['level'] == "") {
      header("location:../index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Halaman Petugas</title>
      <link rel="stylesheet" href="../assets/bootstrap-5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
      <div class="container">
            <div class="content">

            </div>
      </div>
      <!-- <script src="../assets/bootstrap-5.3.2/dist/js/bootstrap.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>