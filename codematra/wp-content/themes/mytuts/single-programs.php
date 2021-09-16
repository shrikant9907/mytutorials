<?php get_header();

$programsPath = get_template_directory().'/tutscodes/programs/';
$term_taxonomy = 'programs-category';
$term_obj_list = get_the_terms( $post->ID, $term_taxonomy );
$term_id = $term_obj_list['0']->term_id;
$term_name = $term_obj_list['0']->name;
$term_slug = $term_obj_list['0']->slug;

if ($term_obj_list['1'] && ($term_slug == 'how-to')) {
    $term_name = $term_obj_list['1']->name;    
    $term_id = $term_obj_list['1']->term_id;    
}

if ($term_obj_list['1'] && ($term_obj_list['1']->slug == 'how-to')) {
    $term_slug = $term_obj_list['1']->slug;
}
?>  

<div class="single-page bg-light common-section-ui pt_70">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <?php get_sidebar('programs'); ?>
      </div>
    
      <div class="col-12 col-sm-6 col-md-8">
      <?php  
          if(have_posts()): 
              while(have_posts()): the_post();  
      ?>
        <div class="card cui2 noshadow r_0 w-100 typography">
          <div class="card-body pri_30 pli_30 pbi_30">
            <h1 class='text-primary'><?php the_title(); ?></h1>
              <?php $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ;  ?>
              <?php if(has_post_thumbnail()) { ?>
                <img class="card-img-top r_0 border mb_20" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
              <?php } else { ?>
                <img class="card-img-top r_0 border mb_20" src="https://picsum.photos/300/150" alt="" />
              <?php } ?>
            <div class="text-dark px_5 py_5 mb_10 f14 d-flex justify-content-between">
              <span><i class="fa fa-user mr_5 text-primary" aria-hidden="true"></i> <?php the_author_meta('user_nicename',$post->post_author); ?></span>
               
              <?php
              $categories = get_the_terms(get_the_ID(), 'programs-category');
              $separator = ' ';
              $output = '';
              if ( ! empty( $categories ) ) {
                  echo '<span><i class="fa fa-tag mr_5 text-primary" aria-hidden="true"></i>';
                  foreach( $categories as $category ) {
                      $output .= '<a class="text-dark" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'mycourse' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                  }
                  echo trim( $output, $separator );
              }

              ?></span> 
              <span><i class="fa fa-clock mr_5 text-primary" aria-hidden="true"></i> <?php //echo get_the_date(); ?> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ); ?></span>
            </div>
            <div class="f16">
              <?php the_content(); ?>
              
          </div>
          </div>
        </div>      
        <?php  
                            endwhile; 
                            endif; 
                      ?>  
        <div class="single_posts_nav d-flex justify-content-between">
            <?php
            $prev_post = get_previous_post();
            if (!empty( $prev_post )): ?>
                <div class='article-prev'>
                <a class="btn btn-primary rounded-0 px_25 mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">Previous: <?php //echo esc_attr( $prev_post->post_title ); ?></a>
            </div>
            <?php endif ?>

            <?php
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
            <div class='article-nextpost'>
                <a class="btn btn-primary rounded-0 px_25 mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">Next: <?php //echo esc_attr( $next_post->post_title ); ?></a>
            </div>
            <?php endif; ?>
        </div>
                            
      </div>
     </div>
  </div>
</div>
       
<?php get_footer(); 