<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Indonesia Culture</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->


    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/vendor/');?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <div class="jumbotron">
        <h1 class="logo me-auto"><a href="index.html">Indonesian Culture </a></h1>
    </div>


    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/hero" alt="" class="img-fluid"></a>-->

</head>
<!-- End Header -->



</div>


<body>
    <div class="row g-5">
        <?php foreach ($article as $a): ?>
        <article>

            <div class="card">


                <ul class="list-unstyled m-">
                    <li class="media ">
                        <div class="media-body">
                            <div class="card-header">
                                <?= $a->kategori?>

                            </div>
                            <div class="card-body"><br>
                                <img src="" style="width: 20rem;" class="mr-3" alt="...">
                            </div>
                            <div class="media-body">
                                <h3 class="mt-0 mb-1"><?= $a->title?></h3>


                                <p class="card-text"><small class="text-muted"><?= $a->created_at?></small></p>
                                <p class="card-text"><?= $a->content?></p>
                                <p class="card-text"><small class="text-muted">auth by<?= $a->author?></small>

                            </div>
                    </li>
            </div>

        </article><?php endforeach?>
    </div>
</body>