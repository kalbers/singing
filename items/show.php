<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyid'=>'items','bodyclass' => 'show')); ?>

<div id="content-wrap" class="container_12">

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
        </div><!-- end song-files -->
    </div><!-- song-page-top -->

    <div id="song-page-main" class="grid_8">

        <?php $paragraphs = array('Paragraph One', 'Paragraph Two', 'Paragraph Three', 'Paragraph Four', 'Paragraph Five', 'Paragraph Six', 'Paragraph Seven', 'Paragraph Eight', 'Paragraph Nine', 'Paragraph Ten'); ?>

        <?php $media = new Omeka_View_Helper_Media; ?>
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
            <?php $itemIDs = item('Item Type Metadata', 'Related Items', array('all'=>true, 'no_escape'=>true));
            foreach ($itemIDs as $itemID) {
                $item = get_item_by_id($itemID);
                if($item) { 
                set_current_item($item);
                echo '<div class="item hentry"><h5>' . link_to_item(item('Dublin Core', 'Title')) . '</h5> <div class="song-info">' . item('Dublin Core', 'Date') . ', ' . item('Dublin Core', 'Creator' ) . '</div> <div class="song-description">' . item('Dublin Core', 'Description', array('snippet'=>250)) . '</div> </div>';    
            }
        } ?>
        </div><!-- end related-songs -->
        
        <div id="more-ideas">
        </div>
    </div>


    <?php echo plugin_append_to_items_show(); ?>

   
</div><!-- end content-wrap -->

<?php foot(); ?>
