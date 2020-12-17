
                    <div class="col-md-6 devs-nopadding" style="border-top:1px solid #f5f5f5; border-left: 1px solid #f5f5f5;">
                        <div class="col-md-12 devs-nopadding">
                            <div class="academic-exc">
                                <h1>Committed To<br>Academic Excellence</h1>
                            </div>
                            <div class="col-md-12 devs-nopadding">
                                <div class="banner-img">

                                    <div id="myCarousel" class="carousel slide wow bounceInDown" data-ride="carousel">

                                        <div class="carousel-inner" role="listbox">
                                            <?php $i=0; foreach ($faculties as $faculty): ?>
                                            <?php $i++;?>
                                                <div class="item <?php if($i==1){echo "active";}?>" id="image">
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
                        <div class="col-md-offset-6 col-md-6 devs-nopadding" >
                            <div class="">
                                <div class="videoWrapperOuter ">
                                    <div class="videoWrapperInner">
                                        <iframe class="wow swing" src="<?php echo $faculties_video[0]['video_url'];?>" 

                                                frameborder="1" style="height:208px;" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 devs-nopadding " style="border-top:1px solid #f5f5f5; border-left: 1px solid #f5f5f5; border-right: 1px solid #ccc;" >
                        <?php $i=0; foreach ($faculties as $faculty): ?>
                                            <?php $i++;?> 
                        <div class="col-md-<?php if($i==1){echo "12";}else {echo "6".' '.'wow rotateInDownRight';}?> devs-nopadding wow fadeInDown">
                            <div class="banner-img">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $faculty['image']; ?>" class="img-responsive" style="height:220px; width:100%;">
                            </div>
                            <?php 
                            if($i==1){
                            
                                $count="two";
                            }
                            if($i==2){
                                $count="three";
                            }
                            if($i==3){
                                $count="four";
                            }
                            ?>
                            <div class="devs-imgdescri-<?php echo $count;?>">
                                <p class="imgdescri-one"><?php echo $faculty['img_text']; ?> <a href="" class="pull-right"><img src="componats/new-image/Next-Button.png" style="height:15px; width: 15px;"></a></p>
                            </div>
                        </div>
                          <?php 
                           
                            if($i==3){
                               break;
                            }
                            ?>
                           <?php endforeach; ?>
                    
                    </div>