<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>MacTutor Inc.</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="assets/css/styles.op-business.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
  </head>

  <body>
    <main>

        <?php require_once 'header.php';?>

        <?php require_once 'banner.php';?>

        <?php require_once 'about.php';?>

        <?php require_once 'skills.php';?>

        <?php require_once 'process.php';?>

        <?php require_once 'projects.php';?>

        <?php require_once 'services.php';?>

        <?php require_once 'clients.php';?>

        <?php require_once 'footer.php';?>

        <?php require_once 'arrow_up.php';?>

        <?php require_once 'modal.php';?>

    </main>

    <?php require_once 'main_js.php';?>
  </body>
</html>


<script>

    $(document).ready(function()
    {
        var opts = {
            lines: 10, // The number of lines to draw
            length: 20, // The length of each line
            width: 9, // The line thickness
            radius: 30, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            rotate: 0, // The rotation offset
            direction: 1, // 1: clockwise, -1: counterclockwise
            color: '#000', // #rgb or #rrggbb or array of colors
            speed: 1.1, // Rounds per second
            trail: 91, // Afterglow percentage
            shadow: false, // Whether to render a shadow
            hwaccel: false, // Whether to use hardware acceleration
            className: 'spinner', // The CSS class to assign to the spinner
            zIndex: 2e9, // The z-index (defaults to 2000000000)
            top: '50%', // Top position relative to parent
            left: '50%' // Left position relative to parent
        };

        $('#btn_meet_founder').on('click', function ()
        {
            $('#btn_meet_founder').hide();
            $('#div_meet_founder').show('slow');
        });

        $('#btn_free_consult').on('click', function ()
        {
            var target = document.getElementById('btn_free_consult');
            var spinner = new Spinner(opts).spin(target);

            $.ajax({
                type: "POST",
                dataType: "html",
                url: 'Main/GoView/free_consult'
            }).done(function(response, textStatus, jqXHR)
            {
                $('#exampleModalLongTitle').text('Free Consultation');
                $('#exampleModalBody').html(response);
                $('#exampleModalFooter').html('<button type="button" class="btn btn-primary">Submit</button>');
                $('#exampleModalCenter').modal('show');
            }).fail(function(jqHTR, textStatus, thrown)
            {
                alert('Something wrong with AJAX:' + textStatus);
            });
            spinner.stop();
        });

        $('.btn_serv').on('click', function ()
        {
            var target = document.getElementById('services');
            var spinner = new Spinner(opts).spin(target);

            var service=$(this).attr('id');

            $.ajax({
                type: "POST",
                dataType: "html",
                url: 'Main/GoView/services-'+service
            }).done(function(response, textStatus, jqXHR)
            {
                $('#exampleModalLongTitle').text('What we do?');
                $('#exampleModalBody').html(response);
                $('#exampleModalCenter').modal('show');
            }).fail(function(jqHTR, textStatus, thrown)
            {
                alert('Something wrong with AJAX:' + textStatus);
            });
            spinner.stop();
        });
    });
</script>