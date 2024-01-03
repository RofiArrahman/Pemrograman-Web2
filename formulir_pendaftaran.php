<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulir Pendaftaran</title>
</head>
<body>

<div class="container mt-5">
    <h2>Formulir Pendaftaran</h2>
    <form action="biodata.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id_mahasiswa">ID Mahasiswa:</label>
            <input type="text" class="form-control" id="id_mahasiswa" name="id_mahasiswa" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value="pria">
                <label class="form-check-label" for="pria">Pria</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="wanita">
                <label class="form-check-label" for="wanita">Wanita</label>
            </div>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
            <label>Minat:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="minat[]" id="programming" value="programming">
                <label class="form-check-label" for="programming">Programming</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="minat[]" id="animasi" value="animasi">
                <label class="form-check-label" for="animasi">Animasi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="minat[]" id="desain" value="desain">
                <label class="form-check-label" for="desain">Desain</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="minat[]" id="mapala" value="mapala">
                <label class="form-check-label" for="mapala">Mapala</label>
            </div>
            <div class="form-group">
            <label for="gambar">Upload Gambar:</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
