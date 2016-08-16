<!DOCTYPE html>
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]>
<html <?php language_attributes(); ?>> <![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url') ?>/js/lib/respond.min.js"/>
    </script><![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url') ?>/js/lib/html5shiv.js"/>
    </script><![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="0">
    <div id="wrapper">
        <header class="header">

        </header>
        <div id="main" class="clearfix">