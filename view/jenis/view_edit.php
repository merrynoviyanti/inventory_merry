<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php 
        $id=$_GET['id'];
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM jenis WHERE Id_jenis ='$id'");
        $result = mysqli_fetch_array($query);
        ?>

        <div class="container mt-5">
        <div class="card card-custum mx-auto" style="max-width: 600px;">
        <h3 class="mb-4 text-center text-dark">Tambah Jenis Baru</h3>
        <form action = "proses_edit.php?id=<?php echo $result['Id_jenis']?>" method="POST">
            <div class="mb-3">
            <label class="form-label">ID Jenis</label>
                <input type="number" class="form-control" value="<?php echo $result['Id_jenis']?>" name="Id_jenis" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Nama Jenis</label>
                <input type="text" class="form-control" value="<?php echo $result['Nama_jenis']?>" name="Nama_jenis" required>
                </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>