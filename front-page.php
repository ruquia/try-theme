<?php get_header(); 

?>
  <article class="page with-featured-image">
     <div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('page-featured-image'); ?>);">
      
     </div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <main class="the_content">
              <?php the_content(); ?>
            
            </main>
          </div>
        </div>
      </div>  
  </article>

  <div class="container main-content">
     <div class="row">
        <div class="col-md-1">
          
        </div>
        
        <div class="col-md-8 col-md-offset-1">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();
                ?>
                  <article class="post">
                  <header>
                  <h1 class="the_title"><?php the_title(); ?> </h1>
                  </header>
                    <main class="the_content">
                      <?php the_content(); ?>
                      
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
       <div class="col-md-3">
         <?php
         get_sidebar();
         ?>

       </div>
     </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-1">
          
        </div>
        <div class="col-md-8 ">
          <div class="blog">
              <div class="row">
              
              <?php
              $blogposts = new WP_Query("post_type=post&posts_per_page=3");
              if ($blogposts->have_posts()) {
                while ($blogposts->have_posts()) {
                  $blogposts->the_post();
                  ?>
                    <div class="col-md-4 container-border">
                      <h2> 
                        <a href="<?php the_permalink();?>" title="permalink to this post"><?php the_title(); ?>
                        </a>
                      </h2>
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <?php
                }
              }
              ?>

              </div>
            </div>
        </div>

       <div class="col-md-3">
       <?php get_sidebar();?>
          
        
       </div>
     </div>
    </div>

    
  
<?php
get_footer();
?>