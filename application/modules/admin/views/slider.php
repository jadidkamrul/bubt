<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Slider
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Slider</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading slider-table_heading">

                    <!-- Advanced Tables -->

                    <!--End Advanced Tables -->

                    <div class="panel-heading">
                        <div class="panel-title" style="font-size: 25px;">Upload Slide</div>
                    </div>
                    <span data-dz-name></span>
                    <form id="slider_Add" action="<?php echo site_url('admin/slider/add_slider'); ?>" method="POST" enctype="multipart/form-data" class="dropzone">





                </div>
                <div class="panel-body">
                    <div id="slider" class="table-responsive">
                        <div class="row">
                            <div class="thumbnails">
                                <?php foreach ($sliders as $slide): ?>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/slider/<?php echo $slide['slider_image']; ?>" style="height:200px" class="img-responsive">
                                            <div class="caption">

                                                <p align="center"><a href="" class="btn btn-primary btn-block">Edit</a><a href="" class="btn btn-danger btn-block">Delete</a></p>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>


                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

</div>
