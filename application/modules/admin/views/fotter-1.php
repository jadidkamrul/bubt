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
                            Footer Credit 
                            <div class="pull-right">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    <i  class="fa fa-chevron-down fa-1x"></i></a>
                                <a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>

                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="" style="font-size: 17px;">Update Url</label>
                                    <input type="text" class="form-control" style="height: 40px; border-radius: 0px;" placeholder="Update Url" id="slider" name="">
                                    <a href="#" class="btn btn-default login-button" style="color: #fff;margin-top: 20px;float: right;">Update</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default devs-panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title devs-panel-tittle">
                            Fotter Widget 
                            <div class="pull-right">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                                    <i  class="fa fa-chevron-down fa-1x"></i></a>
                                <a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>

                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                <span class="round-tab">
                                                    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                <span class="round-tab">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                                <span class="round-tab">
                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                                <span class="round-tab">
                                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="form-group">
                                                <label for="" style="font-size: 17px;">Fotter Widget Tittle</label>
                                                <input type="text" class="form-control" style="height: 40px; border-radius: 0px;" placeholder="Fotter Widget Tittle" id="slider" name="">
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default login-button next-step" style="color: #fff">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <div class="form-group col-md-6">
                                                <label for="" style="font-size: 17px;">Tittle</label>
                                                <input type="text" class="form-control" style="height: 40px; border-radius: 0px;" placeholder="Enter Tittle" id="slider" name="">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="" style="font-size: 17px;">Tittle Url</label>
                                                <input type="text" class="form-control" style="height: 40px; border-radius: 0px;" placeholder="Enter Tittle" id="slider" name="">
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" class="btn btn-default login-button next-step" style="color:#fff;">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                                <li><button type="button" class="btn btn-default btn-info-full next-step login-button" style="color: #fff;">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="complete">
                                            <h3 class="text-center">Complete</h3>
                                            <p class="text-center">You have successfully completed all steps.</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

</div>
