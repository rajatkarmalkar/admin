<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/rajatkarmalkar
 * @since      1.0.0
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php wp_enqueue_media(); 
wp_enqueue_script( 'media-gallery' );
wp_enqueue_script( 'wp-ajax-response' );
wp_enqueue_script( 'plupload-handlers' );
?>

<div class="container">
  
  <form action="javascript:void(0)" class="" id="form-add-to-pdf-manager" enctype="multipart/form-data">      
  <table class="table">
    <tbody>
      <tr>
    
         <td> <input type="submit"  value="upload pdf" name="pdf"  id="pdfcatcher" ></td> 
      </tr>
    
     
    </tbody>
  </table>
</form>

<table class="table">

  <ul>
   <?php query_posts('post_type=attachment&post_mime_type=application/pdf'); ?>
 
   <?php while (have_posts()) :  the_post();  ?>
     <li><?php the_content() ?></li>
<?php   endwhile; ?>
</ul>


<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
 
 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'orderby' => 'DESC',
  // 'post_mime_type' => 'application/pdf',
   'post_parent' => $post->ID
  );
 
  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<li>';
           echo wp_get_attachment_image( $attachment->ID, 'full' );
           echo '<p>';
           echo apply_filters( 'the_title', $attachment->post_title );
           echo '</p></li>';
          }
     }
 
 endwhile; endif; ?>
</ul>

<div class="attachments-wrapper">
<ul tabindex="-1" class="attachments ui-sortable ui-sortable-disabled" id="__attachments-view-47">
<?php 
global $args;
query_posts($args); ?>
    <?php while (have_posts()) : the_post(); ?>
       <?php
        // https://codex.wordpress.org/Function_Reference/get_allowed_mime_types
        $unsupported_mimes  = array('image/jpeg', 'image/gif', 'image/png', 'image/bmp', 'image/tiff', 'image/x-icon', 'application/pdf', 'video/mp4');
        $all_mimes          = get_allowed_mime_types();
        $accepted_mimes     = array_diff($all_mimes, $unsupported_mimes);
 
        $args = array(
            'post_mime_type'    => 'application/pdf',
            'order'          => 'ASC',
            'orderby'          => 'date',
            'order' => 'DESC',
            'post_type'      => 'attachment',
            /* 
              'post_parent'    => $post->ID,
              'date_query'     => array(
                'year'  => 2016,
                'before' => array(
               'year'  => 2018,
              'month' => 1,
              'day'   => 1,
             ),
             ), 
            */       
            //'post_status'    => null,
            'numberposts'    => -1,
        );
        $attachments = get_posts($args);
        if ($attachments) {
            foreach ($attachments as $attachment) { ?>
               <li tabindex="0" role="checkbox" aria-label="rajat-karmalkar-resume (1)" aria-checked="false" data-id="6" class="attachment save-ready">
                <div class="attachment-preview js--select-attachment type-application subtype-pdf landscape">
      <div class="thumbnail">
        
          <div class="centered">
            
              <img src="http://localhost/bitwise-academy/wp-includes/images/media/document.png" class="icon" draggable="false" alt="">
              </div>
          <div class="filename">
            <div><?php echo get_the_title($attachment->ID); ?></div>
          </div>
                <?php
             //   echo wp_get_attachment_url($attachment->ID);
              //  echo "<br>";
                ?>

              </li>
 <?php  
            }
        }
        ?>

    <?php endwhile; ?>
</ul>
</div>