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
    queue_css(array('reset', '960-12', 'jquery-ui/jquery.ui.tabs', 'jplayer.blue.monday', 'style'));
    display_css();
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js(array('slides.min.jquery', 'jquery.jplayer.min', 'ihas-js'));
    display_js(); 
    ?>

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
                    <div class="grid_6">
                        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                        <div id="jp_container_1" class="jp-audio">
                            <div class="jp-type-single">
                                <div class="jp-gui jp-interface">
                                    <ul class="jp-controls">
                                      <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                      <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                      <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                      <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                      <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                      <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                    </ul>
                                    <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                      </div>
                                    </div><!-- end jp-progress -->
                                    <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value"></div>
                                    </div><!-- end jp-volume-bar -->
                                    <div class="jp-time-holder">
                                      <div class="jp-current-time"></div>
                                      <div class="jp-duration"></div>
                                      <ul class="jp-toggles">
                                        <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                        <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                      </ul>
                                    </div><!-- end jp-time-holder -->
                                </div><!-- end jp-gui -->
                                <div class="jp-title">
                                    <ul>
                                      <li>Bubble</li>
                                    </ul>
                                </div><!-- end jp-title -->
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div><!-- end jp-no-solution -->
                            </div><!-- end jp-type-single -->
                        </div><!-- end jp_container_1 -->
                    </div><!-- end grid_6 -->
            
                    <div id="slideshow" class="grid_6">
                	    <div class="slides_container">
                            <div><img src="<?php echo img('Slide-0.png'); ?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-1.png')?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-2.png')?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-3.png')?>" alt="" title="">
                            </div>
                            <div><img src="<?php echo img('Slide-4.png') ?>" alt="" title=""></div>
                            <div><img src="<?php echo img('Slide-5.png')?>" alt="" title=""></div>
                	    </div><!-- end slides_container -->
                	</div><!-- end slideshow -->
                	
                </div><!-- end-featured-wrap -->
            </div><!-- end featured -->
        </div><!-- end header -->

        <div id="content">
            <?php plugin_page_content(); ?>
            
        <div id="content-wrap" class="container_12">
            
            <div id="home-tabbed-wrap" class="tabbed">
            	<div id="select"><p>Make a selection below</p>
            	<ul id="top-selection-list" class="nav-styles">
            	   <li id="themes"><a href="#themes-tab" class="current">Themes</a></li>
            	   <li id="eras"><a href="#eras-tab">Eras</a></li>
            	   <li id="styles"><a href="#styles-tab">Styles</a></li>
            	</ul>
            	</div>

            	<div id="themes-tab">
            	    <p><a href="" id="family"></a><a href="" id="work"></a><a href="" id="freedom"></a><a href="" id="faith"></a><a href="" id="explore"></a></p>
            	</div>
            	
            	<div id="eras-tab">
                    <p><a href="" id="early-america"><a href="" id="expansion"></a></a><a href="" id="civil-war"></a><a href="" id="industry"></a><a href="" id="depression"></a><a href="" id="post-war"></a></p>
            	</div>
            	
            	<div id="styles-tab">
            	   <p><a href="" id="folk"></a><a href="" id="art"></a><a href="" id="sacred"><a href="" id="popular"></a></p>
            	</div>


            </div><!-- end home-tabbed-wrap -->
            
        </div><!-- end content-wrap -->
        

<?php foot(); ?>
