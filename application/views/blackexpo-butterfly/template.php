<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from fbtemplates.net/html/nemesis-v1.0.3/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Mar 2020 19:07:12 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="mycoding.net">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
    <?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ $rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();
       echo '<meta property="og:title" content="'.$title.'" />
             <meta property="og:type" content="article" />
             <meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'" />
             <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
             <meta property="og:description" content="'.$description.'"/>';
    } ?>
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	

    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400" rel="stylesheet">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/css/fonts.css" rel="stylesheet" media="screen">
    <link href="<?= base_url(); ?>template/<?= template(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href='<?= base_url(); ?>template/<?= template(); ?>/jssocials/jssocials.css' rel='stylesheet' type='text/css' />
    <link href='<?= base_url(); ?>template/<?= template(); ?>/jssocials/theme-flat.css' rel='stylesheet' type='text/css' />


    <link href="<?= base_url(); ?>template/<?= template(); ?>/css/style.css" rel="stylesheet" media="screen">
</head>

<body>

    <div id="fbt-content-overlay" onclick="closeNav()"></div>
    <form autocomplete="off" id="search" role="search">
        <div class="input">
            <input class="search" name="search" placeholder="Search..." type="text" />
            <button class="submit fa fa-search" type="submit" value=""></button>
        </div>
        <button id="close" type="reset" value="">×</button>
    </form><!-- #search -->

    <div id="page-wrapper" class="magazine-view feed-view">

        <?php

            $this->load->view(template().'/header');
            
            echo $contents;
            
            $this->load->view(template().'/footer');
        ?>

        

        

    </div><!-- #page-wrapper end -->

    <script src="<?= base_url(); ?>template/<?= template(); ?>/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/js/plugins.js"></script>
    <script src="<?= base_url(); ?>template/<?= template(); ?>/js/main.js"></script>

    <script src="<?= base_url(); ?>template/<?= template(); ?>/jssocials/jssocials.min.js"></script>
    <script>
        $("#share").jsSocials({
            shareIn: "popup",
            showLabel: true,
            showCount: true,
            // shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
            shares: ["twitter", "facebook", "linkedin", "whatsapp"]
        });
    </script>

</body>


<!-- Mirrored from fbtemplates.net/html/nemesis-v1.0.3/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Mar 2020 19:07:18 GMT -->
</html>