<?php
session_start();
if(isset($_SESSION['username'])){
        header("location:administrator/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="./assets/bootstrap-5.3.2/dist/css/bootstrap.min.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
        <div class="container">
                <div class="content">
                        <div class="card mt-5">
                                <div class="row">
                                        <div class="col-6">
                                                <div class="card-body">
                                                        <p class="text-center mt-5">Silahkan Masukan Username dan Password</p>
                                                        <?php
                                                        if (isset($_GET['pesan'])) {
                                                                if ($_GET['pesan'] == "gagal") {
                                                                        echo "<div class='alert alert-danger'>Username dan Password Tidak Sesuai</div>";
                                                                }
                                                        }
                                                        ?>
                                                        <form action="cek_login.php" method="post">
                                                                <div class="form-group">
                                                                        <label for="">Username</label>
                                                                        <input type="text" name="username" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="">Password</label>
                                                                        <input type="password" name="password" class="form-control">
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="card-body">
                                                        <img src="assets/login.png" alt="" width="500">
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <!-- <script src="./assets/bootstrap-5.3.2/dist/js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

