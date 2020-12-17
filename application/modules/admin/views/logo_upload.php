<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Logo Upload
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Logo Upload</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default devs-panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title devs-panel-tittle">
                            Upload Logo 
                            <div class="pull-right">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    <i  class="fa fa-chevron-down fa-1x"></i></a>
                                <a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>

                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img class="img-thumbnail" id='img-upload' style="height: 200px; width: 200px;"/>
                                    <br>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                       
                                    </div>
                                    <input type="submit" class="btn btn-default login-button" value="Update" style="margin-top: 20px; color: #fff">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

</div>
