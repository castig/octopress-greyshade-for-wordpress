  <div class="posts">
     
        
    <div class="posts-container">
      <div id="content" class="inner">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">

          <div class="meta">
            <div class="date">
              <time><?php the_time('F jS, Y')?></time>
            </div>
            
            <span class="comments"><a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></span>  
          </div>

          <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          
          <span class="byline author vcard">Posted by <span class="fn"><?php the_author(' ');?></span></span>
          <?php edit_post_link(" (edit this post) " ); ?> 

            <?php the_content("Read On");?>
          
      </div>
      </article>

      <?php endwhile; ?>

      <?php comments_template(); ?>

      <div class="pagination">
           <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
           <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
      </div>
      
      <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      </div>
    </div><!-- .posts-container --> 

    <footer id="footer" class="inner"><p>
    Copyright &copy; 2013 - OneMonth -
    <span class="credit">Powered by <a href="http://wordpress.org">Wordpress</a></span>
    </p>

    Design credit: <a href="http://shashankmehta.in/archive/2012/greyshade.html">Shashank Mehta + One Month Rails</a></footer>


  </div><!-- .posts --> 

  
  