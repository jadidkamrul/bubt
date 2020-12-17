<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bangladesh University of Business and Technology (BUBT)</title>
                <link rel="icon" href="<?php echo base_url();?>componats/new-image/fav.png" type="image/gif" sizes="16x16">

        <!-- Core CSS - Include with every page -->
        <link href="<?php echo base_url(); ?>assets/backend/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/css/main-style.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="<?php echo base_url(); ?>assets/frontend/css/devs-style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/animate.css" rel="stylesheet">
        <style type="text/css">
            #mainNav{
                background:none!important;
            }
            .navbar-custom {
                background: rgba(251, 252, 252, 0.8) none repeat scroll 0 0;
                border: medium none;
                box-shadow: 1px 9px 19px -8px rgba(0, 0, 0, 0.75);
                padding:0!important;
                transition: padding 0.4s ease 0s;
            }
            .devs-navbarbrand h1 {
                color: #222;
                float: left;
                font-family: "Myriad Pro";
                font-size: 43px;
                font-weight: bolder;
                margin-left: 15px;
                margin-top: 10px;
                width: 320px;
            }
            .devs-navbarbrand{
                clear: none;
                display: block;
                float: left;
                margin-top: 0 !important;
                width: 100%;

            }
            .panel-body .form-control{
                background: transparent!important;
                border:1px solid #ddd!important;
            }
            .panel-body label{
                font-family: "Myriad Pro";
                color: #222;
                font-weight:normal;
                font-size: 16px;
            }
            #infoMessage > p {
                border-left: 3px solid red;
                color: red;
                margin: 8px 22px;
                padding: 2px;
            }
        </style>
    </head>
    <body class="" style="background-image: url(<?php echo base_url(); ?>assets/frontend/componats/new-image/bubt-2.png);background-repeat: no-repeat;background-size: cover;">

        <div class="container">

            <div class="row">
                <div class="col-md-5 col-md-offset-3 text-center logo-margin ">


<!--                    <img src="<?php echo base_url(); ?>assets/backend/img/logo.png" class="img-responsive" alt=""/>-->
                </div>
                <div class="col-md-5 col-md-offset-4">
                    <div class=" navbar-custom" style="border-radius: 0px;">                  



                        <a href="" class="devs-navbarbrand" >
                            <img src="<?php echo base_url(); ?>assets/backend/img/<?php echo $settings[0]['logo']; ?>"class="sm-navbarbrand-logo animated fadeInDown" >
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


                        <!-- Collect the nav links, forms, and other content for toggling -->


                        <!-- /.navbar-collapse -->
                        <div class="clearfix"></div> 
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <div class="clearfix"></div>
                        <div class="panel-body">
                            <?php echo form_open("admin/auth/forgot_password"); ?>
                            <fieldset>
                                <div class="form-group">
                                    <p>
                                        <label for="identity"><?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label> <br />
                                        <?php echo form_input($identity,'','class=form-control'); ?>

                                    </p></div>
                                <div class="form-group">
                                





                                    <p class="text-right"><a class="btn btn-info" href="<?php echo site_url('admin');?>">Back</a> &nbsp;<?php echo form_submit('submit', "Reset","class='btn btn-danger pull right'"); ?></p></p>
                                </div>
                                <?php echo form_close(); ?>
                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="<?php echo base_url(); ?>assets/backend/assets/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/plugins/metisMenu/jquery.metisMenu.js"></script>
<!--        <script src="<?php echo base_url(); ?>assets/backend/plugins/pace/pace.js"></script>-->
<!--        <script src="<?php echo base_url(); ?>assets/backend/scripts/siminta.js"></script>-->
        <!-- Page-Level Plugin Scripts-->
        <script src="<?php echo base_url(); ?>assets/backend/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/plugins/morris/morris.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/scripts/dashboard-demo.js"></script>

    </body>

</html>
