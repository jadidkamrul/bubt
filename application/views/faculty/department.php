<section><!--slider-->
    <div class="row">
        <div class="col-md-6 statistic-body devs-nopadding">
            <div class="dashboard-stats">
                <div class="row">
                    <h1 class="font-white" style="margin: 150px 60px;"> <?php echo $departments[0]['department_title'];?></h1>
                </div>
                <div class="row" style="border-top: 1px solid #fff; padding-top: 20px;">
                    <div class="col-md-4 text-center">
                        <img src="<?php echo base_url(); ?>componats/images/1.png" alt="" style="height: 45px;">
                        <h3 class="text-center font-white"><?php echo $departments[0]['faculty_members'];?></h3>
                        <h5 class="text-center font-white">Faculty Members</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo base_url(); ?>componats/images/2.png" alt="" style="height: 45px;">
                        <h3 class="text-center font-white"><?php echo $departments[0]['students'];?></h3>
                        <h5 class="text-center font-white">Students</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo base_url(); ?>componats/images/3.png" alt="" style="height: 45px;">
                        <h3 class="text-center font-white"><?php echo $departments[0]['achievements'];?></h3>
                        <h5 class="text-center font-white">Achievements</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  devs-nopadding">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider1.png" alt="Chania" style="height:500px;width: 100%;">

                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider2.jpg" alt="Chania" style="height:500px;width: 100%;">

                    </div>

                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider3.png" alt="Flower" style="height:500px;width: 100%;">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider4.jpg" alt="Flower" style="height:500px;width: 100%;">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider7.jpg" alt="Flower" style="height:500px;width: 100%;">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider5.png" alt="Flower" style="height:500px;width: 100%;">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>componats/new-image/slider/slider6.png" alt="Flower" style="height:500px;width: 100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section><!--Chairman-->
    <div class="row">
        <!-- Wrapper for message -->
        <div class="col-md-8 col-lg-7">
            <div class="devs_message_body-chairman">
                <h1 class="devs-heading_famely devs_message_title-faculty">From Chairman Desk</h1>
                <p class=" devs_message_content-faculty">
                 <?php echo $departments[0]['chairmen_msg'];?>
                </p>
            </div>

        </div>
        <div class="col-md-5 text-center">
            <img class="devs_message_image-chairman" src="<?php echo base_url();?>assets/frontend/images/<?php echo $departments[0]['chairment_photo'];?>" alt="dean">
            <div class="devs_designation-chairman text-left">
                <h3 class="devs_designation-title">
                    <?php echo $departments[0]['chairman_name'];?>
                </h3>
                <h4> <?php echo $departments[0]['designation'];?></h4>
                <h5> <?php echo $departments[0]['department'];?></h5>
            </div>
        </div>
    </div>
</section>

<section id="devs-to-dept_cse">
    <div class="row dept-prog-back">
        <div class="container">
            <div class="devs-academic-commment">
                <ul role="tablist" class="col-md-6 devs-nopadding" id="tabbtn">
                    <?php $i=0; foreach($department_menus as $menu): ?>

                    <li role="presentation" class="col-md-4 <?php echo ($i===0 ? "active" : "") ;?> "><a href="#tabcontent<?php echo $menu['menu_id'];?>" aria-controls="home" role="tab" data-toggle="tab" class="col-md-12 dept-fetc-btn<?php echo ($i===0 ? "" : $i) ;?>"><?php echo $menu['menu_name'];?></a></li>
                  <?php $i++;?>
   <?php endforeach; ?>

                </ul>
                <div class="col-md-6 devs-nopadding tab-content" id="tabdesc">
                     <?php $i=0; foreach($department_menus as $menu): ?>
                    <div role="tabpanel" class="tab-pane <?php echo ($i===0 ? "active" : "") ;?>" id="tabcontent<?php echo $menu['menu_id'];?>">
                        <h1 class="devs-heading_famely font-white devs_message_title-faculty">Welcome to Department of CSE</h1>
                        <p class="font-white devs_message_content-faculty">
                         <?php echo $menu['description'];?>
                        </p>
                    </div>
                    <?php $i++;?>
                       <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="program-declar">
    <div class="container">
        <h1 class="text-center">Achievements</h1>
        <div class="devs-row">
            <?php foreach($achievments as $ach):?>
            <div class="devs-item">
                <div class="devs-well">
                    <img src="<?php echo base_url();?>assets/frontend/images/<?php echo $ach['image'];?>" alt="">
                    <p class="devs-acchievement-desc">
                        <?php echo $ach['img_text'];?>
                    </p>
                </div>
            </div>
      <?php endforeach;?>
        </div>
    </div>
</section>
<section>
    <div class="row dept-prog-faculty">
        <div class="container">
            <div class="devs-academic-commment">
                <h1 class="text-center font-white">Faculty Members</h1>
                <div class="row" style="margin-top:30px">

                    <?php $i=0; foreach($members as $member): if($i < 4):?>
                    <div class="col-md-3">
                        <div class="col-md-12 facult-member<?php if($i > 0){ echo $i; } ?>">
                            <img class="facult-member-img" src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $member['member_image']; ?>" alt="">
                            <h2 class="font-white"><?php echo $member['member_name']; ?></h2>
                            <h4 class="font-white fac-desig"><?php echo $member['member_post']; ?></h4>
                        </div>
                      </div>

                    <?php endif; $i++; endforeach; ?>







                </div>
                <div class="row text-center" style="margin-top:30px">
                    <a href="" class="btn btn-lg btn-flat btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="devs-badmission">
    <div class="container">
        <div class=" col-md-offset-1 col-md-10">
            <div class="col-md-6">
                <h1 class="font-black" style="margin-top:15px">Great Place! Join Us and Keep Smiling</h1>
            </div>
            <div class="col-md-6 text-right" style="margin-top:22px;">
                <a href="" class="bac-button-image">INSPAIRATION</a>
                <a href="" class="bac-button-image">GET ADMISSION</a>
            </div>
        </div>
    </div>
</section>
