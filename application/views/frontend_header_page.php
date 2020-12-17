<!DOCTYPE html>
<html lang="en">

    <head>

        <link rel="icon" href="componats/new-image/fav.png" type="image/gif" sizes="16x16">
        <title>Bangladesh University of Business and Technology (BUBT)</title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Hege Refsnes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to Bangladesh University of Business and Technology(BUBT). It is one of the eight Universities to receive the Green Signal from the government ..." />
        <meta name="keywords" content="BUBT, bubt,Bangladesh University of Business and Technology, Education,Bangladesh Education, Bangladesh University, University,CSE,EEE,BBA,MBA " />
        <link href="font-ex/stylesheet.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/frontend/fonts-2/delth-style/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/fonts-2/charlesttbold/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/fonts-2/lithos-pro-black/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/fonts-2/ErikGCapsSketches/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/fonts-2/Daniel/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=BenchNine');
        </style>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/loader/css/effect1.css" />

        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/devs-style.css" rel="stylesheet">
<!--        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">-->
        <link href="<?php echo base_url(); ?>assets/frontend/css/animate.css" rel="stylesheet">
    </head>

    <body id="page-top" class="index page-scroller"  >

        <!--        <div class="se-pre-con"></div>-->
    
       
            <!-- Navigation -->
            <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-md-offset-8 col-md-4 col-xs-12" style="padding:0px;">
                        <div class="top-menu-list">
                            <ul>
                                <li><a href="">EN</a></li>
                                <li ><a href="" ><span style="padding-right:4px">|</span>BN</a></li>
                                <li><a href="" style="padding-left:10px;">LOGIN</a></li>
                            </ul>
                        </div>
                        <div class="search-box">
                            <form class="navbar-form" role="search" style="padding:0px;margin: 0px;">
                                <div class="input-group devs-input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn devs-search-btn">
                                        <button class="btn btn-default" type="submit">HELP</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="navbar-header page-scroll" ng-app="myApp" ng-controller="settingsController" >
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a href="" class="navbar-brand devs-navbarbrand" >
                            <img src="<?php echo base_url(); ?>assets/backend/img/<?php echo $settings[0]['logo']; ?>"class="sm-navbarbrand-logo" >
                            <h1 style="font-weight: bold">

                                <?php
                                $str = $settings[0]['site_title'];
                                preg_match_all('#([A-Z]+)#', $str, $matches);

                                echo implode('', $matches[1]);
                                ?>
                                <small>

                                    <?php
                                    $original = $settings[0]['site_title'];
                                    $parts = str_split($original, 25);
                                    $final = implode("<br>", $parts);
                                    echo $final;
                                    ?>

                                </small></h1>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right" id="menucollasp" style="border-top: 1px solid #222;" >
                            <li class="active">
                                <a href="" style="margin-top:-3px;"><img src="<?php echo base_url(); ?>assets/frontend/componats/new-image/home-button.png" style="height:25px;" alt="" data-parent="menucollasp"></a>
                            </li>




                            <?php foreach ($menus as $menu): ?>
                                <li>
                                    <a href="#" data-toggle="<?php
                                    if ($menu['subs']) {
                                        echo 'collapse';
                                    }
                                    ?>" data-target="#extra-menu<?php echo $menu['id']; ?>"  class="active"><?php echo $menu['label']; ?><p class="about-icon">
                                       <?php if ($menu['subs']): ?> 
                                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                            <?php endif; ?>
                                        </p></a>
                                </li>




                            <?php endforeach; ?>


                        </ul>
                    </div>
                    <?php foreach ($menus as $menu): ?>
                        <div id="extra-menu<?php echo $menu['id']; ?>" class="collapse collapse-menu" style="overflow: hidden; border-top: 2px solid #222;">

                            <div class="row">
                                <?php
                                $i = 0;
                                foreach ($menu['subs'] as $menu2):
                                    ?>
                                    <div class="col-md-3 col-xs-6 devs-megamenu-heading">
                                        <?php $i++; ?>
                                        <h2><?php echo $menu2['label']; ?></h2>
                                        <div class="devs-megamenu-list <?php if($i!=4){echo "vertLine";};?>">
                                            <ul>
                                                <?php foreach ($menu2['subs'] as $menu3): ?>
                                                    <li><a href=""><?php echo $menu3['label']; ?></a></li> 

                                                <?php endforeach; ?>
                                            </ul>
                                         
                                        </div>
                                        
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->

            </nav>

