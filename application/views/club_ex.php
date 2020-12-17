<div class="col-md-6 devs-nopadding" style="border-top:1px solid #f5f5f5; border-left: 1px solid #f5f5f5;">
    <div class="col-md-12 devs-nopadding">
        <div class="academic-exc">
            <h1>Committed To<br>Academic Excellence</h1>
        </div>
        <div class="col-md-12 devs-nopadding">
            <div class="banner-img">
                <div id="myCarousel" class="carousel slide wow bounceInUp" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <?php
                        $i = 0;
                        foreach ($club_slider as $faculty):
                            ?>
                            <?php $i++; ?>
                            <div class="item <?php
                            if ($i == 1) {
                                echo "active";
                            }
                            ?>" id="image">
                                <img  src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $faculty['image']; ?>" class="img-responsive" style="height:220px; width:100%;">
                                <div class="devs-imgdescri-one">
                                    <p class="imgdescri-one" style="width: 79%;text-align: justify;"><?php echo $faculty['img_text']; ?> <a href="" class="pull-right"><img src="componats/new-image/Next-Button.png" style="height:15px; width: 15px;"></a>  </p>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<div class="col-md-6 devs-nopadding" style="border-top:1px solid #f5f5f5; border-left: 1px solid #f5f5f5; border-right: 1px solid #ccc;" >
    <div class="panel panel-default col-md-12 wow bounceInDown">
        <?php echo $club[0]['content_right']; ?>
    </div>
</div>