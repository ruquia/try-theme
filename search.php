<?php get_header(); 

?>


    <div class="container">
      <div class="search">

        <div class="row">
        
          
          <div class="col-md-8 col-md-offset-1">


            <h1>Search Results</h1>

            <?php get_search_form(); ?>

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
                _e("Sorry, couldnt find anything matching that search query :(","try");
              }
            ?>

         </div>
         <div class="col-md-3">
           <?php
           dynamic_sidebar('info-sidebar');
           ?>

         </div>
       </div>
      </div>
    </div>
<?php
get_footer();
?>




















