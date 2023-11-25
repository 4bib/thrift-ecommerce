<?= $this->extend('/template') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/save" method="post">
                        <input type="hidden" name="id_product" value="<?= $detail['id'] ?>">
                        <input type="hidden" name="nama" value="<?= $detail['nama'] ?>">
                        <input type="hidden" name="harga" value="<?= $detail['harga'] ?>">



                        <div class="form-group">
                            <div class="text-center">
                                <img src="../assets/<?= $detail['imageurl'] ?>" alt="<?= $detail['nama'] ?>" width="376" height="376">
                            </div>
                            <br>
                            <p>
                                <?= $detail['nama'] ?>
                            </p>
                            <p>Harga: Rp
                                <?= number_format($detail['harga'], 0, ',', '.') ?>
                            </p>
                            <p>Merek:
                                <?= $detail['merek'] ?>
                            </p>

                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pengiriman:</label>
                            <textarea class="form-control" id="alamat" name="alamat" required
                                style="resize: none;"></textarea>
                        </div>


                </div>
                <button type="submit" class="btn btn-primary col-md-6 mx-auto" style="background-color: #70b4bc;">Pesan Sekarang</button>
                <br>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>
<?= $this->endSection() ?>