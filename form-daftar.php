<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="tanggal_lahir" class="form-label">Tanggal lahir: </label>
  <input type="date" class ="form-control" name="tanggal_lahir" placeholder="tanggal lahir" />
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="desa" class="form-label">Desa/Kelurahan</label>
  <textarea class="form-control" name="desa" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="kecamatan" class="form-label">Kecamatan</label>
  <textarea class="form-control" name="kecamatan" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="kota" class="form-label">Kabupaten/Kota</label>
  <select name="kota" class="form-control">
                <option>Kota Bandung</option>
                <option>Kab. Bandung</option>
                <option>Kota Cimahi</option>
                <option>Kab. Bandung Barat</option>
                <option>Kab. Sumedang</option>
            </select>
</div>
<div class="mb-3">
  <label for="provinsi" class="form-label">Provinsi</label>
  <select name="provinsi" class="form-control">
                <option>Banten</option>
                <option>DKI Jakarta</option>
                <option>Jawa Barat</option>
                <option>Jawa Tengah</option>
                <option>Jawa Timur</option>
                <option>DIY Yogyakarta</option>
            </select>
</div>
<div class="mb-3">
  <label for="kode_pos" class="form-label">Kode Pos: </label>
  <input type="text" class ="form-control" name="kode_pos" placeholder="kode pos" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
</div>
<div class="mb-3">
  <label for="no_tel" class="form-label">No Telepon: </label>
  <input type="tel" class ="form-control" name="no_tel" placeholder="nomor telepon" />
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email: </label>
  <input type="email" class ="form-control" name="email" placeholder="email" />
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" placeholder="nama sekolah" />
</div>
<div class="mb-3">
   <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
</div>
    </form>
</div>
    </body>
</html>