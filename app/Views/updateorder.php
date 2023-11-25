<?= $this->extend('/template') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/updateaction" method="post">
                        <input type="hidden" name="id" value="<?= $detail['id'] ?>">
                        <input type="hidden" name="jumlahbefore" value="<?= $detail['jumlah'] ?>">
                        <input type="hidden" name="hargabefore" value="<?= $detail['jumlahbiaya'] ?>">

                        <div class="form-group">
                            <br>
                            <p>
                                <?= $detail['nama'] ?>
                            </p>

                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1"
                                value="<?= $detail['jumlah'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pengiriman:</label>
                            <textarea class="form-control" id="alamat" name="alamat" required style="resize: none;"><?= $detail['alamat'] ?></textarea>

                        </div>


                </div>
                <button type="submit" class="btn btn-primary col-md-6 mx-auto"
                    style="background-color: #70b4bc;">Edit</button>
                <br>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>
<?= $this->endSection() ?>