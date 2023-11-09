<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Bagian header, seperti judul, logo, dan menu navigasi bisa ditempatkan di sini -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">ApaAjaAda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url("/"); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url("/input"); ?>">Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Pesan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Konten utama dari halaman Anda akan ditempatkan di sini -->
    <div class="container">
      <h1 class="mt-5">Tambah Data Produk</h1>
      <form action="<?= base_url("/create"); ?>" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk:</label>
          <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">Harga Produk:</label>
          <input type="number" id="harga" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi:</label>
          <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
    <script>
      // Mengisi nilai input tanggal dengan tanggal hari ini
      document.getElementById("deskripsi").valueAsDate = new Date();
    </script>
    <footer style="text-align: center; position: absolute; bottom: 0; width: 100%;">
      <p>&copy; 2023 ApaAjaAda. Hak Cipta Dilindungi Undang-Undang.</p>
    </footer>
</body>

</html>