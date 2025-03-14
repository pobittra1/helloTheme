<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>
    <?php wp_head() ?>
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body <?php body_class() ?>>



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Edu Meeting
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <?php echo wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'menu_class' => 'nav',
                            'container' => '',
                            'depth' => 3,
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        )); ?>
                        <!-- <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li><a href="meetings.html">Meetings</a></li>
                            <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="meetings.html">Upcoming Meetings</a></li>
                                    <li><a href="meeting-details.html">Meeting Details</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                        </ul> -->
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->