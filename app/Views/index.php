<?= $this->extend('/template') ?>
<?= $this->section('content') ?>
<div class="hero_area">
    <!-- slider section -->
    <section class="slider_section long_section">
        <div id="customCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h2>
                                        Thrifting trendi untuk Anda
                                    </h2>
                                    <p>
                                        Tersedia thrift adidas, balenciaga, burberry dan lainnya.
                                    </p>
                                    <div class="btn-box">
                                        <a href="/product" class="btn1">
                                            Mulai Belanja
                                        </a>
                                        &nbsp;&nbsp;
                                        <a href="/about" class="btn2">
                                            Tentang Kami
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="assets/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        Thrifted: Thrifting yang nyaman dan elegan
                                    </h1>
                                    <p>
                                        Kami menawarkan Thrifting berkualitas dengan harga terjangkau. Dari blazer,
                                        cardigan,
                                        kaos, kemeja, hingga jaket kulit, semua tersedia untuk Anda.
                                    </p>
                                    <div class="btn-box">
                                        <a href="/product" class="btn1">
                                            Mulai Belanja
                                        </a>
                                        <a href="/about" class="btn2">
                                            Tentang Kami
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="assets/" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        Thrifting untuk semua orang, dari semua gaya
                                    </h1>
                                    <p>
                                        Apa pun gaya fesyen Anda, kami punya Thrifting yang cocok untuk Anda. Dari
                                        modern,
                                        klasik, retro, hingga vintage, kami memiliki pilihan yang beragam dan
                                        menarik.
                                    </p>
                                    <div class="btn-box">
                                        <a href="/product" class="btn1">
                                            Mulai Belanja
                                        </a>
                                        <a href="/about" class="btn2">
                                            Tentang Kami
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="assets/" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel" data-slide-to="1"></li>
                <li data-target="#customCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>

    <!-- end slider section -->
</div>

<!-- product section -->

<section class="thrifting_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Produk Unggulan Kami
            </h2>
        </div>
        <div class="row">

            <?php
            $i = 0;
            foreach ($data as $item) {
                if ($i < 3) {
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
                    $i++; // Tambahkan 1 ke variabel penanda jumlah item yang sudah ditampilkan
                }
            }
            ?>




        </div>
    </div>
</section>

<div class="btn-box text-center">
    <a href="/product" class="btn1"
        style="color: white; background-color: #88d4cc; border: 2px solid #88d4cc; padding: 5px 10px;">
        Lebih banyak...
    </a>
</div>

</div>

<br><br>



<!-- end section -->



<?= $this->endSection() ?>