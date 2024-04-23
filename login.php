<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col mx-5">
                    <div class="rounded shadow-sm" style="background: #f6f9ff;">
                        <div class="px-5 py-4 text-center">
                            <img src="assets/img/logo.png" alt="Logo" class="rounded w-50 mt-5">
                            <h3 class="my-3 fw-semibold">Ashley Furniture</h3>
                            <p class="text-secondary">Please <b>Login</b> to access our website. </p>
                        </div>
                        <div class="card-body">
                            <hr class="divider">
                            <!-- Form dengan method POST untuk mengirim data inputan -->
                            <form method="POST" class="px-5 py-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Johndoe" name="username" required>
                                    <label for="name">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="d-flex justify-content-start mt-3">
                                    <button type="submit" name="login" class="btn btn-sm btn-primary px-5 mb-3  w-100">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- inisiasi tag php untuk menjalankan code php -->
<?php
session_start(); //Mulai session untuk mengambil data user yang login
if (isset($_POST['login'])) { //Jika tombol login di klik maka mengirimkan data inputan
    if ($_POST['username'] == 'userlsp' && $_POST['password'] == 'smkisfibjm') { //Dan jika username dan password benar
        $_SESSION['username'] = $_POST['username']; //Set session username dengan value username yang diinputkan
        header('Location: index.php'); //Redirect ke halaman index.php jika login berhasil
    } else {
        echo "<script>alert('Username or Password is incorrect')</script>"; // Jika username dan password salah Tampilkan alert
    }
}
?>