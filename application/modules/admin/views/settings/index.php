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
        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                <ul class="list-group setting_sidebar">

                    <a href="#" class="list-group-item ">
                        <i class="glyphicon glyphicon-user"></i> GENERAL 
                    </a>

                    <a href="#" class="list-group-item ">
                        <i class="glyphicon glyphicon-user"></i> SOCIAL 
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="glyphicon glyphicon-th-list"></i> WIDGET 
                    </a>

                    <a href="#" class="list-group-item">
                        <i class="glyphicon glyphicon-envelope"></i> STATICTICS
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="glyphicon glyphicon-envelope"></i> Links
                    </a>
<!--                    <a href="#" class="list-group-item">
                        <i class="glyphicon glyphicon-envelope"></i> FOOTER
                    </a>-->

                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <div class="row">
                        <div class="col-md-12 "> 

                            <div class="panel-footer">
                                <h3> Logo</h3>

                                <form id="add_site_logo" action="" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="settings_id" value="<?php echo $settings[0]['settings_id']; ?>" />


                                    <div class="student_photo_preview "> 
                                        <img id="previewHolder" style="width: 112px;" src="<?php echo base_url(); ?>assets/backend/img/<?php echo $settings[0]['logo']; ?>" alt="Logo" />


                                    </div>
                                    <div class="form-group photo_upload_input">
                                        <input type="file" name="userfile" 
                                               id="userfile">
                                    </div>
                                    <p class="text-right">
                                        <input type="submit" class="btn btn-success waves-effect waves-light " name="logo_update" value="Update"> 

                                    </p>
                                </form>
                            </div>





                        </div> <div class="clearfix"></div> <br>
                        <div class="col-md-12"> 

                            <div class="panel-footer col-md-12">
                                <div class="alert alert-success alert-dismissible animated msg bounceInDown " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <img src="<?php echo base_url('assets/images/correct.png'); ?>" alt="" /> <strong>Updated</strong> 
                                </div>
                                <h3 class="text-left"> Site title</h3>
                                <form id="add_site_option" action="" method="post">

                                    <input type="hidden" name="settings_id" value="<?php echo $settings[0]['settings_id']; ?>" />



                                    <div class="form-group ">
                                        <input class="form-control" type="text" name="site_title" value="<?php echo $settings[0]['site_title']; ?>" 
                                               id="">
                                    </div>


                                    <p class="text-right">
                                        <input type="submit" class="btn btn-default " name="title_update" value="Update"> 

                                    </p>
                                </form>


                            </div>





                        </div>

                    </div>
                </div>

                <div class="bhoechie-tab-content">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default devs-panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title devs-panel-tittle">
                                    Social Media Info
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
                                    <div class="col-md-12">
                                        <form id="add_social_option" method="post" action="<?php echo site_url('admin/settings/social'); ?>">
                                            <div class="form-group">
                                                <label class="form-label">Facebook URL </label>
                                                <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Facebook Url" id="slider" value="<?php echo $settings[0]['facebook']; ?>" name="facebook">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Twitter URL</label>
                                                <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Twitter URL" id="slider" value="<?php echo $settings[0]['twitter']; ?>" name="twitter">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Google Plus URL</label>
                                                <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Google Plus URL" id="slider" value="<?php echo $settings[0]['gplus']; ?>" name="gplus">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Youtube URL</label>
                                                <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Youtube URL" id="slider" value="<?php echo $settings[0]['youtube']; ?>" name="youtube">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Linkdin URL</label>
                                                <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Linkdin Url" id="slider" value="<?php echo $settings[0]['linkdin']; ?>" name="linkdin">
                                            </div>
                                            <button type="submit" class="btn btn-default login-button" style="color: #fff;margin-top: 15px;float: right;">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bhoechie-tab-content">
                    <div class="panel-group" id="accordion">
                        <div class="">
                            <div class="panel-heading">
                                <h3 class="panel-title devs-panel-tittle">
                                    Footer Widget
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
                                    <div class="row">
                                        <?php foreach ($widgets as $widget): ?>
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <div class="panel-title devs-panel-tittle-small"><?php echo $widget['widget_title']; ?></div>
                                                    </div>
                                                    <form class="add_widget_option<?php echo $widget['widget_id']; ?>" method="post" action="">

                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <label style="color: #676767">Widget Tittle </label>
                                                                <input type="hidden" class="form-control" style="border-radius: 0px;"  id="slider" name="widget_id" value="<?php echo $widget['widget_id']; ?>">

                                                                <input type="text" class="form-control" style="border-radius: 0px;"  id="slider" name="widget_title" value="<?php echo $widget['widget_title']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label style="color: #676767">Links  <button class="add_field_button<?php echo $widget['widget_id']; ?> btn btn-default btn-xs">Add More</button></label>
                                                                <div class="input_fields_wrap<?php echo $widget['widget_id']; ?>">

                                                                    <?php
                                                                    $where = array(
                                                                        'widget_id' => $widget['widget_id'],
                                                                    );
                                                                    $meta_data = $this->prime->get_data('widget_meta', '', $where);
                                                                    ?>
                                                                    <?php if (empty($meta_data)): ?>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control " style="border-radius: 0px;"  id="slider" name="data[title][]" >
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control col-md-6" style="border-radius: 0px;"  id="slider" name="data[url][]">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <?php foreach ($meta_data as $row):
                                                                        ?>

                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control " style="border-radius: 0px;" placeholder="Tittle" id="slider" name="data[title][]" value="<?php echo $row['link_title']; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control col-md-6" style="border-radius: 0px;" placeholder="Link" id="slider" name="data[url][]" value="<?php echo $row['url']; ?>">
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>    
                                                                <br />

                                                            </div>

                                                            <button type="submit" class="btn btn-default login-button" style="color: #fff;margin-top: 15px;margin-right: 15px;">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                var max_fields = 5; //maximum input boxes allowed
                                                var wrapper<?php echo $widget['widget_id']; ?> = $(".input_fields_wrap<?php echo $widget['widget_id']; ?>"); //Fields wrapper
                                                var add_button<?php echo $widget['widget_id']; ?> = $(".add_field_button<?php echo $widget['widget_id']; ?>"); //Add button ID

                                                var x = 1; //initlal text box count
                                                $(add_button<?php echo $widget['widget_id']; ?>).click(function (e) { //on add input button click
                                                    e.preventDefault();
                                                    if (x < max_fields) { //max input box allowed
                                                        x++; //text box increment
                                                        $(wrapper<?php echo $widget['widget_id']; ?>).append('<div><div class="col-md-6"><input type="text" class="form-control " style="border-radius: 0px;" placeholder="Tittle" id="slider" name="data[title][]"></div><div class="col-md-5"><input type="text" class="form-control col-md-6" style="border-radius: 0px;" placeholder="URL" id="slider" name="data[url][]"></div><a href="#" class="remove_field col-md-1"><i class="fa fa-remove "></i></a></div>'); //add input box


                                                    }
                                                });

                                                $(wrapper<?php echo $widget['widget_id']; ?>).on("click", ".remove_field", function (e) { //user click on remove text
                                                    e.preventDefault();
                                                    $(this).parent('div').remove();
                                                    x--;

                                                })

                                                $('.add_widget_option<?php echo $widget['widget_id']; ?>').submit(function (event) {

                                                    dataString = $(".add_widget_option<?php echo $widget['widget_id']; ?>").serialize();

                                                    $.ajax({
                                                        type: "POST",
                                                        url: "<?php echo site_url('admin/settings/widget'); ?>",
                                                        data: dataString,
                                                        success: function (data) {

                                                            toastr.success('Successfully Updated ', 'Success!');
                                                            toastr.options.showMethod = 'slideDown';
                                                            toastr.options.hideMethod = 'slideUp';
                                                            toastr.options.closeMethod = 'slideUp';
                                                        }

                                                    });
                                                    event.preventDefault();
                                                });
                                            </script>
                                        <?php endforeach; ?>

                                    </div>
                                    <br>

                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="panel panel-default devs-panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title devs-panel-tittle">
                                SSTATICTICS
                                <div class="pull-right">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                        <i  class="fa fa-chevron-down fa-1x"></i></a>
                                    <a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                </div>

                            </h3>
                        </div>
                        <div class="panel-body"
                             <div class="col-md-12">
                                <form id="add_general_option" action="" method="post">
                                    <input type="hidden" name="settings_id" value="<?php echo $settings[0]['settings_id']; ?>" />

                                    <div class="form-group">
                                        <label class="form-label">Total Faculty </label>
                                        <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Faculty Counter" value="<?php echo $settings[0]['faculty']; ?>" name="faculty">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Total Campus</label>
                                        <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Campus Counter" value="<?php echo $settings[0]['campus']; ?>"  name="campus">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Total Teacher</label>
                                        <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Teacher Counter" value="<?php echo $settings[0]['teachers']; ?>" name="teachers">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Total Student</label>
                                        <input type="text" class="form-control" style="border-radius: 0px;" placeholder="Student Counter" value="<?php echo $settings[0]['students']; ?>" name="students">
                                    </div>
                                    <p class="text-right">
                                        <input type="submit" class="btn btn-default " name="general_update" value="Update"> 

                                    </p>                          
                                </form>
                            </div></div>
                    </div>

                    <div class="bhoechie-tab-content">
                        <div class="panel panel-default devs-panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title devs-panel-tittle">
                                    Links
                                    <div class="pull-right">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                            <i  class="fa fa-chevron-down fa-1x"></i></a>
                                        <a href=""><i class="fa fa-cog" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>

                                </h3>
                            </div>
                            <div class="panel-body"
                                 <div class="col-md-12">
                                    <form id="add_link_option" action="" method="post">
                                        <input type="hidden" name="settings_id" value="<?php echo $settings[0]['settings_id']; ?>" />

                                        <div class="form-group">
                                            <label class="form-label">Welcome Video Link</label>
                                            <input type="text" class="form-control" style="border-radius: 0px;"  value="<?php echo $settings[0]['welcome_link']; ?>" name="welcome_link">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Take a Tour Video Link</label>
                                            <input type="text" class="form-control" style="border-radius: 0px;"  value="<?php echo $settings[0]['tour_link']; ?>"  name="tour_link">
                                        </div>

                                        <p class="text-right">
                                            <input type="submit" class="btn btn-default " name="general_update" value="Update"> 

                                        </p>                          
                                    </form>
                                </div></div>
                        </div>
                        <div class="bhoechie-tab-content">

                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#previewHolder').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#userfile").change(function () {
                    readURL(this);
                });
            </script>
            <script type="text/javascript">
                $(".msg1").hide();
                $('#add_site_logo').submit(function (event) {

                    dataString = $("#add_site_logo").serialize();

                    $.ajax({
                        type: "POST",

                        url: "<?php echo site_url(); ?>/admin/settings/update_logo",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {

                            toastr.success('Logo Successfully Updated', 'Success! ');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';
                            toastr.options.timeOut = 3;
                        }

                    });
                    event.preventDefault();
                });

            </script>
            <script type="text/javascript">
                $(".msg").hide();
                $('#add_site_option').submit(function (event) {

                    dataString = $("#add_site_option").serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('admin/settings/update'); ?>",
                        data: dataString,
                        success: function (data) {
                            toastr.success('Successfully Updated', 'Success! ');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';

                        }

                    });
                    event.preventDefault();
                });
                $('#add_social_option').submit(function (event) {

                    dataString = $("#add_social_option").serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('admin/settings/update'); ?>",
                        data: dataString,
                        success: function (data) {
                            toastr.success('Social Info Successfully Updated ', 'Success!');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';

                        }

                    });
                    event.preventDefault();
                });
                $('#add_general_option').submit(function (event) {

                    dataString = $("#add_general_option").serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('admin/settings/update'); ?>",
                        data: dataString,
                        success: function (data) {

                            toastr.success('Successfully Updated ', 'Success!');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';
                        }

                    });
                    event.preventDefault();
                });
                $('#add_link_option').submit(function (event) {

                    dataString = $("#add_link_option").serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('admin/settings/update'); ?>",
                        data: dataString,
                        success: function (data) {

                            toastr.success('Successfully Updated ', 'Success!');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';
                        }

                    });
                    event.preventDefault();
                });
            </script>
