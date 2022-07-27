<?php 

$tag_list = get_the_tag_list( '', ' ' );

      if ( $tag_list ) { ?>
      <div class="post-tag-container">
            <div class="tag-lists">
               <span><?php echo esc_html__( 'Tags: ', 'inzox' ) ?></span>
               <?php echo inzox_kses( $tag_list ); ?>
            </div>
      </div>
     <?php
   }