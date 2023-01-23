<?php
require_once '../config.php';
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>B&R Tecnologia | Serviços</title>

    <link rel="icon" href="<?php echo BASEURL ?>img/icone-ber.svg">

    <link href="<?php echo BASEURL ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="<?php echo BASEURL ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="<?php echo BASEURL ?>assets/css/main.css" rel="stylesheet">

</head>

<body>


    <?php include_once(ABSPATH . '/blocks/header.php'); ?>
    <?php include_once(ABSPATH . '/content/cont_servicos.php'); ?>
    <?php include_once(ABSPATH . '/blocks/whatsapp_button.php'); ?>
    <?php include_once(ABSPATH . '/blocks/footer.php'); ?>
    <?php include_once(ABSPATH . '/blocks/cookies.php'); ?>
    <?php include_once(ABSPATH . '/blocks/gotop_btn.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script src="<?php echo BASEURL ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo BASEURL ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo BASEURL ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo BASEURL ?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo BASEURL ?>assets/vendor/php-email-form/validate.js"></script>

    <script src="<?php echo BASEURL ?>assets/js/main.js"></script>

</body>

</html>