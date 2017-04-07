<?php get_header(); ?>
 <!--  with click on serach button this search page pop up-->

<?php get_search_form(); ?>

    <div class="container">

      <div class="row">
      
        
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
        <div class="col-md-8 blog">
          <div class="row">
          <?php
          $blogposts = new WP_Query("post_type=post&posts_per_page=3");
          if ($blogposts->have_posts()) {
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
              ?>
                <div class="col-md-4">
                <h2><?php the_title(); ?></h2>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
              <?php
            }
          }
          ?>

          </div>
        
        </div>

       <div class="col-md-3">
          
        
       </div>
     </div>
    </div>

    
  
<?php
get_footer();
?>




















