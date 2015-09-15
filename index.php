<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/_vars.php";
   include_once($path);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php print $site_name; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <script type="text/javascript" src="//use.typekit.net/imj1jdn.js"></script> -->
        <!-- <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->
        <link rel="stylesheet" href="/css/futura.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="/styles/chewie.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="toggleable-nav fade">
        <div tabindex="0" class="ic close-nav">X</div>
        <div class="link-block">
            <a class="large uppercase" href="<?php print $home_link; ?>">Home</a>
        </div>
        <div class="link-block">
            <a class="large uppercase" href="">Program</a>
            <a href="">Speakers</a>
            <a href="">Exhibitor List</a>
            <a href="">ASCE Communities & Pavilions</a>
        </div>
        <div class="link-block">
            <a class="large uppercase" href="">Location</a>
            <a href="">Lodging & Transportation</a>
            <a href="">For International Travel</a>
        </div>
        <div class="link-block">
            <a class="large uppercase" href="">About</a>
            <a href="">Cooperating Organizations</a>
            <a href="">Volunteer</a>
        </div>
        <a class="large uppercase" href="">Why Attend</a>
        <a class="large uppercase" href="">Registration</a>
        <a class="large uppercase" href="">For Speakers</a>
        <a class="large uppercase" href="<?php print $sponsors_link; ?>">Sponsors</a>
        <a class="large uppercase" href="">Exhibitors</a>
    </div>
    <div class="header">
        <div class="visible-xs mobile-nav navigation">
            <div class="year-badge-wrapper">
                <div class="year-badge text-center">
                    <h2><span class="light">20</span>15</h2>
                </div>
                <div class="year-badge-corner"></div>
            </div>
            <a href="<?php print $home_link; ?>"><span class="ic home"></span></a>
            <a href="">Register</a>
            <a class="menu-toggle" href="">Menu <span class="ic menu"></span></a>
        </div>
        <div class="container-fluid titles">
            <div class="container">
                <div class="col-container">
                    <div class="logo-col text-center">
                        <a href="<?php print $home_link ?>"><img class="conference-logo" src="../img/conf-logo.png"/></a>
                    </div>
                    <div class="auto-col">
                        <h2><a href="<?php print $home_link; ?>" title="Home"><?php print $site_name; ?></a></h2>
                        <h4 class="hidden-xs">Optional Tagline for the Conference Goes Here Lorem Ipsum</h4>
                        <h5 class="hidden-xs"><?php print $conf_location ?>  |  <?php print $conf_date; ?></h5>
                    </div>
                    <div class="side-nav-col" style="background-image: url(../img/fpo-header.jpg);">
                        <div class="year-badge-wrapper hidden-xs">
                            <div class="year-badge text-center">
                                <h2><span class="light">20</span>15</h2>
                            </div>
                            <div class="year-badge-corner"></div>
                        </div>
                        <div class="right-header hidden-xs">
                            <div class="nav3">
                                <a href="">For Speakers</a>
                                <a href="<?php print $sponsors_link; ?>">Sponsors</a>
                                <a href="">Exhibitors</a>
                            </div>
                        </div>
                        <h4 class="visible-xs">Optional Tagline for the Conference Goes Here Lorem Ipsum</h4>
                    </div>
                    <h5 class="visible-xs"><?php print $conf_location; ?>  |  <?php print $conf_date; ?></h5>
                </div>
            </div>
        </div>
        <div class="container-fluid navigation hidden-xs">
            <div class="container">
                <div class="col-container">
                    <div class="auto-col">
                        <div class="nav1">
                            <a class="no-hover" href=""><span class="ic home"></span></a>
                            <a href="" data-menu-target="#programlevel2">Program <span class="ic chevron-down"></span></a>
                            <a href="" data-menu-target="#locationlevel2">Location <span class="ic chevron-down"></span></a>
                            <a href="" data-menu-target="#aboutlevel2">About <span class="ic chevron-down"></span></a>
                            <a href="" class="no-hover hidden-md hidden-lg"><span class="ic contact">Contact</span></a>
                            <a href="" class="hidden-sm hidden-xs">Contact</a>
                        </div>
                    </div>
                    <div class="side-nav-col">
                        <div class="nav2">
                            <a href="">Why Attend</a>
                            <a href="">Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid navigation-level2">
            <div class="container">
                <ul id="programlevel2" class="list-unstyled">
                    <li><a href="">Speakers</a></li>
                    <li><a href="">Exhibitor List</a></li>
                    <li><a href="">ASCE Communities & Pavilion</a></li>
                </ul>
                <ul id="locationlevel2" class="list-unstyled">
                    <li><a href="">Lodging & Transportation</a></li>
                    <li><a href="">For International Travel</a></li>
                </ul>
                <ul id="aboutlevel2" class="list-unstyled">
                    <li><a href="">Cooperating Organizations</a></li>
                    <li><a href="">Volunteer</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="container content">
                <div class="col-container">
                    <div class="auto-col">
                        <div class="share-logos">
                            SHARE
                            <img src="img/fpo-share-logos.png">
                        </div>
                        <div class="introduction">
                            <img src="img/fpo-hero.jpg" alt="">
                            <div class="img-fade"></div>
                            <div>
                                <h1>
                                    New ideas. New practices. New science. New resources. New colleagues. New business procedures.
                                </h1>
                                <div class="intro">
                                    Exposure to the latest industry advances will help you discover your own cutting-edge solutions. Gain contacts among colleagues and resource providers. Ultimately, STRUCTURES CONGRESS 2014 will prepare you and your organization to tackle greater challenges.
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <h2>Keynote Speakers</h2>
                        <div class="speaker-profile">
                            <div class="session-col">
                                <div class="col-sm-6 dateline text-right">THURSDAY <div class="date">APR 3</div></div>
                                <div class="col-sm-6 sessiontype">OPENING <br>PLENARY</div>
                            </div>
                            <div class="photo-col">
                                <img src="img/FPO_speaker_130x130.jpg" alt="speaker">
                            </div>
                            <div class="details-col">
                                <div class="person-name">Charles Johnson</div>
                                <div class="person-title"> Ph.D., P.E., S.E., CVS, F.ASCE Illuminate Foundry, Inc.</div>
                                <a class="button">Speaker Details</a>
                            </div>
                        </div>
                        <div class="speaker-profile">
                            <div class="session-col">
                                <div class="col-sm-6 dateline text-right">THURSDAY <div class="date">APR 3</div></div>
                                <div class="col-sm-6 sessiontype">OPENING <br>PLENARY</div>
                            </div>
                            <div class="photo-col">
                                <img src="img/FPO_speaker_130x130.jpg" alt="speaker">
                            </div>
                            <div class="details-col">
                                <div class="person-name">Charles Johnson</div>
                                <div class="person-title"> Ph.D., P.E., S.E., CVS, F.ASCE Illuminate Foundry, Inc.</div>
                                <a class="button">Speaker Details</a>
                            </div>
                        </div>
                        <br>
                        <h2>Pre-Conference Seminars</h2>
                        <p>Sign up to earn additional PDHs at a pre-conference seminar:</p>
                        <div class="session">Post Disaster Safety Evaluations</div>
                        <p>6.0 PDHs - in cooperation with California Office of Emergency Services (CalOES) and Applied Technology Council (ATC)</p>
                        <div class="session">Design of Sustainable Thermal Breaks</div>
                        <p>4.0 PDHs</p>
                        <br>
                        <h2>More Highlights</h2>
                        <ul>
                            <li>Dynamic technical sessions - choose from more than 120 sessions</li>
                            <li>The Council of American Structural Engineers (CASE) Spring Risk Management Convocation</li>
                            <li>Networking with more than 1,200 colleagues</li>
                        </ul>
                        <a class="button" href="">View Program</a>
                        <br><br>
                    </div>
                    <div class="side-nav-col">
                        <div class="callout register">
                            <img src="img/FPO_sidebar_340x135.jpg" alt="">
                            <h4><?php print $conf_venue; ?></h4>
                            <a href="" class="button">REGISTER TODAY</a> <a href=""> <span class="ic download"></span>Save to my calendar</a>
                        </div>
                        <div class="callout rates">
                            <p>
                                EARLY BIRD RATES - Save up to $200! <br><br>
                                $675 - Members <br>
                                $875 - Non-Members <br>
                                <a href="">More options & rates available</a><br>
                                Prices go up February 12, 2014 <br>
                            </p>
                        </div>
                        <div class="callout important-dates">
                            <h2>Important Dates</h2>
                            <div class="callout-body">
                                <div class="date-block">
                                    <div class="date-col">
                                        <div class="date">DEC 18</div>
                                        <div>2013</div>
                                    </div>
                                    <div class="description-col">
                                        FINAL PAPERS <br> DUE
                                    </div>
                                </div>
                                <div class="date-block">
                                    <div class="date-col">
                                        <div class="date">FEB 12</div>
                                        <div>2014</div>
                                    </div>
                                    <div class="description-col">
                                        early registration <br> deadline
                                    </div>
                                </div>
                                <div class="date-block">
                                    <div class="date-col">
                                        <div class="date">MAR 13</div>
                                        <div>2014</div>
                                    </div>
                                    <div class="description-col">
                                        advance registration deadline
                                    </div>
                                </div>
                                <div class="date-block">
                                    <div class="date-col">
                                        <div class="date">APR 21</div>
                                        <div>2014</div>
                                    </div>
                                    <div class="description-col">
                                        cancellation deadline <br> (minus $65)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="callout chairs">
                            <h2>Conference Chairs</h2>
                            <div class="callout-body">
                                <div class="person-name">Glenn Bell, P.E., F.SEI, M.ASCE</div>
                                <div class="person-title">Simpson Gumpertz & Heger Inc.</div>

                                <div class="person-name">Matt Card, P.E., Aff.M.ASCE</div>
                                <div class="person-title">Alfred Benesch & Co.</div>

                                <a href="">Message from the Chairs</a>
                            </div>
                        </div>
                        <div class="callout sponsors hidden-xs">
                            <h2>Platinum Sponsors</h2>
                            <div class="callout-body cycle-slideshow">
                                <img src="img/sponsor_logo_horizontal2.gif" alt="">
                                <img src="img/sponsor_logo_horizontal1.gif" alt="">
                            </div>
                        </div>
                        <div class="callout mobile-app">
                            <h2>Download Mobile App</h2>
                            <div class="callout-body">
                                <p><strong>PLAN, ENGAGE, CONNECT</strong> <br>Enhance your conference experience with our mobile app. </p>
                                <div class="text-center">
                                    <a href=""><img src="img/App-Store.png" alt=""></a>
                                    <a href=""><img src="img/Google-Play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="callout join-conversation">
                            <h2>Join the Conversation</h2>
                            <div class="callout-body">
                                <div>Follow ASCE on social media for real-time conversation.</div>
                                <a href=""><span class="ic twitter-large"></span>#structures2014</a>
                                <a href="" class="pull-right"><span class="ic facebook-large"></span></a>
                                <a href="" class="pull-right"><span class="ic google-large"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid content">
            <div class="container sponsor-container">
                <h2>2014 Top Sponsors</h2>
                <div class="top-sponsor-block platinum">
                    <div class="box">
                        <img src="img/sponsor_logo_horizontal2.gif" alt="">
                        <img src="img/sponsor_logo_horizontal1.gif" alt="">
                    </div>
                </div>
                <div class="top-sponsor-block gold">
                    <div class="box">
                        <img src="img/Sponsorlogo_square1.gif" alt="">
                        <img src="img/sponsor_logo_horizontal3.gif" alt="">
                        <img src="img/sponsor_logo_horizontal4.gif" alt="">
                    </div>
                </div>
            </div>
            <div class="coop-orgs-block row">
                <div class="container">
                    <h2>COOPERATING ORGANIZATIONS</h2>
                    <img src="img/cooplogo_square1.gif" alt="">
                    <img src="img/cooplogo_horizontal1.gif" alt="">
                    <img src="img/cooplogo_horizontal2.gif" alt="">
                    <img src="img/cooplogo_horizontal3.gif" alt="">
                    <img src="img/cooplogo_square4.gif" alt="">
                    <img src="img/cooplogo_horizontal4.gif" alt="">
                    <img src="img/cooplogo_square2.gif" alt="">
                </div>
            </div>
        </div>
    <div class="footer container-fluid">
        <div class="row year-tabs">
            <div class="container">
                <ul class="tab-buttons pull-right list-unstyled">
                     <li><a href="#yearprev" data-toggle="tab" class="tab-button">2014</a></li>
                     <li class="active"><a href="#yearpresent" data-toggle="tab" class="tab-button">2015</a></li>
                     <li><a href="#yearnext" data-toggle="tab" class="tab-button">2016</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="yearprev">
                <div class="row title">
                    <div class="container">
                        <div class="hidden-xs pull-left">
                            <div class="year-badge text-center">
                                <h2><span class="light">20</span>14</h2>
                            </div>
                            <div class="year-badge-corner"></div>
                        </div>
                        <h2><?php print $site_name; ?></h2>
                    </div>
                </div>
                <div class="row details year-prev-next">
                    <div class="container">
                        <div class="col-container">
                            <div class="logo-col hidden-xs text-center"><img class="conference-logo" src="../img/conf-logo.png"/></div>
                            <div class="auto-col">
                                <div class="col-sm-12 col-xs-10 col4">
                                    <h2>TORONTO, CANADA  |  MAY 2-4, 2013</h2>
                                    <h3>Baylord Hotel</h3>
                                    <h4>Optional Tagline for the Conference Goes Here Lorem Ipsum</h4>
                                    <p><strong>This is a place to write the theme or a brief description of this conference. It’s optional. lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum.</strong></p>
                                    <a class="link-arrow" href="">Program</a>
                                    <a class="link-arrow" href="">Proceedings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="yearpresent">
                <div class="row title">
                    <div class="container">
                        <div class="hidden-xs pull-left">
                            <div class="year-badge text-center">
                                <h2><span class="light">20</span>15</h2>
                            </div>
                            <div class="year-badge-corner"></div>
                        </div>
                        <h2><?php print $site_name; ?></h2>
                    </div>
                </div>
                <div class="row details">
                    <div class="container">
                        <div class="col-container">
                            <div class="logo-col hidden-xs text-center"><img class="conference-logo" src="../img/conf-logo.png"/></div>
                            <div class="auto-col">
                                <div class="col-sm-4 hidden-xs">
                                    <div class="link-block">
                                        <a class="large uppercase" href="<?php print $home_link; ?>">Home</a>
                                    </div>
                                    <div class="link-block">
                                        <a class="large uppercase" href="">Program</a>
                                        <a href="">Speakers</a>
                                        <a href="">Exhibitor List</a>
                                        <a href="">ASCE Communities & Pavilions</a>
                                    </div>
                                    <div class="link-block">
                                        <a class="large uppercase" href="">Location</a>
                                        <a href="">Lodging & Transportation</a>
                                        <a href="">For International Travel</a>
                                    </div>
                                    <div class="link-block">
                                        <a class="large uppercase" href="">About</a>
                                        <a href="">Cooperating Organizations</a>
                                        <a href="">Volunteer</a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col3 hidden-xs">
                                    <a class="large" href="">Why Attend</a>
                                    <a class="large" href="">Registration</a>
                                    <a class="large" href="">For Speakers</a>
                                    <a class="large" href="<?php print $sponsors_link; ?>">Sponsors</a>
                                    <a class="large" href="">Exhibitors</a>
                                </div>
                                <div class="pull-left col-xs-2 visible-xs"><img class="conference-logo" src="../img/conf-logo.png"/></div>
                                <div class="col-sm-4 col-xs-10 col4">
                                    <div class="link-block contact">
                                        <h3>Contact Us</h3>
                                        <a class="large" href=""><span class="ic mobile-phone"></span>(800) 548-2723</a>
                                        <a class="large" href=""><span class="ic twitter"></span>#structures2014</a>
                                        <a class="large" href=""><span class="ic contact-large"></span>Other contacts</a>
                                    </div>
                                    <div class="link-block connect">
                                        <h3>Connect With ASCE</h3>
                                        <a href=""><span class="ic linkedin"></span></a>
                                        <a href=""><span class="ic facebook"></span></a>
                                        <a href=""><span class="ic twitter"></span></a>
                                        <a href=""><span class="ic youtube"></span></a>
                                        <a href=""><span class="ic google"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visible-xs mobile-nav navigation">
                    <a href=""><span class="ic home"></span></a>
                    <a href="">Register</a>
                    <a class="menu-toggle" href="">Menu <span class="ic menu"></span></a>
                </div>
            </div>
            <div class="tab-pane" id="yearnext">
                <div class="row title">
                    <div class="container">
                        <div class="hidden-xs pull-left">
                            <div class="year-badge text-center">
                                <h2><span class="light">20</span>16</h2>
                            </div>
                            <div class="year-badge-corner"></div>
                        </div>
                        <h2><?php print $site_name; ?></h2>
                    </div>
                </div>
                <div class="row details year-prev-next">
                    <div class="container">
                        <div class="col-container">
                            <div class="logo-col hidden-xs text-center"><img class="conference-logo" src="../img/conf-logo.png"/></div>
                            <div class="auto-col">
                                <div class="col-sm-12 col-xs-10 col4">
                                    <h2>Mexico City, Mexico  |  April 30 -  May 2, 2015</h2>
                                    <h3>Fuentes Conference center</h3>
                                    <h4>Optional Tagline for the Conference Goes Here Lorem Ipsum</h4>
                                    <p><strong>This is a place to write the theme or a brief description of this conference. It’s optional. lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum.</strong></p>
                                    <a class="link-arrow" href="">Call for submissions</a>
                                    <a class="link-arrow" href="<?php print $sponsors_link; ?>">Sponsors</a>
                                    <a class="link-arrow" href="">Exhibit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright text-center">
            <div class="container">
                <div class="asce-logo"></div>
                <span>Copyright © 1996-<?php print date('Y'); ?>, American Society of Civil Engineers | <a href="">ASCE.org</a></span>
            </div>
        </div>
    </div>
        <?php include '_scripts.php'; ?>
    </body>
</html>
