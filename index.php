<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Sign In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <!-- sesuaikan file javascript -->
    <script src="asset/js/color-modes.js"></script>
    <!-- sesuaikan file css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="sign-in.css" rel="stylesheet">-->
    <Link href="stylecoba.css" rel="stylesheet"></Link>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-25 m-auto">
        <?php
        if (isset($_GET['pesan'])) { ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <!--cek pesan notifikasi -->
                <?php
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <form method="POST" action="cek_login.php">
        <img class="mb-4 img-bulat rounded-circle" src="image/gambarlogo..jpg" alt="img-bulat" width="72" height="72">

            <h1 class="h3 mb-3 fw-normal text-primary">Please sign in</h1>
            <div class="form-floating">
                <!-- perhatikan name harus sama pada file cek_login.php -->
                <input type="text" class="form-control bg-white text-dark" id="floatingInput" placeholder="Input username" name="username" >
                <label for="floatingInput" class="text-dark">Username</label>
            </div>
            <div class="form-floating">
                <!-- perhatikan name harus sama pada file cek_login.php -->
                <input type="password" class="form-control bg-white text-dark" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword" class="text-dark">Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>

</body>

</html>