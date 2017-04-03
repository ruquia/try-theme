
 <article class="page">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-10 offset-md-1">
			 	<header>
			 		<h1 class="the_title"><?php the_title(); ?> </h1>
			 	</header>
			 </div>
		</div>
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

 	<div class="container">

      <div class="row">
        <div class="col-md-10 offset-md-1 blog">
          <div class="row">
          <?php
          $blogposts = new WP_Query("post_type=post&posts_per_page=3");
          if ($blogposts->have_posts()) {
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
              ?>
                <div class="col-md-4 blog-post">
                  <h2><?php the_title(); ?></h2>
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


 </article>