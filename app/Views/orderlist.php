<?= $this->extend('/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Your existing content here -->
        </div>
    </div>
    <nav class="navbar navbar-light mt-4" style="background-color: #70b4bc; padding-left: 20px;">
        <a class="navbar-brand" href="#">
            <span>
                Pesanan Anda
            </span>
        </a>
    </nav>
</div>



<div class="hero-area">



    <div class="container mt-5" style="margin-top: 80px;"> <!-- Tambahkan style="margin-top: 80px;" di sini -->
        <br><br>
        <?php if (session()->has('order_created')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pesanan telah dibuat</strong> dan akan dikirimkan dalam 1x24 jam dengan metode pembayaran di tempat
            </div>
        <?php endif; ?>

        <?php if (session()->has('order_updated')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pesanan diperbarui</strong> Periksa kembali pesanan Anda
            </div>
        <?php endif; ?>

        <?php if (session()->has('order_deleted')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Pesanan dihapus</strong> Silakan checkout barang yang lain
            </div>
        <?php endif; ?>



        <div class="row">
            <div class="col-md-12">
                <?php if (empty($data)): ?>
                    <p>Anda belum membuat pesanan, silahkan pilih produk dan lakukan pemesanan.</p>
                <?php else: ?>
                    <div class="row">
                        <?php foreach (array_reverse($data) as $order): ?>
                            <div class="col-md-8 mb-4 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Detail Pesanan</h5>
                                        <table>
                                            <tr>
                                                <td>ID Produk</td>
                                                <td>:
                                                    <?= $order['id_product'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>:
                                                    <?= $order['nama'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>:
                                                    <?= $order['jumlah'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Pengiriman</td>
                                                <td>:
                                                    <?= $order['alamat'] ?>
                                                </td>
                                            </tr>
                                            <?php if (isset($order['jumlahbiaya'])): ?>
                                                <tr>
                                                    <td>Jumlah Biaya</td>
                                                    <td>: Rp
                                                        <?= number_format($order['jumlahbiaya'], 0, ',', '.') ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </table>

                                        <!-- Add Update and Delete buttons here -->
                                        <div class="mt-3">
                                            <form action="/updateproduct" method="post" class="d-inline">
                                                <input name="id" type="hidden" value="<?= $order['id'] ?>">
                                                <button class="btn btn-primary"
                                                    style="background-color: #70b4bc;">Update</button>
                                            </form>

                                            <form action="/deleteproduct" method="post"
                                                onsubmit="return confirm('Yakin mau hapus pesananmu?');"
                                                class="d-inline">
                                                <input name="id" type="hidden" value="<?= $order['id'] ?>">
                                                <button class="btn btn-danger ml-2">Delete</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>