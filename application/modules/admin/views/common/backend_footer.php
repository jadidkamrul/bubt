

<script src="<?php echo base_url(); ?>assets/backend/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/lobipanel-master/js/jquery-ui.min.css"></script>

<script src="<?php echo base_url(); ?>assets/backend/plugins/lobipanel-master/js/lobipanel.js"></script>

<!--    <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/mdb/js/tether.min.js"></script>-->

<!-- MDB core JavaScript -->
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/mdb/js/mdb.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/backend/plugins/metisMenu/jquery.metisMenu.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/backend/plugins/pace/pace.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/backend/scripts/siminta.js"></script>-->
<script src="<?php echo base_url(); ?>assets/backend/scripts/toastr.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/toastr.js"></script>



<!-- Page-Level Plugin Scripts-->

<script src="<?php echo base_url(); ?>assets/backend/scripts/bootstrap-imageupload.min.js"></script>

<script src="<?php echo base_url(); ?>assets/backend/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/datatable/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/slider/jquery.imageuploader.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url(); ?>assets/backend/scripts/tinymce/tinymce.min.js"></script>
 
<script src="<?php echo base_url(); ?>assets/backend/scripts/dropzone.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

 
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});




</script>
<script>
    $("#side-menu").metisMenu();
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
    $(document).ready(function () {
        $('#datetimepicker1').datetimepicker();
      
 
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',

        });
    });

</script>

</script>
<script>
    var $imageupload = $('.imageupload');
    $imageupload.imageupload();

    $('#imageupload-disable').on('click', function () {
        $imageupload.imageupload('disable');
        $(this).blur();
    })

    $('#imageupload-enable').on('click', function () {
        $imageupload.imageupload('enable');
        $(this).blur();
    })

    $('#imageupload-reset').on('click', function () {
        $imageupload.imageupload('reset');
        $(this).blur();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('input[type="file"]').imageuploadify();
    })
</script>
<script type="text/javascript">
    
     $("#dataTables-example").DataTable();
    $("#slider_Add").dropzone({

        success: function (file, response) {
            $('#slider').html(response);
        }
    });
       function hideModal(){
    $("#myModal").removeClass("in");
    $(".modal-backdrop").remove();
    $("#myModal").hide();
}
</script>

</body>

</html>

</body>

</html>