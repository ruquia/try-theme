 <article class="post">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-10 offset-md-1">
			 	<header>
			 		<h1 class="the_title"><?php the_title(); ?> </h1>
			 	</header>
			 		<h4 class="the-meta">
			 			<span class="the-date"><?php the_date(); ?> </span>
			 			by <span class="the-author"><?php the_author() ?> </span>
			 		</h4>
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

 	


 </article>