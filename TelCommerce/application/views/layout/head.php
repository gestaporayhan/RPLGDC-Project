<?php
// Loading Konfigurasi Website
$site 	=	$this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title ?></title>
<!-- SEO Google -->
<meta name="keywords" content="<?php echo $site->keywords ?>">
<meta name="description" content="<?php echo $title ?>, <?php echo $site->deskripsi ?>">
<!--===============================================================================================-->
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/template/css/home_rent.css">
    <link rel = "stylesheet" type = "text/css" href = "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/template/css/owl.carousel.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/template/css/signup.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/template/css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>

