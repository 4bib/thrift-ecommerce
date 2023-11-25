<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <link rel="icon" href="<?= base_url("assets/fevicon.png") ?>" type="image/gif">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ThriftShop</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap.css"); ?>">

    <style>
        .card img {
            max-width: 100%;
            height: auto;
        }

        .cardorder {
            height: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }


        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin: 50px;
        }

        .card-title,
        .card-text {
            flex-grow: 1;
        }
    </style>

</head>

<body>
    <br><br>
    <?= $this->include("/navbar"); ?>
    <?= $this->renderSection('content') ?>

    <!-- Your specific script -->
    <script>
        // Your JavaScript code here
    </script>
</body>

</html>