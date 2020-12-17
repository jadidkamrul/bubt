<footer id="devs-footer" class="scroll-here">
    <div class="container">
        <div class="row">
            <?php foreach ($widgets as $widget): ?>
                <div class="col-md-2 col-xs-6">
                    <div class="devs-footer-head">
                        <h4><?php echo $widget['widget_title']; ?></h4>
                    </div>
                    <div class="devs-footer-link">
                        <ul>
                            <?php foreach ($widget['meta_data'] as $meta): ?>
                                <li><a href="<?php echo $meta['url']; ?>"><?php echo $meta['link_title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</footer>
<section id="devs-badmission">
    <div class="container">
        <div class=" col-md-offset-1 col-md-10">
            <div class="col-md-12">
                <h1 class="font-white text-center who-working-text">Who are working with Us</h1>
            </div>

        </div>
    </div>
</section>
<section style="padding:25px 0px;" class="scroll-here">
    <div class="container">
        <ul id="flexiselDemo3"> 
            <?php foreach ($clients as $client): ?> 
                <li>
                    <img src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $client['logo']; ?>" />
                </li> 
<?php endforeach; ?>

        </ul>
        <br>
        <center>
            <img src="<?php echo base_url(); ?>assets/backend/img/<?php echo $settings[0]['logo']; ?>" style="height:120px; margin-top:27px;">
            <br>
            <br>
            <p class="social-icon-pra"  >
                <a class="" href="<?php echo $settings[0]['facebook']; ?>"><img src="<?php echo base_url(); ?>assets/frontend/componats/new-image/facebook.png" style="height: 35px;"></a>
                <a class="" href="<?php echo $settings[0]['twitter']; ?>"><img src="<?php echo base_url(); ?>assets/frontend/componats/new-image/linkedin.png" style="height: 35px;"></a>
                <a class="" href="<?php echo $settings[0]['gplus']; ?>"><img src="componats/new-image/google+.png" style="height: 35px;"></a>
                <a class="" href="<?php echo $settings[0]['youtube']; ?>"><img src="<?php echo base_url(); ?>assets/frontend/componats/new-image/youtube.png" style="height: 35px;"></a>

            </p>
        </center>

    </div>
</section>
<section id="devs-bottom-futter">
    <div class="container">
        <div class="devs-bottom-link">
            <center>
                <a href="" style="word-spacing:7px;color: #1557FF;font-size: 16px;"> &copy;<?php echo date('Y') . ' ' . $settings[0]['site_title']; ?></a>
            </center>
        </div>
        <br>
        <div class="devs-last-link">
            <center class="devs-center-tag">
                <ul>
                    <li style="border:none;"><a href="">Webmail</a></li>
                    <li><a href="">Contact The University</a></li>
                    <li><a href="">Maps</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Reception</a></li>
                    <li><a href="">Library</a></li>
                </ul>
                <br />
                <h5 class="devscredit">Developed By <a href="https://www.devszone.com/" target="_blank">DevsZone</a></h5>
            </center>
             
        </div>
      
        
    </div>
</section>
<!-- MODAL-->

<div class="modal fade modal-fullscreen" id="WelCome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 0px;">

            <div class="modal-body" style="padding:0px;">
                <a href="" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 0px;top: 0px;"><i class="fa fa-times" aria-hidden="true"></i></a>
                <iframe  src="<?php echo $settings[0]['welcome_link']; ?>?rel=0&amp;showinfo=0"
                        frameborder="0" style="height:99vh;width: 100%;" allowfullscreen>
                </iframe>

            </div>
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.flexisel.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/devs-jqury.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/cbpFWTabs.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/src/bs-modal-fullscreen.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/src/index.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.animations.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.animations-tile.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/angular.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/angular-route.js"></script>

 <script src="<?php echo base_url(); ?>assets/frontend/loader/js/modernizr.custom.js"></script>
 	<script src="<?php echo base_url(); ?>assets/frontend/loader/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/loader/js/pathLoader.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/loader/js/main.js"></script>
<!-- load Galleria -->
<script>
    new WOW().init();
</script>
<script type="text/javascript">

    $('#WelCome').on('hidden.bs.modal', function () {
        
        $("#WelCome iframe").attr("src", $("#WelCome iframe").attr("src"));

});
    
    
    $("#changer").click(function () {
        imagePath = $("#changer").attr("src");
        if (imagePath == "componats/new-image/collapse-right-md.png") {
            $("#changer").attr("src", "componats/new-image/collapse-button-md.png");
        } else {
            $("#changer").attr("src", "componats/new-image/collapse-right-md.png");
        }
    });
    $('#image2').animate('tile', {
        "duration": 2000,
        "rows": 12,
        "cols": 8,
        "effect": "flyIn",
        "fillMode": "backwards"
    });
    $('#image').animate('tile', {
        "duration": 3000,
        "rows": 9,
        "cols": 9,
        "effect": [
            "slideFromDown",
            "slideFromRight",
            "slideFromUp",
            "slideFromLeft"
        ],
        "sequence": "lrtb",
        "sequent": false,
        "adjustDuration": true
    });
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {

        player = new YT.Player('player', {
            videoId: 'tZ5f3IZ6xlU',
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    var done = false;
    function onPlayerStateChange(event) {
        switch (event.data) {
            case 1:
                console.log("playing");
                break;
            default:
                console.log("otherwise");
                break;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>
<script>
    new CBPFWTabs(document.getElementById('tabs'));
</script>
<script>

    $(window).load(function () {
        $("#flexiselDemo3").flexisel({
            visibleItems: 6,
            itemsToScroll: 1,
            animationSpeed: 200,
            infinite: true,
            navigationTargetSelector: null,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 3,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3,
                    itemsToScroll: 3
                }
            }
        });

    });
</script>

<script type="text/javascript">


    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    function extend(a, b) {
        for (var key in b) {
            if (b.hasOwnProperty(key)) {
                a[key] = b[key];
            }
        }
        return a;
    }

    function CBPFWTabs(el, options) {
        this.el = el;
        this.options = extend({}, this.options);
        extend(this.options, options);
        this._init();
    }

    CBPFWTabs.prototype.options = {
        start: 0
    };

    CBPFWTabs.prototype._init = function () {
        // tabs elemes
        this.tabs = [].slice.call(this.el.querySelectorAll('nav > ul > li'));
        // content items
        this.items = [].slice.call(this.el.querySelectorAll('.content > section'));
        // current index
        this.current = -1;
        // show current content item
        this._show();
        // init events
        this._initEvents();
    };

    CBPFWTabs.prototype._initEvents = function () {
        var self = this;
        this.tabs.forEach(function (tab, idx) {
            tab.addEventListener('click', function (ev) {
                ev.preventDefault();
                self._show(idx);
            });
        });
    };

    CBPFWTabs.prototype._show = function (idx) {
        if (this.current >= 0) {
            this.tabs[ this.current ].className = '';
            this.items[ this.current ].className = '';
        }
        // change current
        this.current = idx != undefined ? idx : this.options.start >= 0 && this.options.start < this.items.length ? this.options.start : 0;
        this.tabs[ this.current ].className = 'tab-current';
        this.items[ this.current ].className = 'content-current';
    };
    $('#extra-menu').on('shown.bs.collapse', function (e) {
        $('#mainNav').addClass('navbar-custom1');
    }).on('hidden.bs.collapse', function (e) {
        $('#mainNav').removeClass('navbar-custom1');
    })
</script>


<script>
    var app = angular.module('myApp', []);
    app.controller('settingsController', function ($scope, $http) {
        $http.get("<?php echo site_url('settings/info'); ?>")
                .then(function (response) {

                    $scope.settings = response.data;
                    $scope.loadtime = true;
                });
    });


</script>
<script>
    $(document).on('click', function () {
        $('.collapse').collapse('hide');
    })
    
    
                $(document).ready(function() {

      /*  run scroll to section only
          if body has class page-scroller */
      var pageScroller = $( 'body' ).hasClass( 'page-scroller' );
      if ( pageScroller ) {

        // begin homepage scroll to section
        var $scrollSection = $('.scroll-here');
        var $scrollTrigger = $('.trigger-scroll');
        var nextSection = 0;

        $scrollTrigger.on( 'click', function() {
          $(this).removeClass('go-to-top');

          // If at last section, scroll back to top on next click:
          if (nextSection >= $scrollSection.length) {
            $('html, body').animate({ scrollTop: 0 }, 1000);
            nextSection = 0;
            return;
          }

          // If already scrolled down
          // to find next section position so you don't go backwards:
          while ( $('body').scrollTop() > $($scrollSection[nextSection]).offset().top ) {
            nextSection++;
          }

          // If next section is the last, add class to rotate arrow:
          if (nextSection === ($scrollSection.length - 1)) {
            $(this).addClass('go-to-top');
          }

          // Move to next section and increment counter check:
          $( 'html, body' ).animate({ scrollTop: $($scrollSection[nextSection]).offset().top }, 1000);
          nextSection++;
        });
        // end homepage scroll to section
      }else{
        console.log('page-scroller class was not found in body tag');
      }//end if else

            });
</script> 

<!--<script>
            
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>-->
</body>
</html>
