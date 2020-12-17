<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Edit department
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
                <form id="update_department_info" method="POST" action="" enctype="multipart/form-data">
                    <div class="panel-heading slider-table_heading">
                        <?php echo $depart_data[0]['department_title']; ?>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">

                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-primary">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Department Title</label>
                                                <input id="name" name="department_id" type="hidden" value="<?php echo $depart_data[0]['department_id']; ?>" class="form-control input-md">

                                                <input id="name" name="department_title" type="text" value="<?php echo $depart_data[0]['department_title']; ?>" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Member Count</label>
                                                <input id="name" name="faculty_members" type="text" value="<?php echo $depart_data[0]['faculty_members']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>  <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">students Count</label>
                                                <input id="name" name="students" type="text" value="<?php echo $depart_data[0]['students']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="panel_custom panel-success">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Achievement Count</label>
                                                <input id="name" name="achievements" type="text" value="<?php echo $depart_data[0]['students']; ?>" class="form-control input-md">
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="col-xs-12 col-sm-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Chairmant Message
                                        </div>
                                        <div class="panel-body">

                                            <textarea name="chairmen_msg" class="form-control" rows="5"><?php echo $depart_data[0]['chairmen_msg']; ?></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Dean
                                        </div>
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label" for="name">Photo</label>
                                                <div class="main-img-preview">
                                                    <img class="thumbnail img-preview" src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $depart_data[0]['chairment_photo']; ?>" title="Preview Logo">
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
                                                <label class="control-label" for="name">Chairman Name</label>
                                                <input id="name" name="chairman_name" type="text" value="<?php echo $depart_data[0]['chairman_name']; ?>" class="form-control input-md">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="name">Designation</label>
                                                <input id="name" name="designation" type="text" value="<?php echo $depart_data[0]['designation']; ?>" class="form-control input-md">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="name">Department</label>
                                                <input id="name" name="department" type="text" value="<?php echo $depart_data[0]['department']; ?>" class="form-control input-md">
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
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                            <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>

                        </div>
                        <div class="col col-xs-6 text-right">
                            <div class="pull-right">
                                <button class="btn btn-success" onclick="add_highlight_menu()"><i class="glyphicon glyphicon-plus"></i> Add Highlight menu</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="table1" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <th>Menu Name</th>
                                <th>title</th>
                                <th>Description</th>
                                <th style="width:300px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>

                                <th>Menu Name</th>
                                <th>title</th>
                                <th>Description</th>

                                <th style="width:300px;"></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <button class="btn btn-default" onclick="reload_table_achievement()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                            <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>

                        </div>
                        <div class="col col-xs-6 text-right">
                            <div class="pull-right">
                                <button class="btn btn-success" onclick="add_acheivement()"><i class="glyphicon glyphicon-plus"></i> Add Achievement</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="table" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <th>Image</th>
                                <th>Achievement Description</th>

                                <th style="width:300px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>

                                <th>Image</th>
                                <th>Image text</th>

                                <th style="width:300px;"></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>










    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <button class="btn btn-default" onclick="reload_table_achievement()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                            <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>

                        </div>
                        <div class="col col-xs-6 text-right">
                            <div class="pull-right">
                                <button class="btn btn-success" onclick="add_member()"><i class="glyphicon glyphicon-plus"></i> Add Member</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="member_table" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <th>Image</th>
                                <th>Member Name</th>
                                <th>Member Post</th>

                                <th style="width:300px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>

                                <th>Image</th>
                                <th>Member Name</th>
                                <th>Member Post</th>

                                <th style="width:300px;"></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
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






    $(".msg1").hide();
    $('#update_department_info').submit(function (event) {


        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>/admin/faculty/update_department_info",
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


</script>

<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {

        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin/faculty/achievement_ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.department_id = "<?php echo $depart_data[0]['department_id']; ?>";

                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

        //datepicker


        //set input/textarea/select event when change value, remove class error and remove text help block
        $("input").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("textarea").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

    });
    function reload_table_achievement()
    {
        table.ajax.reload(null, false);
    }
    $(document).ready(function () {

        //datatables
        table_menu = $('#table1').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin/faculty/menu_ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.department_id = "<?php echo $depart_data[0]['department_id']; ?>";

                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

        //datepicker


        //set input/textarea/select event when change value, remove class error and remove text help block
        $("input").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("textarea").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

    });








    $(document).ready(function () {

        //datatables
        table_member = $('#member_table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin/faculty/member_ajax_list') ?>",
                "type": "POST",
                "data": function (data) {
                    data.department_id = "<?php echo $depart_data[0]['department_id']; ?>";

                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });
        $("input").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("textarea").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function () {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

    });








    function add_highlight_menu()
    {
        save_method = 'add';
        $('#menu')[0].reset(); // reset form on modals


        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#add_menu').modal('show'); // show bootstrap modal
        $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
        $('.modal-title').text('Add Highllight Menu'); // Set Title to Bootstrap modal title

    }




    function add_member()
    {
        save_method = 'add';
        $('#member_form')[0].reset(); // reset form on modals


        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_member').modal('show'); // show bootstrap modal
        $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
        $('.modal-title').text('Add Achievement'); // Set Title to Bootstrap modal title

    }





    function add_acheivement()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals


        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
        $('.modal-title').text('Add Achievement'); // Set Title to Bootstrap modal title

    }

    function edit_achievement(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();


        $.ajax({
            url: "<?php echo site_url('admin/faculty/achievement_ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                var src = "<?php echo base_url(); ?>assets/frontend/images/" + data.image;
                $('[name="id"]').val(data.id);
                $('[name="img_text"]').val(data.img_text);
                $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
                $('#previewHolder').attr('src', src);


                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Course');

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }

        });


    }


    function edit_member(id)
    {
        save_method = 'update';
        $('#member_form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();


        $.ajax({
            url: "<?php echo site_url('admin/faculty/member_ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                var src = "<?php echo base_url(); ?>assets/frontend/images/" + data.image;
                $('[name="id"]').val(data.member_id);
                $('[name="member_name"]').val(data.member_name);
                $('[name="member_post"]').val(data.member_post);
                $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
                $('#previewHolder').attr('src', src);


                $('#modal_member').modal('show');
                $('.modal-title').text('Edit Member');

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }

        });


    }



    function edit_menu(id)
    {
        save_method = 'update';
        $('#menu')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();


        $.ajax({
            url: "<?php echo site_url('admin/faculty/menu_ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {

                $('[name="id"]').val(data.menu_id);
                $('[name="title"]').val(data.title);
                $('[name="menu_name"]').val(data.menu_name);
                $('[name="menu_description"]').val(data.description);
                $('[name="department_id"]').val("<?php echo $depart_data[0]['department_id']; ?>");
                $('#add_menu').modal('show');
                $('.modal-title').text('Edit Menu');

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }

        });


    }





    function reload_table()
    {
        table1.ajax.reload(null, false);
    }

    function reload_table_menu()
    {
        table_menu.ajax.reload(null, false);
    }

    function reload_table_member()
    {
        table_member.ajax.reload(null, false);
    }


    $("#check-all").click(function () {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });
    function save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/faculty/achievement_ajax_add') ?>";
        } else {

            url = "<?php echo site_url('admin/faculty/achievement_ajax_update') ?>";
        }


        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($("#form")[0]),
            processData: false,
            contentType: false,
            dataType: "JSON",
            success: function (data)
            {

                if (data.status)
                {
                    $('#modal_form').modal('hide');
                    reload_table_achievement();
                    toastr.success('Action Successful', 'Success!');
                    toastr.options.showMethod = 'slideDown';
                    toastr.options.hideMethod = 'slideUp';
                    toastr.options.closeMethod = 'slideUp';
                } else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);

            }
        });
    }




    function member_save()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/faculty/member_ajax_add') ?>";
        } else {

            url = "<?php echo site_url('admin/faculty/member_ajax_update') ?>";
        }


        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($("#member_form")[0]),
            processData: false,
            contentType: false,
            dataType: "JSON",
            success: function (data)
            {

                if (data.status)
                {
                    $('#modal_member').modal('hide');
                    reload_table_member();
                    toastr.success('Action Successful', 'Success!');
                    toastr.options.showMethod = 'slideDown';
                    toastr.options.hideMethod = 'slideUp';
                    toastr.options.closeMethod = 'slideUp';
                } else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);

            }
        });
    }






    function save_menu()
    {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/faculty/menu_ajax_add') ?>";
        } else {

            url = "<?php echo site_url('admin/faculty/menu_ajax_update') ?>";
        }


        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($("#menu")[0]),
            processData: false,
            contentType: false,
            dataType: "JSON",
            success: function (data)
            {

                if (data.status)
                {
                    $('#add_menu').modal('hide');
                    reload_table_menu();
                    toastr.success('Action Successful', 'Success!');
                    toastr.options.showMethod = 'slideDown';
                    toastr.options.hideMethod = 'slideUp';
                    toastr.options.closeMethod = 'slideUp';
                } else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);

            }
        });
    }






    function delete_achievement(id)
    {
        if (confirm('Are you sure delete this data?'))
        {

            $.ajax({
                url: "<?php echo site_url('admin/faculty/achievement_ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {

                    $('#modal_form').modal('hide');
                    reload_table_achievement();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

    function delete_menu(id)
    {
        if (confirm('Are you sure delete this data?'))
        {

            $.ajax({
                url: "<?php echo site_url('admin/faculty/menu_ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {

                    $('#add_menu').modal('hide');
                    reload_table_menu();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }



    function delete_member(id)
    {
        if (confirm('Are you sure delete this data?'))
        {

            $.ajax({
                url: "<?php echo site_url('admin/faculty/member_ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {

                    $('#add_member').modal('hide');
                    reload_table_member();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }



    function bulk_delete()
    {
        var list_id = [];
        $(".data-check:checked").each(function () {
            list_id.push(this.value);
        });
        if (list_id.length > 0)
        {
            if (confirm('Are you sure delete this ' + list_id.length + ' data?'))
            {
                $.ajax({
                    type: "POST",
                    data: {gallery_id: list_id},
                    url: "<?php echo site_url('admin/gallery/faculty_post_bulk_delete') ?>",
                    dataType: "JSON",
                    success: function (data)
                    {
                        if (data.status)
                        {
                            reload_table();

                        } else
                        {
                            alert('Failed.');
                        }

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        } else
        {
            alert('no data selected');
        }
    }

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Image</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="department_id" />
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-12">Acheivement Title </label>
                            <div class="col-md-12">
                                <input name="img_text" placeholder="Image text" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class=" col-md-3 text-left">Image</label>
                            <div class="student_photo_preview col-md-9">
                                <img height="100" id="previewHolder" src="" alt="" />


                            </div>
                            <div class="form-group photo_upload_input">
                                <input type="file" name="userfile"
                                       id="userfile">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<div class="modal fade" id="modal_member" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Member</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="member_form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="department_id" />
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-12">Member Name </label>
                            <div class="col-md-12">
                                <input name="member_name" placeholder="Member Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class=" col-md-3 text-left">Image</label>
                            <div class="student_photo_preview col-md-9">
                                <img height="100" id="previewHolder" src="" alt="" />


                            </div>
                            <div class="form-group photo_upload_input">
                                <input type="file" name="userfile" id="userfile">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12">Member Post </label>
                            <div class="col-md-12">
                                <input name="member_post" placeholder="Members Post" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="member_save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<div class="modal fade" id="add_menu" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Menu</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="menu" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="department_id" />
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-12">Menu Title </label>
                            <div class="col-md-12">
                                <input name="title" placeholder="Menu Title" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Menu Name </label>
                            <div class="col-md-12">
                                <input name="menu_name" placeholder="Menu Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Menu Description</label>
                            <div class="col-md-12">
                                <input name="menu_description" placeholder="Menu Description" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_menu()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<!-- End Bootstrap modal -->


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
