<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id_mahasiswa = $_POST["id_mahasiswa"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jurusan = $_POST["jurusan"];

    // Ambil data minat sebagai array
    $minat_array = isset($_POST["minat"]) ? $_POST["minat"] : [];
    // Ubah array menjadi string yang dipisahkan koma
    $minat = implode(", ", $minat_array);

    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $folder_tujuan = "D:/XAMPP/htdocs/PHP/"; 
    $gambar_path = $folder_tujuan . $gambar_name;

    // Memindahkan gambar ke folder formulir
    move_uploaded_file($gambar_tmp, $gambar_path)

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Pendaftaran</title>
</head>
<body>

<div class="container mt-5">
    <h2>Data Pendaftaran</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Mahasiswa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th>Minat</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id_mahasiswa; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $jenis_kelamin; ?></td>
                <td><?php echo $tanggal_lahir; ?></td>
                <td><?php echo $jurusan; ?></td>
                <td><?php echo $minat; ?></td>
                <td><img src="<?php echo $gambar_tmp; ?>" width="100"></td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>
