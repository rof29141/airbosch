
<a class="js-go-to u-go-to-v1" href="#!"
   data-type="fixed"
   data-position='{
           "bottom": 15,
           "right": 15
         }'
   data-offset-top="400"
   data-compensation="#js-header"
   data-show-effect="zoomIn">
    <i class="hs-icon hs-icon-arrow-top"></i>
</a>
</main>

<!-- JS Global Compulsory -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?php echo base_url();?>assets/vendor/appear.js"></script>
<script src="<?php echo base_url();?>assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/slick-carousel/slick/slick.js"></script>

<!-- JS Unify -->
<script src="<?php echo base_url();?>assets/js/hs.core.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.header.js"></script>
<script src="<?php echo base_url();?>assets/js/helpers/hs.hamburgers.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.scroll-nav.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.onscroll-animation.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.tabs.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.cubeportfolio.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.carousel.js"></script>
<script src="<?php echo base_url();?>assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSScrollNav component
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700
        });

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });


    $(window).on('load', function() {
        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>
</body>
</html>
