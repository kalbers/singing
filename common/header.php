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
    queue_js(array('slides.min.jquery','jquery.jplayer.min', 'ihas-js'));
    display_js(); 
    ?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
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

                <div id="primarynav-wrap">
                    <ul id="primary-nav" class="navigation">
                        <?php echo public_nav(array('Themes' => uri('themes'), 'Eras' => uri('eras'), 'Styles' => uri('styles'), 'Teacher Resources' => uri('teacher-resources'))); ?>
                    </ul>
                </div><!-- end primary-nav -->

            </div><!-- end header-wrap -->
        </div><!-- end header -->

        


        <div id="content">
            <?php plugin_page_content(); ?>
