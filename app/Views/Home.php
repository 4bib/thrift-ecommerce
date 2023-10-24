<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container m-auto mt-5" style="width:500px;">
    <h1 class="mb-3">
        <?= "Hello, " . $nama ?>
    </h1>
</div>
<?= $this->endSection() ?>