<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Faculty
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Faculty</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <form id="update_faculty_info" method="POST" action="" enctype="multipart/form-data">
                    <div class="panel-heading slider-table_heading">
                        <?php echo $fac_data[0]['faculty_title']; ?>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">

                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-primary">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Faculty Title</label>
                                                <input id="name" name="faculty_id" type="hidden" value="<?php echo $fac_data[0]['faculty_id']; ?>" class="form-control input-md">

                                                <input id="name" name="faculty_title" type="text" value="<?php echo $fac_data[0]['faculty_title']; ?>" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Department Title</label>
                                                <input id="name" name="department_title" type="text" value="<?php echo $fac_data[0]['department_title']; ?>"  class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Department Count</label>
                                                <input id="name" name="department_count" type="text" value="<?php echo $fac_data[0]['department_count']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Quotes</label>
                                                <input id="name" name="qoutes" type="text" value="<?php echo $fac_data[0]['qoutes']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Faculty Description
                                        </div>
                                        <div class="panel-body">

                                            <textarea name="faculty_desc" class="form-control" rows="5"><?php echo $fac_data[0]['faculty_desc']; ?></textarea>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="panel_custom panel-success">
                                                        <div class="panel-body">

                                                            <div class="form-group">
                                                                <label class="control-label" for="name">Graduate page link</label>
                                                                <input id="name" name="g_page" type="text" value="<?php echo $fac_data[0]['g_page']; ?>" class="form-control input-md">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="panel_custom panel-success">
                                                        <div class="panel-body">

                                                            <div class="form-group">
                                                                <label class="control-label" for="name">Under Graduate page link</label>
                                                                <input id="name" name="under_g_page" type="text" value="<?php echo $fac_data[0]['under_g_page']; ?>" class="form-control input-md">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="panel_custom panel-success">
                                                        <div class="panel-body">

                                                            <div class="form-group">
                                                                <label class="control-label" for="name">Research page link</label>
                                                                <input id="name" name="r_page" type="text" value="<?php echo $fac_data[0]['r_page']; ?>" class="form-control input-md">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Message
                                        </div>
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Photo</label>
                                                <div class="main-img-preview">
                                                    <img class="thumbnail img-preview" src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $fac_data[0]['head_photo']; ?>" title="Preview Logo">
                                                </div>
                                                <div class="input-group">
                                                    <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                                                    <div class="input-group-btn">
                                                        <div class="fileUpload btn btn-danger fake-shadow">
                                                            <span><i class="glyphicon glyphicon-upload"></i> Upload Photo</span>
                                                            <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="name">Name</label>
                                                <input id="name" name="head_name" type="text" value="<?php echo $fac_data[0]['head_name']; ?>" class="form-control input-md">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="name">Designation</label>
                                                <input id="name" name="head_designation" type="text" value="<?php echo $fac_data[0]['head_designation']; ?>" class="form-control input-md">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="name">Others</label>
                                                <input id="name" name="head_others" type="text" value="<?php echo $fac_data[0]['head_others']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-md col-md-offset-4 col-md-4">Submit</button>

                    </div>
                </form>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading slider-table_heading">
                    Department <button class=" btn-default pull-right" data-toggle="modal" data-target="#myModal">Add new</button><br />
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="">
                            <thead>
                                <tr>
                                    <th>Department Name</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody id="depart_Data">



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <form id="add_department" method="POST" action="" enctype="multipart/form-data">

                <div class="modal-body">

                    <input id="name" name="faculty_id" type="hidden" value="<?php echo $fac_data[0]['faculty_id']; ?>" class="form-control input-md">              

                    <div class="form-group">
                        <label for="message-text" class="control-label">Department Title:</label>
                        <textarea class="form-control" id="message-text" name="department_title"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Sort:</label>
                        <input id="name" name="sort" type="text" value="" class="form-control input-md">              

                    </div>

                </div>
                <!-- dialog buttons -->
                <div class="modal-footer"><button type="submit" class="btn btn-primary" >Add</button></div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    
    
    function reload_table(){
            $.ajax({
    type: "POST",
            url: "<?php echo site_url(); ?>/admin/faculty/departments",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
            $('#depart_Data').html(data);
            }
    }); 
    }
 
    $(document).ready(function() {
    $.ajax({
    type: "POST",
            url: "<?php echo site_url(); ?>/admin/faculty/departments",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
            $('#depart_Data').html(data);
            }
    });  });
            $(".msg1").hide();
            $('#update_faculty_info').submit(function (event) {


            $.ajax({
            type: "POST",
                    url: "<?php echo site_url(); ?>/admin/faculty/update_faculty_info",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                  $("#myModal").hide();
                            toastr.success('Successfully Updated', 'Success! ');
                            toastr.options.showMethod = 'slideDown';
                            toastr.options.hideMethod = 'slideUp';
                            toastr.options.closeMethod = 'slideUp';
                            toastr.options.timeOut = 3;
                           
                    }

            });
            event.preventDefault();
    });
            $('#add_department').submit(function (event) {



    $.ajax({
    type: "POST",
            url: "<?php echo site_url(); ?>/admin/faculty/add_department",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

            toastr.success('Successfully Updated', 'Success! ');
                    toastr.options.showMethod = 'slideDown';
                    toastr.options.hideMethod = 'slideUp';
                    toastr.options.closeMethod = 'slideUp';
                    toastr.options.timeOut = 3;
                    reload_table();
            }

    });
            event.preventDefault();
    });

</script>