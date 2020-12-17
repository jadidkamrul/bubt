<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <div class="row">
        <!--quick info section -->
        <div class="col-md-12">
            <ul class="nav nav-tabs edit-menu-nav">
                <li class="active"><a data-toggle="tab" href="#edit-menu">Edit Menu</a></li>
                <li><a data-toggle="tab" href="#menu-locations">Manage Locations</a></li>
            </ul>
            <div class="manage-menus">
                <span class="add-edit-menu-action">
                    Edit your menu below, or <a href="">create a new menu</a>.
                </span>
            </div>
            <div class="tab-content">
                <div id="edit-menu" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading librePanelHeading">
                                    <div class="panel-title menu-edit">
                                        <a data-toggle="collapse" href="#menuPanelListGroup">
                                            <span>Pages</span>
                                            <i class="pull-right fa fa-chevron-down libreMenuIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in" id="menuPanelListGroup">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs edit-menu-nav-m" style="margin-top: 20px;">
                                            <li class="active"><a data-toggle="tab" href="#Most_Resent"> Most Resent</a></li>
                                            <li><a data-toggle="tab" href="#View_All">View All</a></li>
                                            <li><a data-toggle="tab" href="#Search">Search</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="Most_Resent" class="tab-pane fade in active">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="View_All" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="Search" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <a href="">Select All</a>
                                                <a href="" class="btn btn-default pull-right">Add To Menu</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="panel-heading librePanelHeading">
                                    <div class="panel-title menu-edit">


                                        <a data-toggle="collapse" href="#menu2PanelListGroup">
                                            <span>Posts</span>
                                            <i class="pull-right fa fa-chevron-down libreMenuIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse out" id="menu2PanelListGroup">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs edit-menu-nav-m" style="margin-top: 20px;">
                                            <li class="active"><a data-toggle="tab" href="#Most_Resent2"> Most Resent</a></li>
                                            <li><a data-toggle="tab" href="#View_All2">View All</a></li>
                                            <li><a data-toggle="tab" href="#Search2">Search</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="Most_Resent2" class="tab-pane fade in active">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="View_All2" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="Search2" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <a href="">Select All</a>
                                                <a href="" class="btn btn-default pull-right">Add To Menu</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-heading librePanelHeading">
                                    <div class="panel-title menu-edit">
                                        <a data-toggle="collapse" href="#menu3PanelListGroup">
                                            <span>Custom Link</span>
                                            <i class="pull-right fa fa-chevron-down libreMenuIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse out" id="menu3PanelListGroup">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs edit-menu-nav-m" style="margin-top: 20px;">
                                            <li class="active"><a data-toggle="tab" href="#Most_Resent3"> Most Resent</a></li>
                                            <li><a data-toggle="tab" href="#View_All3">View All</a></li>
                                            <li><a data-toggle="tab" href="#Search3">Search</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="Most_Resent3" class="tab-pane fade in active">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="View_All3" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="Search3" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <a href="">Select All</a>
                                                <a href="" class="btn btn-default pull-right">Add To Menu</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-heading librePanelHeading">
                                    <div class="panel-title menu-edit">


                                        <a data-toggle="collapse" href="#menu4PanelListGroup">
                                            <span>Categories</span>
                                            <i class="pull-right fa fa-chevron-down libreMenuIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse out" id="menu4PanelListGroup">
<div class="col-md-12">
                                        <ul class="nav nav-tabs edit-menu-nav-m" style="margin-top: 20px;">
                                            <li class="active"><a data-toggle="tab" href="#Most_Resent4"> Most Resent</a></li>
                                            <li><a data-toggle="tab" href="#View_All4">View All</a></li>
                                            <li><a data-toggle="tab" href="#Search4">Search</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="Most_Resent4" class="tab-pane fade in active">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="View_All4" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div id="Search4" class="tab-pane fade">
                                                <form action="#" method="#">
                                                    <input type="checkbox" name="vehicle" value="Bike"> Home<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> About<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Blog<br>
                                                    <input type="checkbox" name="vehicle" value="Car" checked> Main Menu<br>
                                                    <input type="checkbox" name="vehicle" value="Bike"> Sub Menu<br>

                                                </form>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <a href="">Select All</a>
                                                <a href="" class="btn btn-default pull-right">Add To Menu</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>
                </div>
                <div id="menu-locations" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
            </div>

        </div>
        <!--end quick info section -->
    </div>
</div>