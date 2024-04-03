
	<link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/lgr7ylp.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<?php if(strpos($_SERVER['PHP_SELF'],'index.php') !== false) { ?>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css" /> -->
    <link rel="stylesheet" href="assets/plugins/swiper/swiper-bundle.min.css" />
<?php } ?>
<?php if(strpos($_SERVER['PHP_SELF'],'book-appointment.php') !== false) { ?>
    <link rel="stylesheet" href="assets/plugins/datepicker/bootstrap-datepicker.min.css" />
<?php } ?>
<?php if(strpos($_SERVER['PHP_SELF'],'news-detail.php') !== false) { ?>
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
<?php } ?>
    <link rel="stylesheet" href="assets/style.css?v2.1" />
    <link rel="stylesheet" href="assets/plugins/animate/animate.css" />

<?php if(strpos($_SERVER['PHP_SELF'],'speciality.php') !== false) { ?>
    <style>
        ul.li > a:after {
            content: '';
            width: 1px;
            height: 1px;
            background-color: grey;
        }
    </style>
<?php } ?>
