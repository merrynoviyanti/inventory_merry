<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Tambah Data Jenis Merry</h1>
    <form action="proses_tambah.php" method="post">
      <div class="mb-3">
        <label for="" class="form-label">ID jenis</label>
        <input type="number" class="form-control" name="Id_jenis"  id="" placeholder=""/>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nama jenis</label>
        <input type="text" class="form-control" name="Nama_jenis"  id="" placeholder=""/>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="index.php" class="btn btn-success">Kembali ke index</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>