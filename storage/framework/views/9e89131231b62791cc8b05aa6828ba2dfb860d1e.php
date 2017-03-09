<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class=" js flexbox no-touch"> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="Author" content="hieuhx"/>
        <?php echo $__env->yieldContent('page-meta'); ?>
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('frontend/newstarland/css/app.css')); ?>" />

        <?php echo $__env->yieldContent('page-css'); ?>

    </head>
    <body  id="app-layout" class="home page-template page-template-template-front-page-slider page-template-template-front-page-slider-php page page-id-7 siteorigin-panels siteorigin-panels-home esg-blurlistenerexists">
        <div id="app">
            <div class="boxed-container">
                <!-- header -->
                <?php echo $__env->make('layouts.newstarland.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /header -->
                <!-- nav -->
                <?php echo $__env->make('layouts.newstarland.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /nav -->

                <!-- content -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- /content -->

                <?php echo $__env->make('layouts.newstarland.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <!-- SCRIPT -->
        <!-- Global Js
       ================================================== -->
        <script type="text/javascript" src="<?php echo e(asset('frontend/newstarland/js/essapi.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('frontend/newstarland/js/jquery.carouFredSel-6.2.1-packed.js')); ?>"></script>
        <script>
            var chpcsArgs = {
                "auto_scroll": "false",
                "circular": "false",
                "easing_effect": "linear",
                "item_align": "center",
                "direction": "left",
                "touch_swipe": "false",
                "item_width": "260",
                "time_out": "5000",
                "css_transition": "false",
                "infinite": "true",
                "fx": "scroll"
            };
        </script>
        <script type="text/javascript" src="<?php echo e(asset('frontend/newstarland/js/jquery.themepunch.essential.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('frontend/newstarland/js/slider-left.js')); ?>"></script>
        <?php echo $__env->yieldContent('page-script'); ?>

    </body>
</html>