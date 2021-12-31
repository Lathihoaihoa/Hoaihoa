<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    
    <link rel="icon" href="#" type="image/x-icon">
    
    <link rel="apple-touch-icon" sizes="180x180" href="#">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="This is the SEO meta description blurb that 
    describes what the page is about. This is a site that helped me improve my 
    programming skills and came into contact with the company I love.">
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="Home" />
    <meta property="og:description" content="Connect & Grow Your Business with the Power 
    of the Encompass Platform" />
    <meta property="og:url" content="http://sagetheme.local/index.php/encompass/" />
    <meta property="og:image" content="https://i.upanh.org/2021/12/23/encompass-share.png" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com" rel="dns-prefetch" crossorigin>
    <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
    <link rel="preload" href='<?= \App\asset_path("styles/app.css"); ?>' as="style">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" rel="preload" as="script">
    <link href='<?= \App\asset_path("scripts/app-mobile.js"); ?>' media="(max-width: 991px)" rel="preload" as="script">
    <link href='<?= \App\asset_path("scripts/app-desktop.js"); ?>' media="(min-width: 992px)" rel="preload" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="canonical" href="http://sage-theme.local/index.php/home/"/>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href='<?= \App\asset_path("core/lib/_print.scss"); ?>' type="text/css" media="print">

    <?php wp_head() ?>
    <link rel='stylesheet' id='sage/font-css' onload="if(media!='screen')media='screen'" href='<?php echo e(S3_FONT); ?>'
        type='text/css' media='print' />
    <?php echo App::getTrackingCode('in_head'); ?>

</head>
