<?php get_header(); ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Single<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                     /
                     <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail() ?>
               </div>

               <div class="post-content">
                  <?php the_post() ?>
                  <?php the_content () ?>

               </div>

            </article> <!-- post end -->


            <!-- Pagination -->
            <nav class="col full pagination">
  			      <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
  				      <li><span class="page-numbers current">1</span></li>
  				      <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
  				      <li><a href="#" class="page-numbers next">Next</a></li>
  			      </ul>
  		      </nav>

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

            <?php get_sidebar(); ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->


<?php get_footer(); ?>