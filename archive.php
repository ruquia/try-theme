<?php get_header(); 

?>


    <div class="container">

      <div class="row archive">
        <div class="col-md-3">
           <?php
            get_sidebar();
           ?>

         </div>
         
        
        <div class="col-md-8 col-md-offset-1 ">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();
                ?>
                  <article class="post">
                  <header>
                 
                  <h2> <a href="<?php the_permalink();?>" title="permalink to this post"><?php the_title(); ?></a></h2>
                  </header>
                  <?php
                  // check if the post or image has a featured image assigned
                       if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                      }
                  ?>
                  <div class="post-meta">
                     Author: <?php the_author();?> | created: <?php the_date();?>
                  </div>
                    <main class="the_content">
                      <?php the_excerpt(); ?>
                      
                    </main>
                  
                    
                  </article>
                <?php
              }

            }else{
              //inget innehåll finns
              _e("sorry, couldnt find any posts for you :(","try");
            }
          ?>

       </div>
       
     </div>
    </div>
<?php
get_footer();
?>