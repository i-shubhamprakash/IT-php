<?php
/*
 © aditya thakur
 contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 
 */
// Check if user is logged in using the session variable
if ( $_SESSION[ 'logged_in' ] != 1 ) {
	$_SESSION[ 'message' ] = "You must log in before viewing your profile page!";
	header( "location: signin-up.php" );
} else {
	//Fetching user information by login email confirmation from login.php
	$email = $_SESSION[ 'email' ];
	$result = $mysqli->query( "SELECT * FROM students WHERE email='$email'" );
	$user = $result->fetch_assoc();
	// Makes it easier to read
	$full_name = $user[ 'full_name' ];
	$active = $user[ 'active' ];
	$roll = $user[ 'roll' ];
	$phone = $user[ 'phone' ];
	$image = $user[ 'image' ];
}

$page_requirements = '
	<title>Welcome </title>
    <link href="profile/css/style.css" rel="stylesheet">';
	include( "header.php" );
?>
<!-- Modal -->

<!--model dialogue-->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	
	<div class="w3-container">
	  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Update Profile Pic</button>
	  	<span><?php if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
				echo $_SESSION['message'];    
					else: header( "location: index.php" );
				endif;
			?>
		</span><button class="btn btn-info btn-lg pull-right" name="update_profile" data-target="#myModal" data-toggle="modal">Update Profile</button>
 						<?php 
                            // Display message  only once
                            if ( isset($_SESSION['message']) )
                            {// Don't annoy the user with more messages upon page refresh
                                unset( $_SESSION['message'] );
                            }
                        ?>
 
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
 <?php 
	$targetDir = "profile/img/";
	$targetFilePath = $targetDir.$image;
	?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="<?php echo $targetFilePath;?>" class="img-responsive" alt="Image not found..."/>
					
                </div>
                <!-- Profile Image -->
            </div>
            <div class="col-md-9">
                <div class="name-wrapper">
                    <h1 class="name"><?= $full_name ?></h1>
                    <span>Student</span>
                </div>
                <p>
                    Credibly embrace visionary internal or "organic" sources and business benefits. Collaboratively
                    integrate efficient portals rather than customized customer service. Assertively deliver
                    frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and
                    process-centric expertise.Energistically fabricate customized imperatives through cooperative
                    catalysts for change.
                </p>


                <div class="row">
                    <div class="col-md-3">
                        <div class="personal-details">
							<strong><?= $email ?></strong>
                            <small>EMAIL</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="personal-details">
                            <strong><?= $phone ?></strong>
                            <small>MOBILE</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="personal-details">
                            <strong><?= $roll ?></strong>
                            <small>ROLL NO.</small>
                        </div>
                    </div>
                </div>

                <ul class="social-icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- .header-->

<section class="section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>My Activity</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">100%</div>
                            <div class="item-stats-name">Jobs Success</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">96%</div>
                            <div class="item-stats-name">On Budget</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">99%</div>
                            <div class="item-stats-name">On Time</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">89%</div>
                            <div class="item-stats-name">Repeat Hire Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .activity-wrapper -->

<section class="work-history-wrapper section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Work History</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">15096</div>
                            <div class="item-stats-name">hours worked</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">687</div>
                            <div class="item-stats-name">Work Done</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">30</div>
                            <div class="item-stats-name">Hours weekly Available</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">24</div>
                            <div class="item-stats-name">Hour Response Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .work-history-wrapper -->

<section class="expertise-wrapper section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>My Specialities</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>WordPress Theme Development</h3>

                            <p>
                                Synergistically strategize customer directed resources rather than principle.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Joomla Template Development </h3>

                            <p>
                                Quickly repurpose reliable customer service with orthogonal ideas. Competently.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Drupal Template Development</h3>

                            <p>
                                Interactively myocardinate high standards in initiatives rather than next-generation.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Shopify Theme Design</h3>

                            <p>
                                Dynamically initiate client-based convergence vis-a-vis performance based. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- .row -->


    </div>
</section>
<!-- .expertise-wrapper -->

<section class="section-wrapper skills-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress-wrapper">

                            <h3>CODING SKILLS</h3>

                            <div class="progress-item">
                                <span class="progress-title">HTML5</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 62%"><span
                                            class="progress-percent"> 62%</span>
                                    </div>
                                </div>
                                <!-- .progress -->
                            </div>
                            <!-- .skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">CSS3</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 90%"><span
                                            class="progress-percent"> 90%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">PHP</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 75%;"><span
                                            class="progress-percent"> 75%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">JavaScript</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 55%;"><span
                                            class="progress-percent"> 55%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->


                        </div>
                        <!-- /.progress-wrapper -->
                    </div>
                    <div class="col-md-6">
                        <div class="progress-wrapper">
                            <h3>DESIGN TOOLS</h3>

                            <div class="progress-item">
                                <span class="progress-title">Photoshop</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 90%"><span
                                            class="progress-percent"> 90%</span>
                                    </div>
                                </div>
                                <!-- .progress -->
                            </div>
                            <!-- .skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">Illustrator</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 70%"><span
                                            class="progress-percent"> 50%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">Sketch</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 75%;"><span
                                            class="progress-percent"> 75%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">MACAW</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 55%;"><span
                                            class="progress-percent"> 55%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                        </div>
                        <!-- /.progress-wrapper -->
                    </div>
                </div>
                <!--.row -->
            </div>
        </div>

    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->

<section class="section-wrapper section-experience">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>Work Experience</h2></div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>2015 - Present</small>
                            <h3>Senior Developer</h3>
                            <h4>Computer &amp; Motor Ltd.</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>2012 - 2015</small>
                            <h3>Webdesigner</h3>
                            <h4>BizzNiss</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="content-item">
                            <small>2012 - 2015</small>
                            <h3>Web Developer</h3>
                            <h4>Unique Soft</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>2010 - 2012</small>
                            <h3>Front-end Developer</h3>
                            <h4>Somsom LLC</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                </div>
            </div>
            <!--.row-->
        </div>
    </div>
    <!-- .container -->
</section>
<!-- .section-experience -->

<section class="section-education section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>Education</h2></div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-item">
                            <small>2010 - 2012</small>
                            <h3>MA Product Design</h3>
                            <h4>University of California</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                        <div class="content-item">
                            <small>2007 - 2010</small>
                            <h3>Business marketing course</h3>
                            <h4>Royal Academy of Business</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                        <div class="content-item">
                            <small>2002 - 2006</small>
                            <h3>BA (Hons) Design</h3>
                            <h4>University of Michigan</h4>

                            <p>United Kingdom, London</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                </div>
                <!--.row-->
            </div>

        </div>
        <!--.row-->
    </div>
    <!-- .container -->
</section>
<!-- .section-education -->

<section class="section-profile section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>Marketplace Profile</h2></div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-studio.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">ENVATO STUDIO</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-freelancer.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">FREELANCER</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-upwork.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">UPWORK</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-peopleperhour.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">PEOPLEPERHOUR</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.row-->
            </div>

        </div>
        <!--.row-->
    </div>
    <!-- .container -->
</section>
<!-- .section-profile -->

<section class="section-wrapper portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-1.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Creative concepts</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-2.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Customer focused</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-3.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Management methodology</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-4.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Market research</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-5.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Market research</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="#">
                            <div class="portfolio-thumb">
                                <img src="img/portfolio-6.jpg" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Market research</h3>
                                <small>domain.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- .portfolio -->

<section class="review-section section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Recent Reviews</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div id="review">
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/img-testimonial-2.jpg" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Sofia Voigt</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="5.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-5">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>


                        <div class="review-text">
                            Seamlessly leverage other's transparent resources after resource maximizing channels.
                            Continually grow economically sound collaboration and idea-sharing and compelling
                            technology. Collaboratively unleash.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/img-testimonial-1.jpg" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Matteo Müller</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="4.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-4">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>
                        <div class="review-text">
                            Uniquely target empowered relationships after client-based e-commerce. Energistically morph
                            worldwide resources for future-proof content. Authoritatively transform granular users
                            whereas intermandated applications.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/img-testimonial-3.jpg" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Noel Schulze</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="3.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-3">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>
                        <div class="review-text">
                            Enthusiastically mesh an expanded array of infrastructures through distinctive customer
                            service. Distinctively reintermediate e-business information vis-a-vis excellent networks.
                            Uniquely fabricate just.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/unknown.png" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Jason Lehmann</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="2.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-2">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>
                        <div class="review-text">
                            Proactively network unique potentialities rather than one-to-one process improvements.
                            Dynamically leverage existing progressive methods of empowerment rather than efficient
                            functionalities. Continually.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/unknown.png" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Jason Lehmann</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="1.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-1">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>
                        <div class="review-text">
                            Progressively leverage existing 24/7 paradigms through exceptional process improvements.
                            Completely revolutionize compelling architectures for team driven partnerships. Quickly
                            transform focused value.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                </div>
                <!--#review-->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- .review-section -->

<section class="section-contact section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <address>
                            <strong>Address</strong><br>
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103

                        </address>
                    </div>
                    <div class="col-md-3">
                        <address>
                            <strong>Phone Number</strong><br>
                            +61 3 8376 6284
                        </address>
                    </div>
                    <div class="col-md-3">
                        <address>
                            <strong>Mobile Number</strong><br>
                            987 654 321
                        </address>
                    </div>
                    <div class="col-md-3">
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:#">coffee@amelie.me</a>
                        </address>
                    </div>

                </div>
                <!--.row-->

                <div class="feedback-form">
                    <h3>Get in touch with <?= $full_name?></h3>

                    <form id="contactForm" action="sendemail.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" required="" class="form-control" id="InputName"
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="InputSubject"
                                   placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="Write message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- .feedback-form -->

            </div>
        </div>
        <!--.row-->

    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->



</div>
<!-- #main-wrapper -->
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Update Profile Picture</h2>
      </header>
      <div class="w3-container">
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
    Select File to Upload:<br/><br/>
    <input type="file" name="file"><br/>
    <input type="submit" name="submit" value="Upload"><br/>
	</form>
      </div>
      <footer class="w3-container w3-teal">
        <p>Thank You</p>
      </footer>
    </div>
  </div>
		<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<form action="update_profile.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Update Profile</h4>
								</div>
								<div class="modal-body">
									
									  <h2>Update Your Profile Please!</h2>
								<div class="form-group">
								  <label for="bio">About You:</label>
								  <input type="text" class="form-control" id="bio" placeholder="Tell us something to know you better" name="bio">
								</div>
								<div class="form-group">
								  <label for="work">Work History:</label>
								  <input type="text" class="form-control" id="work" placeholder="Any work experience" name="work_ex">
								</div>
									<div class="bg-danger" style="height: 330px;">
										
											<h3>Coding Background</h3>
											<div style="margin-left:25px;">
												<label class="checkbox-inline"><input type="checkbox" value="C" name = "coding[]" />C</label>
												<label class="checkbox-inline"><input type="checkbox" value="C++" name = "coding[]" />C++</label>
												<label class="checkbox-inline"><input type="checkbox" value="Java" name = "coding[]" />Java</label>
												<label class="checkbox-inline"><input type="checkbox" value="Python" name = "coding[]" />Python</label>
												<label class="checkbox-inline"><input type="checkbox" value="Php" name = "coding[]" />Php</label>
												<label class="checkbox-inline"><input type="checkbox" value="Ruby" name = "coding[]"/>Ruby</label>
												<label class="checkbox-inline"><input type="checkbox" value="C#" name = "coding[]"/>C#</label>
												<label class="checkbox-inline"><input type="checkbox" value="SQL" name = "coding[]" />SQL</label>
												<label class="checkbox-inline"><input type="checkbox" value="Html & CSS" name = "coding[]" />Html &amp; CSS</label>
												<label class="checkbox-inline"><input type="checkbox" value=".Net" name = "coding[]" />.Net</label>
												<label class="checkbox-inline"><input type="checkbox" value="R" name = "coding[]" />R</label>
												<label class="checkbox-inline"><input type="checkbox" value="Android" name = "coding[]"/>Android</label>
												<label class="checkbox-inline"><input type="checkbox" value="Hadoop" name = "coding[]" />Hadoop</label>
												<label class="checkbox-inline"><input type="checkbox" value="Big Data" name = "coding[]" />Big Data</label>
												<label class="checkbox-inline"><input type="checkbox" value="Data Science" name = "coding[]" />Data Science</label>
												<label class="checkbox-inline"><input type="checkbox" value="Machine Learning" name = "coding[]" />Machine Learning</label>
												<label class="checkbox-inline"><input type="checkbox" value="IOT" name = "coding[]" />IOT</label>
												<label class="checkbox-inline"><input type="checkbox" value="Graphics Designing" name = "coding[]" />Graphics Designing</label>
											</div>
											<h3>Co-Curricular Activity</h3>
											<div style="margin-left:25px;">
												<label class="checkbox-inline"><input type="checkbox" value="Debate" name = "CCA[]"/>Debate</label>
												<label class="checkbox-inline"><input type="checkbox" value="Group Discussion" name = "CCA[]" />Group Discussion</label>
												<label class="checkbox-inline"><input type="checkbox" value="Extempore" name = "CCA[]" />Extempore</label>
												<label class="checkbox-inline"><input type="checkbox" value="Singing & Dancing" name = "CCA[]" />Singing &amp; Dancing</label>
												<label class="checkbox-inline"><input type="checkbox" value="Drawing" name = "CCA[]" />Drawing</label>
												<label class="checkbox-inline"><input type="checkbox" value="Photography" name = "CCA[]" />Photography</label>
												<label class="checkbox-inline"><input type="checkbox" value="Content Writing(Article & Poetry)" name = "CCA[]" />Content Writing(Article &amp; Poetry)</label>
												<label class="checkbox-inline"><input type="checkbox" value="Painting" name = "CCA[]" />Painting</label>
												<label class="checkbox-inline"><input type="checkbox" value="Photoshop" name = "CCA[]" />Photoshop</label>
												<label class="checkbox-inline"><input type="checkbox" value="Video Editing" name = "CCA[]" />Video Editing</label>
												<label class="checkbox-inline"><input type="checkbox" value="Animation" name = "CCA[]" />Animation</label>
												<label class="checkbox-inline"><input type="checkbox" value="Fashion" name = "CCA[]" />Fashion</label>
											</div>
											<h3>Sports</h3>
											<div style="margin-left:25px;">
												<label class="checkbox-inline"><input type="checkbox" value="Cricket" name = "Sports[]" />Cricket</label>
												<label class="checkbox-inline"><input type="checkbox" value="Football" name = "Sports[]" />Football</label>
												<label class="checkbox-inline"><input type="checkbox" value="Basketball" name = "Sports[]" />Basketball</label>
												<label class="checkbox-inline"><input type="checkbox" value="Table Tennis" name = "Sports[]" />Table Tennis</label>
												<label class="checkbox-inline"><input type="checkbox" value="Volleyball" name = "Sports[]" />Volleyball</label>
												<label class="checkbox-inline"><input type="checkbox" value="Chess" name = "Sports[]" />Chess</label>
											</div>
											<br/>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default btn-lg" name="update"><a href="">Update</a></button>
									</div>
								</div>
								</form>
							</div>
				<!--model content-->
				</div>
<!-- jquery -->
<script src="profile/js/jquery-2.1.4.min.js"></script>
<!-- Bootstrap -->
<script src="profile/js/bootstrap.min.js"></script>
<!--owl carousal-->
<script src="profile/js/owl.carousel.min.js"></script>
<!--theme script-->
<script src="profile/js/scripts.js"></script>
<script>
		$('.ls-modal').on('click', function(e){
		e.preventDefault();
  		$('#myModal').modal('show').find('.modal-body').load($(this).attr('href'));
		});
</script>
</body>
</html>

<?php include("footer.php"); ?>