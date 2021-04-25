<h2> List Mahasiswa </h2>
<!---Membuat Tabel--->
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
        </th>
    </tr>

    <?php
    // melampirkan file koneksi
    include 'koneksi.php';

    // variabel kueri untuk memanggil data dari mahasiswa
    $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

    // variabel mulai dari no 1
    $no = 1;

    // setiap var mahasiswa alias var row
    foreach ($mahasiswa as $row) {
        // var jenis_kelamin dasar baris jenis_kelamin singkatan jadi lengkap
        $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki';
        // menampilkan data mahasiswa berdasarkan baris tabel
        echo "<tr>
            <td>$no</td>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $jenis_kelamin . "</td>
            <td>" . $row['jurusan'] . "</td>
            </tr>";
        // var no 1 + 1
        $no++;
    }
    ?>
</table>