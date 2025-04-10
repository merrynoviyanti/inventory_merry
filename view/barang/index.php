   <!DOCTYPE html>
   <html lang="en">
   <head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
   </head>
   <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1>Data Barang Merry</h1>
    <a href="view_tambah.php" class="btn btn-primary">Tambah Data Barang Baru </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">ID Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th cope="row">1</th>
                <td>101</td>
                <td>Kaos</td>
                <th>111</td>
                <td>62.000</td>
                <td>57</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <tr>
                <th cope="row">2</th>
                <td>102</td>
                <td>Celana</td>
                <th>112</td>
                <td>192.000</td>
                <td>71</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <tr>
                <th cope="row">3</th>
                <td>103</td>
                <td>Kemeja</td>
                <th>113</td>
                <td>99.000</td>
                <td>88</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        </tbody>
        </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
   </html>