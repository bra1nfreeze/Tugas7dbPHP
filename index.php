<h2> List Mahasiswa </h2>

<!---Membuat Tabel--->
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
    </tr>

    <?php
    // melampirkan file koneksi
    include 'koneksi.php';

    // variabel kueri untuk memanggil data dari pengguna
    $pengguna = mysqli_query($koneksi, "SELECT * FROM pengguna");

    // variabel mulai dari id no 1
    $id = 1;

    // setiap var kontak alias var row
    foreach ($pengguna as $row) {
        // var jenis_kelamin dasar baris jenis_kelamin singkatan jadi lengkap
        $jkel = $row['jkel'] == 'P' ? 'Perempuan' : 'Laki-Laki';
        // menampilkan data mahasiswa berdasarkan baris tabel
        echo "<tr>
            <td>$id</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $jkel . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['kota'] . "</td>
            <td>" . $row['pesan'] . "</td>
            </tr>";
        // var id no 1 + 1
        $id++;
    }
    ?>
</table>