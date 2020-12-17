<?php
$first_part = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bangladesh University of Business and Technology (BUBT)</title>
        <!-- Core CSS - Include with every page -->
        <link href="<?php echo base_url(); ?>assets/backend/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/lobipanel-master/css/lobipanel.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/lobipanel-master/css/jquery-ui.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/backend/datatable/css/dataTables.bootstrap4.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />
        <link href="<?php echo base_url(); ?>assets/backend/css/bootstrap-imageupload.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/toastr.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/editor.css">
        <link href="<?php echo base_url(); ?>assets/backend/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/css/main-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/slider/styles.imageuploader.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="<?php echo base_url(); ?>assets/backend/css/dropzone.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/mdb/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/backend/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
       
    </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" id="navbar">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo base_url(); ?>assets/backend/img/logo.png" alt="" />
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- navbar-top-links -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- main dropdown -->

                    <!--                    <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <span class="top-label label label-danger">3</span><i class="fa fa-envelope"></i>
                                            </a>
                                             dropdown-messages 
                                            <ul class="dropdown-menu dropdown-messages">
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                                            <span class="pull-right text-muted">
                                                                <em>Yesterday</em>
                                                            </span>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <strong><span class=" label label-info">Jonney Depp</span></strong>
                                                            <span class="pull-right text-muted">
                                                                <em>Yesterday</em>
                                                            </span>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <strong><span class=" label label-success">Jonney Depp</span></strong>
                                                            <span class="pull-right text-muted">
                                                                <em>Yesterday</em>
                                                            </span>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a class="text-center" href="#">
                                                        <strong>Read All Messages</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                             end dropdown-messages 
                                        </li>-->
                    <!--                    <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <span class="top-label label label-success">4</span>  <i class="fa fa-tasks"></i>
                                            </a>
                                             dropdown tasks 
                                            <ul class="dropdown-menu dropdown-tasks">
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <p>
                                                                <strong>Task 1</strong>
                                                                <span class="pull-right text-muted">40% Complete</span>
                                                            </p>
                                                            <div class="progress progress-striped active">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                    <span class="sr-only">40% Complete (success)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <p>
                                                                <strong>Task 2</strong>
                                                                <span class="pull-right text-muted">20% Complete</span>
                                                            </p>
                                                            <div class="progress progress-striped active">
                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                                    <span class="sr-only">20% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <p>
                                                                <strong>Task 3</strong>
                                                                <span class="pull-right text-muted">60% Complete</span>
                                                            </p>
                                                            <div class="progress progress-striped active">
                                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                    <span class="sr-only">60% Complete (warning)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <p>
                                                                <strong>Task 4</strong>
                                                                <span class="pull-right text-muted">80% Complete</span>
                                                            </p>
                                                            <div class="progress progress-striped active">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                                    <span class="sr-only">80% Complete (danger)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a class="text-center" href="#">
                                                        <strong>See All Tasks</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                             end dropdown-tasks 
                                        </li>-->

                    <!--                    <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <span class="top-label label label-warning">5</span>  <i class="fa fa-bell"></i>
                                            </a>
                                             dropdown alerts
                                            <ul class="dropdown-menu dropdown-alerts">
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <i class="fa fa-comment fa-fw"></i>New Comment
                                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <i class="fa fa-envelope fa-fw"></i>Message Sent
                                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <i class="fa fa-tasks fa-fw"></i>New Task
                                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <div>
                                                            <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a class="text-center" href="#">
                                                        <strong>See All Alerts</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                             end dropdown-alerts 
                                        </li>-->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <!-- dropdown user-->
                        <ul class="dropdown-menu dropdown-user">
<!--                            <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                            </li>-->

                            <li><a href="<?php echo site_url('admin/auth/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>
                        <!-- end dropdown-user -->
                    </li>
                    <!-- end main dropdown -->
                </ul>
                <!-- end navbar-top-links -->

            </nav>
            <!-- end navbar top -->

            <!-- navbar side -->
            <nav  class="navbar-default navbar-static-side" role="navigation">
                <!-- sidebar-collapse -->
                <div class="sidebar-collapse">
                    <div class="user-section">
                        <div class="user-section-inner">
                            <img src="<?php echo base_url(); ?>assets/backend/img/user-4.jpg" alt="">
                        </div>
                        <div class="user-info">
                             <?php $user = $this->ion_auth->user()->row(); ?>
                            <div><?php echo $user->username; ?></div>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                            </div>
                        </div>
                    </div>
                    <!-- side-menu -->
                    <ul class="nav sidebar-menu " id="side-menu">
                        <li class="<?php
                        if ($first_part == "dashboard") {echo "menuactive";}?>">
                            <a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li class="<?php if ($first_part == "menu") { echo "menuactive"; } ?>">
                            <a href="<?php echo base_url(); ?>admin/menu"><i class="fa fa-th"></i> CMS<span class="fa arrow"></span></a>
<!--                            <ul class="nav nav-second-level sidebar-menu-tree">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard/add_page"> Add Page</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/dashboard/page_list"> Page List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/menu">Menu</a>
                                </li>
                            </ul>-->
                            <!-- second-level-items -->
                        </li>
                        <li class="<?php
                        if ($first_part == "slider") {
                            echo "menuactive";
                        }
                        ?>">
                            <a href="<?php echo base_url(); ?>admin/slider"><i class="fa fa-film" aria-hidden="true"></i> Slider</a>

                            <!-- second-level-items -->
                        </li>

                        <li class="<?php if ($first_part == "courses") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/courses'); ?>"><i class="fa fa-id-badge"></i> Courses</a>
                        </li>
                        <li class="<?php if ($first_part == "events") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/events'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                        </li>

                        <li class="<?php if ($first_part == "notices") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/notices'); ?>"><i class="fa fa-calendar-minus-o"></i> Notice</a>
                        </li>
                        <li class="<?php if ($first_part == "post") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/post'); ?>"><i class="fa fa-id-badge"></i> Blog</a>
                        </li>
                        <li class="<?php if ($first_part == "story") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/story'); ?>"><i class="fa fa-book"></i> Success Story</a>
                        </li>
                        <li class="<?php if ($first_part == "clients") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/clients'); ?>"><i class="fa fa-handshake-o fa-fw"></i> Client's</a>
                        </li>
                         <li class="<?php if ($first_part == "gallery") { echo "menuactive"; } ?>">
                            <a href="<?php echo base_url(); ?>admin/menu"><i class="fa fa-th"></i> Home Gallery<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level sidebar-menu-tree">
                                <li>
                                    <a href="<?php echo base_url('admin/gallery/location'); ?>"> Location</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/gallery/campus'); ?>"> Campus</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/gallery/faculties'); ?>">Faculty</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('admin/gallery/convocation'); ?>">Convocation</a>
                                    
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('admin/gallery/club'); ?>">Clubs</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li class="<?php if ($first_part == "gallery") { echo "menuactive"; } ?>">
                            <a href="<?php echo base_url(); ?>admin/menu"><i class="fa fa-th"></i> Faculties<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level sidebar-menu-tree">
                               <?php foreach($faculties as $faculty):?> 
                               <li>
                                    <a href="<?php echo base_url('admin/faculty/edit/'.$faculty['slug']); ?>"> <?php echo $faculty['faculty_title'];?></a>
                                </li>
                               <?php endforeach;?>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li class="<?php if ($first_part == "settings") {
                            echo "menuactive";
                        } ?>">
                            <a href="<?php echo site_url('admin/settings'); ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>

                        </li>
                       
                           
                        
                    </ul>
                    <!-- end side-menu -->
                </div>
                <!-- end sidebar-collapse -->
            </nav>