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
