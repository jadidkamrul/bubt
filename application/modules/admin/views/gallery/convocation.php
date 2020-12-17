



<div id="page-wrapper">
    <div class="row">
        <section class="content-header">
            <h1>
                Gallery
                <small>Location</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard"></i> Menu</a></li>
                <li class="active">location</li>
            </ol>
        </section>
        <!--End Page Header -->
    </div>
    <form id="" method="POST" action="<?php echo site_url('admin/gallery/update_convocation'); ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-table">

                    <div class="panel-heading">
                       Left Video
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" name="video_url"><?php echo $convocation[0]['video_url']; ?></textarea> 
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        Details
                    </div>
                    <div class="panel-body">
                        <textarea id="txtEditor1" name="content_right"><?php echo $convocation[0]['content_right']; ?></textarea> 
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <input type="hidden" name="gallery_id" value="<?php echo $convocation[0]['gallery_id']; ?>" />
                <input type="submit" class="btn btn-default "  value="Update"> 


            </div>
        </div>
    </form>
</div>


</div>
<script type="text/javascript">
    $(document).ready(function () {
tinymce.init({ mode: "exact", elements: "txtEditor1"});
        
       tinyMCE.triggerSave();
        $('#update_gallery_location').submit(function (event) {

                    dataString = $("#update_gallery_location").serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('admin/gallery/update_location'); ?>",
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

    });


</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Add Menu</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Label</label>
                            <div class="col-md-9">
                                <input name="label" placeholder="Label" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">link</label>
                            <div class="col-md-9">
                                <input name="link" placeholder="Link" class="form-control" type="text">
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
                        <div class="form-group">
                            <label class="control-label col-md-3">Parent</label>
                            <div class="col-md-9">
                                <select id="parent" name="parent" class="form-control">


                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Sort</label>
                            <div class="col-md-9">
                                <input name="sort" placeholder="Sort" class="form-control" type="text">
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