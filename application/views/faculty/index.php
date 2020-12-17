<div class="">
    <!-- Header -->
    <section><!--Dean-->
        <div class="row">
            <!-- Wrapper for message -->
            <div class="col-md-8 col-lg-7 devs_message-faculty">
                <div class="devs_message_body-faculty">
                    <h1 class="devs-heading_famely font-white devs_message_title-faculty">Welcome to the <?php echo $faculties[0]['faculty_title']; ?></h1>
                    <p class="font-white devs_message_content-faculty">
                        <?php echo $faculties[0]['faculty_desc']; ?>
                    </p>
                </div>

            </div>
            <div class="col-md-5 text-center">
                <img class="devs_message_image-faculty" src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $faculties[0]['head_photo']; ?>" alt="dean">
                <div class="devs_designation-dean text-left">
                    <h3 class="devs_designation-title">
                        <?php echo $faculties[0]['head_name']; ?>
                    </h3>
                    <h4> <?php echo $faculties[0]['head_designation']; ?></h4>
                    <h5> <?php echo $faculties[0]['faculty_title']; ?></h5>
                    <br>

                    <h5> <?php echo $faculties[0]['head_others']; ?></h5>

                </div>
            </div>
        </div>
    </section>

    <section id="devs-to-faculty">
        <div class="container">
            <div class="devs-academic-commment">
                <div class="col-md-4 devs-dept-section">
                    <div class="devs-dept-title text-center">
                        <h1><?php echo $faculties[0]['department_count']; ?><br><?php echo $faculties[0]['department_title']; ?></h1>
                    </div>
                </div>
                <?php $i = 0; foreach ($departments as $row):?>
                    <?php $i++; ?>
                    <div class="col-md-<?php echo ($i === 1 ? "8" : "6"); ?> devs-dept-section">
                        <div class="banner-img">
                            <img src="<?php echo base_url(); ?>componats/images/faculty_cse.jpg" class="img-responsive" style="height:300px; width:100%;">
                        </div>
                        <a href="<?php echo site_url(); ?>department/information/<?php echo $row['department_id']; ?>">
                            <div class="devs-imgdescri-<?php echo ($i === 1 ? "six" : "five"); ?>">
                                <h1 class="imgdescri-one text-center" style="font-size: 25px;"><?php echo $row['department_title']; ?></h1>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <section style="background-color:#82CEEE;">
        <div class="container">
            <div class=" col-md-offset-1 col-md-10">
                <div class="col-md-12">
                    <h3 class="font-white text-center" style="margin-bottom: 18px;">
<?php echo $faculties[0]['qoutes']; ?>
                    </h3>
                </div>

            </div>
        </div>
    </section>
    <section id="program-declar">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><a href="  <?php echo $faculties[0]['under_g_page']; ?>"><div class="col-md-12 button-programs">Undergraduate</div></a></div>
                <div class="col-md-4"><a href="<?php echo $faculties[0]['g_page']; ?>"><div class="col-md-12 button-programs">Graduate</div></a></div>
                <div class="col-md-4"><a href="<?php echo $faculties[0]['r_page']; ?>"><div class="col-md-12 button-programs">Research</div></a></div>
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
</div>