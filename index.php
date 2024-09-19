<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Gaming Website</title>
    <!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords"
        content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
    <!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"/>


    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">

    <!-- preloader -->
    <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

    <!-- 
        Fixed Navigation
        ==================================== -->
    <?php
    include ("header.php");
    ?>
    <!--
        End Fixed Navigation
        ==================================== -->



    <!--
        Home Slider
        ==================================== -->
<section id="slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
    <!-- Indicators bullet -->
    <ol class="carousel-indicators">
      <?php
        include('db.php');
        $sql= "SELECT * FROM `slider`";
        $result= $conn->query($sql);
        $totalSlides = $result->num_rows;
        $counter = 0;

        // Generate indicators dynamically
        while ($counter < $totalSlides) {
          echo '<li data-target="#carousel-example-generic" data-slide-to="' . $counter . '" class="' . ($counter === 0 ? 'active' : '') . '"></li>';
          $counter++;
        }
      ?>
    </ol>
    <!-- End Indicators bullet -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
        $result= $conn->query($sql);
        $counter = 0;
        while($row=$result->fetch_assoc()){?>
        
        <!-- single slide -->
        <div class="item <?php echo ($counter === 0 ? 'active' : '') ?>" style="background-image: url(img/<?php echo $row['banner_img']?>);">
          <div class="carousel-caption">
            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
              <?php echo $row['name_short']?> 
            </h2>
            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color"><?php echo $row['name_long']?></h3>
            <p data-wow-duration="1000ms" class="wow slideInRight animated">
              <?php echo $row['description']?>

            </p>
            <?php if ($counter === 0) { ?>
            <ul class="social-links text-center">
              <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
              <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
              <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
            </ul>
            <?php } ?>
          </div>
        </div>
        <!-- end single slide -->
        <?php $counter++; } ?>
    </div>
    <!-- End Wrapper for slides -->

  </div>
</section>

    <!--
        End Home SliderEnd
        ==================================== -->

    <!--
        Features
        ==================================== -->

        <section id="features" class="features">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2>Features</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <?php
            include('db.php');
            $sql = "SELECT * FROM `features`";
            $result = $conn->query($sql);

            // Start loop
            while ($row = $result->fetch_assoc()) { 
            ?>
            <!-- service item -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo $row['icon_class']; ?>"></i>
                    </div>

                    <div class="service-desc">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
            <!-- End service item -->

            <?php 
            } // End of while loop 
            ?>

        </div>
    </div>
</section>

    <!--
        End Features
        ==================================== -->


    <!--
        Our Works
        ==================================== -->

        <section id="works" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2>Works</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                <ul class="text-center">
                    <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                    <li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
                    <li><a href="javascript:;" data-filter=".web" class="filter">Web</a></li>
                    <li><a href="javascript:;" data-filter=".logo-design" class="filter">Logo Design</a></li>
                    <li><a href="javascript:;" data-filter=".photography" class="filter">Photography</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="project-wrapper">

        <?php
        include('db.php');
        $sql = "SELECT * FROM `works`";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            // Assuming $row['category'], $row['image'], $row['title'], and $row['caption'] contain the respective data
            ?>
            <figure class="mix work-item <?php echo $row['category']; ?>">
                <img src="img/works/<?php echo $row['works_img']; ?>" alt="<?php echo $row['overlay_title']; ?>">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="<?php echo $row['caption']; ?>" href="img/works/<?php echo $row['works_img']; ?>">
                        <i class="fa fa-eye fa-lg"></i>
                    </a>
                    <h4><?php echo $row['overlay_title']; ?></h4>
                    <p><?php echo $row['category']; ?></p>
                </figcaption>
            </figure>
        <?php } ?>

    </div>
</section>



    <!--
        End Our Works
        ==================================== -->

    <!--
        Meet Our Team
        ==================================== -->

        <section id="team" class="team">
    <div class="container">
        <div class="row">
            <!-- Section Title -->
            <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                <h2>Meet Our Team</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <!-- Fetch Team Members Dynamically -->
            <?php
            // Include the database connection
            include('db.php');

            // Query to fetch all team members from the `team` table
            $sql = "SELECT * FROM team";
            $result = $conn->query($sql);

            // Loop through each team member and display them dynamically
            while ($row = $result->fetch_assoc()) {
            ?>
            <!-- single member -->
            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                <div class="member-thumb">
                    <img src="img/team/<?php echo $row['team_img']; ?>" alt="<?php echo $row['name']; ?>" class="img-responsive">
                    <figcaption class="overlay">
                        <h5><?php echo $row['overlay_title']; ?></h5>
                        <p><?php echo $row['overlay_description']; ?></p>
                        <ul class="social-links text-center">
                            <li><a href="<?php echo $row['twitter_link']; ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href="<?php echo $row['facebook_link']; ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href="<?php echo $row['google_plus_link']; ?>"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        </ul>
                    </figcaption>
                </div>
                <h4><?php echo $row['name']; ?></h4>
                <span><?php echo $row['position']; ?></span>
            </figure>
            <!-- end single member -->
            <?php } ?>
        </div>
    </div>
</section>

    <!--
        End Meet Our Team
        ==================================== -->

    <!--
        Some fun facts
        ==================================== -->

        <section id="facts" class="facts">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row number-counters">
                <!-- Section Title -->
                <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                    <h2>Some Fun Facts</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- Fetch Fun Facts Dynamically -->
                <?php
                // Include the database connection
                include('db.php');

                // Query to fetch all fun facts from the `facts` table
                $sql = "SELECT * FROM facts";
                $result = $conn->query($sql);

                // Loop through each fact and display it dynamically
                while ($row = $result->fetch_assoc()) {
                ?>
                <!-- single fact item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="<?php echo $row['delay']; ?>">
                    <div class="counters-item">
                        <i class="fa <?php echo $row['icon']; ?> fa-3x"></i>
                        <strong data-to="<?php echo $row['number']; ?>">0</strong>
                        <p><?php echo $row['label']; ?></p>
                    </div>
                </div>
                <!-- end single fact item -->
                <?php } ?>
            </div>
        </div>
    </div>
</section>


    <!--
        End Some fun facts
        ==================================== -->


    <!--
        Contact Us
        ==================================== -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Let’s Discuss</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                </div>

                <!-- contact address -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Cras at ultrices erat, sed vulputate!</h3>
                        <p>2345 Setwant natrer, 1234,</p>
                        <p>Washington. United States.</p>
                        <p>(401) 1234 567</p>
                    </div>
                </div>
                <!-- end contact address -->

                <!-- contact form -->
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3>Say hello!</h3>

                       <form action="send.php" id="contact-form" method="POST">
    <div class="input-group name-email">
        <div class="input-field">
            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
        </div>
        <div class="input-field">
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
        </div>
    </div>
    <div class="input-group">
        <textarea name="message" id="message" placeholder="Message" class="form-control" required></textarea>
    </div>
    <div class="input-group">
        <input type="submit" id="form-submit" class="pull-right" name="send" value="Send message">
    </div>
</form>

                    </div>
                </div>
                <!-- end contact form -->

                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                        <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->

            </div>
        </div>

        <!-- Google map -->
        <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
        <!-- End Google map -->

    </section>

    <!--
        End Contact Us
        ==================================== -->

<?php include("footer.php"); ?>
   

    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
		================================================== -->
    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
        var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
        );
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>
<script type="text/javascript">
$(function () {
    $('#contact-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name.",
                minlength: "Your name must consist of at least 2 characters."
            },
            email: {
                required: "Please enter a valid email."
            },
            message: {
                required: "Please write a message."
            }
        },
        submitHandler: function (form) {
            // Display "Sending..." message
            $('#form-submit').val('Sending...').attr('disabled', 'disabled');
            $.ajax({
                type: "POST",
                url: "send.php",
                data: $(form).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message sent!',
                        text: 'Your message has been sent successfully.'
                    }).then((result) => {
                        // Reset form submit button after SweetAlert2 message is closed
                        $('#form-submit').val('Send message').removeAttr('disabled');
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There was an error sending your message.'
                    }).then((result) => {
                        // Reset form submit button after SweetAlert2 message is closed
                        $('#form-submit').val('Send message').removeAttr('disabled');
                    });
                }
            });
        }
    });
});
</script>


</body>

</html>
