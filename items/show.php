<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyid'=>'items','bodyclass' => 'show')); ?>

<div id="content-wrap" class="container_12">

    <?php if (item_has_type('Song')): ?>

    <div id="song-page-top">
        <div id="song-metadata" class="grid_6">
            <h2><?php echo item('Dublin Core', 'Title'); ?></h2>
            <h5>Theme: <?php// echo ; ?></h5>
            <h5>Era: <?php// echo ; ?></h5>
            <h5>Style: <?php// echo ; ?></h5>
            <h5>Publication Date: <?php echo item('Dublin Core', 'Date'); ?></h5>
        </div><!--end song-metadata -->

        <div id="song-files" class="grid_6">


            <h5>Listen to the song</h5>
            <div class="">
                <?php foreach ($item->Files as $file){
                    if(strstr($file->getMimeType(), 'audio')) {
                        echo display_file($file);
                        break;
                    }
                } ?>
            </div>

        <?php foreach ($item->Files as $file){
            if($fileTitle = item_file('Dublin Core', 'Relation', array('no_escape'=>true), $file)) {
                $fileTitles[$fileTitle] = $file;            
            }
        }
        ?>
            <?php echo item('Item Type Metadata', 'Transcription'); ?>
            <?php if (isset($fileTitles['Sidebar'])) {
            echo display_file($file);
            } ?>

            <?php if (isset($fileTitles['Sheet'])) {
            echo display_file($file);
            } ?>
        </div><!-- end song-files -->
    </div><!-- song-page-top -->

    <div id="song-page-main" class="grid_8">

        <?php $paragraphs = array('Paragraph One', 'Paragraph Two', 'Paragraph Three', 'Paragraph Four', 'Paragraph Five', 'Paragraph Six', 'Paragraph Seven', 'Paragraph Eight', 'Paragraph Nine', 'Paragraph Ten'); ?>

        <?php $media = $this->getHelper('Media'); ?>
        <?php foreach ($paragraphs as $paragraph){
            if ($text = item('Item Type Metadata', $paragraph)) {
                echo '<p>';
                echo $text;
                if (isset($fileTitles[$paragraph])) {
                    echo $media->square_thumbnail($fileTitles[$paragraph]);
                    echo item_file('Dublin Core', 'Description', array('no_escape'=>true), $fileTitles[$paragraph]);
                }
                echo '</p>';
            }
        } 
        ?>

        
    </div><!-- end song-page-main -->

    <div id="song-page-sidebar" class="grid_4">
        <?php if (isset($fileTitles['Sidebar'])) {
            echo $media->thumbnail($file);
        } ?>
    </div>

    <div id="song-page-additional" class="container_12">
        <div id="related-songs">
            <?php echo item('Item Type Metadata', 'Related Songs'); ?>
        </div><!-- end related-songs -->
        
        <div id="more-ideas">
            <?php echo item('Item Type Metadata', 'More Ideas'); ?>
        </div>

        <div id="performances">
            <?php echo item('Item Type Metadata', 'Performances'); ?>
        </div>
    </div>

    <?php elseif (item_has_type('Lesson Plan')): ?>

    <div id="lesson-plan-top" class="grid_12">

        <div id="lesson-plan-title" class="grid_6 alpha">
            <h4>Lesson Plan</h4>
            <h1><?php echo item('Dublin Core', 'Title'); ?></h1>
            <?php // show first file ?>
        </div><!-- end lesson-plan-title -->

        <div id="lesson-plan-info" class="grid_6 omega">
            <h5>Grade Level: <span class="lesson-plan-info-text"><?php echo item('Item Type Metadata', 'Grade Level'); ?></span></h5> 
            <h5>Time: <span class="lesson-plan-info-text"><?php echo item('Item Type Metadata', 'Duration'); ?></span></h5>
            <h5>Subject: <span class="lesson-plan-info-text"><?php echo item('Dublin Core', 'Subject'); ?></span></h5>
        </div><!-- end lesson-plan-info -->

    </div><!-- end lesson-plan-top -->

    <div id="lesson-plan-main" class="grid_12 tabbed">

        <ul id="lesson-plan-nav">
            <li><a href="#overview">Overview</a> </li>
            <li><a href="#preparation">Perperation</a></li>
            <li><a href="#instruction">Instruction</a></li>
            <li><a href="#resources">Resources</a></li>
            <li><a href="standards">Standards</a></li>
        </ul>
       
        <div id="overview" class="lesson-plan-text">
            <?php echo item('Item Type Metadata', 'Overview'); ?>
        </div>

        <div id="preparation" class="lesson-plan-text">
            <?php echo item('Item Type Metadata', 'Preparation'); ?>
        </div>

        <div id="instruction" class="lesson-plan-text">
            <?php echo item('Item Type Metadata', 'Instruction'); ?>
        </div>

        <div id="resources" class="lesson-plan-text">
            <?php echo item('Item Type Metadata', 'Resources'); ?>
        </div>

        <div id="standards" class="lesson-plan-text">
            <?php echo item('Item Type Metadata', 'Standards'); ?>
        </div>

    </div><!-- end lesson-plan-main -->

    

    

    <?php else: ?>

    <h1><?php echo item('Dublin Core', 'Title'); ?></h1>

    <?php echo show_item_metadata(); ?>

    <!-- The following returns all of the files associated with an item. -->
    <div id="itemfiles" class="element">
        <h3><?php echo __('Files'); ?></h3>
        <div class="element-text"><?php echo display_files_for_item(); ?></div>
    </div>

    <!-- If the item belongs to a collection, the following creates a link to that collection. -->
    <?php if (item_belongs_to_collection()): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
    <?php if (item_has_tags()): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo item_tags_as_string(); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo item_citation(); ?></div>
    </div>

    <?php echo plugin_append_to_items_show(); ?>

    <?php endif ?>


    <?php echo plugin_append_to_items_show(); ?>

   
</div><!-- end content-wrap -->

<?php foot(); ?>
