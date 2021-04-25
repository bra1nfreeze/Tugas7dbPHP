<html>

<head>
    <!--Judul laman-->
    <title>Login Pengguna</title>
</head>

<body>
    <h1>Laman Login Pengguna</h1>
    <form action="" method="post">
        <!--Membuat Tabel untuk form login-->
        <table>
            <tr>
                <td>Username</td>
                <!--Teks box isi nama-->
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <!--Teks box password isi password-->
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <!--membuat tombol untuk lanjut proses-->
                <td><input type="submit" name="submit" value="login"></td>
            </tr>
        </table>
    </form>

    <!--akses untuk proses login-->
    <?php
    // melampirkan file koneksi
    include '../koneksi.php';

    // kondisi jika klik submit
    if (isset($_POST['submit'])) {
        // Var untuk menangkap data username dan password
        $username = $_POST['username'];
        $password = $_POST['password'];
        // menjalankan perintah mysql pada php
        $sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' 
                            AND password = '$password'");
        // var mengembalikan jumlah baris sql
        $cek = mysqli_num_rows($sql);
        if ($cek == 1) {
            // sesi untuk menyimpan informasi dalam variabel
            $_SESSION['userweb'] = $username;
            // mengembalikan tampilkontak.php
            header("location:tampilkontak.php");
            exit;
        } else {
            echo "Maaf username atau password anda salah";
        }
    }
    ?>
</body>

</html>