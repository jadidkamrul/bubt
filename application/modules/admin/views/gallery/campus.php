



<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Gallery
                <small>campus</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Menu</a></li>
                <li class="active">campus</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <form id="campus_update" method="POST" action="<?php echo site_url('admin/gallery/update_campus_details'); ?>" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        Campus Details
                    </div>
                    <div class="panel-body">
                        <textarea id="txtEditor1" name="content_right"><?php echo $campus[0]['content_right']; ?></textarea> 
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <input type="hidden" name="gallery_id" value="<?php echo $campus[0]['gallery_id']; ?>" />
                <input type="submit" class="btn btn-default " name="campus_update" value="Update"> 


            </div>
        </div>
    </form>
    <br />
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-5">
                            <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                            <button class="btn btn-danger" onclick="bulk_delete()"><i class="glyphicon glyphicon-trash"></i> Bulk Delete</button>

                        </div>
                        <div class="col-md-2">
                            <p class="table_header"> Image And Text</p>
                        </div>
                        <div class="col col-xs-5 text-right">
                            <div class="pull-right">
                                <button class="btn btn-success" onclick="add_slider()"><i class="glyphicon glyphicon-plus"></i> Add slider</button>

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
                                <th>Image text</th>

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
</div>


</div>
<script type="text/javascript">
    $(document).ready(function () {
        tinymce.init({mode: "exact", elements: "txtEditor1"});

        tinyMCE.triggerSave();


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
                "url": "<?php echo site_url('admin/gallery/campus_post_ajax_list') ?>",
                "type": "POST"
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



    function add_slider()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Slide'); // Set Title to Bootstrap modal title

    }

    function edit_slide(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/gallery/campus_post_ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                var src = "<?php echo base_url(); ?>assets/frontend/images/" + data.image;
                $('[name="gallery_id"]').val(data.gallery_id);
                $('[name="img_text"]').val(data.img_text);

                $('#previewHolder').attr('src', src);


                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Slide');

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }

        });


    }

    function reload_table()
    {
        table.ajax.reload(null, false);
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
            url = "<?php echo site_url('admin/gallery/campus_post_ajax_add') ?>";
        } else {

            url = "<?php echo site_url('admin/gallery/campus_post_ajax_update') ?>";
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
                    reload_table();
                    toastr.success('Successfully Updated ', 'Success!');
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
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 

            }
        });
    }

    function delete_slide(id)
    {
        if (confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('admin/gallery/campus_post_ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {
                    //if success reload ajax table
                    $('#modal_form').modal('hide');
                    reload_table();
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
                    url: "<?php echo site_url('admin/gallery/campus_post_bulk_delete') ?>",
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
                <h3 class="modal-title">Add Slider</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="gallery_id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-12">Image Text</label>
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
<div class="modal fade" id="modal_view_details" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Post Content</h3>
            </div>
            <div class="modal-body form" id="view_content">

            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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