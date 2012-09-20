<?php head(array('title' => html_escape(exhibit('title') . ' : '. exhibit_page('title')), 'bodyid'=>'exhibit','bodyclass'=>html_escape(exhibit('title')) . ' show')); ?>
<div id="primary" class="container_12">
        
        <?php exhibit_builder_render_exhibit_page(); ?>


</div><!-- end primary -->

<?php foot(); ?>