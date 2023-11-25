<?= $this->extend('/template') ?>
<?= $this->section('content') ?>
<section class="furniture_section layout_padding">
    <div class="container">
        <div class="row">

            <?php
            foreach ($data as $item) {
                echo '<div class="col-md-6 col-lg-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="assets/' . $item["imageurl"] . '" alt="' . $item["nama"] . '">
                            </div>
                            <div class="detail-box">
                                <h5>' . $item["nama"] . '</h5>
                                <div class="price_box">
                                    <h6 class="price_heading">
                                        <span>Rp</span> ' . number_format($item["harga"], 0, ',', '.') . '
                                    </h6>
                                    <a href="/order/' . $item['id'] . '">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
</section>

<?= $this->endSection() ?>