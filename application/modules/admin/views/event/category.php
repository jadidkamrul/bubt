


<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Category
               
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">category</li>
            </ol>
        </section>
        <!--End Page Header -->
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
                                                             <button class="btn btn-success" onclick="add_category()"><i class="glyphicon glyphicon-plus"></i> Add New</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="table" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:30px;"><input type="checkbox" id="check-all"></th>
                      
                        <th>Category Title</th>                  
                        <th style="width:125px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>

                <tfoot>
                    <tr>
                        <th></th>
                        
                        <th>Category Title</th>                  
                        <th style="width:125px;">Action</th>
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
                "url": "<?php echo site_url('admin/events/category_ajax_list') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
              
                {
                    "targets": [0], //last column
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



    function add_category()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add category'); // Set Title to Bootstrap modal title
    }

    function edit_category(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/events/category_ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {

                $('[name="category_id"]').val(data.category_id);
                $('[name="cat_title"]').val(data.cat_title);
                


                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Category'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table()
    {
        table.ajax.reload(null, false); //reload datatable ajax 
    }
    $("#check-all").click(function () {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });
    function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/events/category_ajax_add') ?>";
        } else {

            url = "<?php echo site_url('admin/events/category_ajax_update') ?>";
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (data)
            {

                if (data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
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

    function delete_category(id)
    {
        if (confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('admin/events/category_ajax_delete') ?>/" + id,
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
                    data: {id: list_id},
                    url: "<?php echo site_url('admin/post/ajax_bulk_delete') ?>",
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
                <h3 class="modal-title">Add post</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="category_id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Category Title</label>
                            <div class="col-md-9">
                                <input name="cat_title" placeholder="Category Title" class="form-control" type="text">
                                <span class="help-block"></span>
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


