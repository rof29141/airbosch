<!-- JS Global Compulsory -->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?php echo base_url()?>assets/vendor/appear.js"></script>
<script src="<?php echo base_url()?>assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="<?php echo base_url()?>assets/vendor/gmaps/gmaps.min.js"></script>

<!-- JS Unify -->
<script src="<?php echo base_url()?>assets/js/hs.core.js"></script>
<script src="<?php echo base_url()?>assets/js/components/hs.header.js"></script>
<script src="<?php echo base_url()?>assets/js/helpers/hs.hamburgers.js"></script>
<script src="<?php echo base_url()?>assets/js/components/hs.scroll-nav.js"></script>
<script src="<?php echo base_url()?>assets/js/components/hs.carousel.js"></script>
<script src="<?php echo base_url()?>assets/js/components/gmap/hs.map.js"></script>
<script src="<?php echo base_url()?>assets/js/components/hs.go-to.js"></script>

<script src="<?php echo base_url()?>assets/js/spin.min.js"></script>
<link href="<?php echo base_url()?>assets/js/select2/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url()?>assets/js/select2/select2.min.js"></script>

<!-- JS Customization -->
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    // initialization of google map
    function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
    }

    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');


    });

    $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700
        });
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>