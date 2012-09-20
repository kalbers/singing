<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = settings('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <!-- Stylesheets -->
    <?php
    queue_css(array('reset', '960-12', 'jquery-ui/jquery.ui.tabs', 'style'));
    display_css();
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js(array('slides.min.jquery', 'ihas-js'));
    display_js(); 
    ?>
    <script>
    	jQuery(function() {
    		jQuery( "#home-tabbed-wrap" ).tabs();
    	});
    	</script>
</head>

<body id="home">
    <?php plugin_body(); ?>
    <div id="wrap">
    
        <div id="header">
            <div id="header-wrap" class="container_12">
            <?php plugin_page_header(); ?>
            
            <div class="submenu">
                <span class="sub1"><a href="#">About</a></span>
                <span class="sub2"><a href="#">My Omeka</a></span>
            </div>
                
                <div id="site-title"><h1><?php echo link_to_home_page(); ?></h1></div>

                <div id="primarynav-wrap" class="navigation">
                    <ul id="primary-nav">
                        <?php echo public_nav(array('Themes' => uri('themes'), 'Eras' => uri('eras'), 'Styles' => uri('styles'), 'Teacher Resources' => uri('teacher-resources'))); ?>
                    </ul>
                </div><!-- end primary-nav -->
            </div><!-- end header-wrap -->
                
            <div id="featured">
                              
                <div id="featured-wrap" class="container_12">
            
                    <div id="slideshow">
                	    <div class="slides_container">
                            <div><img src="<?php echo img('Slide-0.png'); ?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-1.png')?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-2.png')?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-3.png')?>" alt="" title="">
                            </div>
                            <div><img src="<?php echo img('Slide-4.png') ?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-5.png')?>" alt="" title=""></div>
                	    </div>
                	</div>
                	
                </div><!-- end-featured-wrap -->
            </div><!-- end featured -->
        </div><!-- end header -->

        <div id="content">
            <?php plugin_page_content(); ?>
            
        <div id="content-wrap" class="container_12">
            
            <div id="home-tabbed-wrap">
            	<div id="select"><p>Make a selection below</p></div>
            	
            	<ul id="top-selection-list" class="nav-styles">
            	   <li id="themes"><a href="#themes-tab" class="current">Themes</a></li>
            	   <li id="eras"><a href="#eras-tab">Eras</a></li>
            	   <li id="styles"><a href="#styles-tab">Styles</a></li>
            	</ul>
            	
            	<div id="themes-tab">
            	    <p><a href="" id="family"></a><a href="" id="work"></a><a href="" id="freedom"></a><a href="" id="faith"></a><a href="" id="explore"></a></p>
            	</div>
            	
            	<div id="eras-tab">
                    <p>
                        Eras Content
                    </p>
            	</div>
            	
            	<div id="styles-tab">
            	   <p>
            	       Styles Content
            	   </p>
            	</div>


            </div><!-- end home-tabbed-wrap -->
            
        </div><!-- end content-wrap -->
        

<?php foot(); ?>
