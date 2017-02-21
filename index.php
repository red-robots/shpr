<?php
/**
 * The main template file.
 */

get_header(); ?>


            
            
            <div class="page-content-home">

				
               
               <div id="site-choice-description">
			   		<?php the_field('intro_to_website_text', 'option') ?>
               </div><!-- site choice-decsription -->
               
               
               <div id="mhpc">
               <a href="<?php bloginfo('url'); ?>/sehpc">
               	
                <div class="home-logo-mhpc">South Eastern Preparedness Coalition</div><!-- logo -->
                <div class="clear"></div>
                   <div class="entersite-mhpc">ENTER SITE</div><!-- entersite-mhpc -->
                  <div class="clear"></div>
                  
                   <div class="mhpc-description">
                   	<?php the_field('mhpc_synopsis', 'option'); ?>
                   </div><!-- mhpc description -->
                  
                   </a>
               </div><!-- mhpc -->
               
               <div id="smat">
               <a href="<?php bloginfo('url'); ?>/smat">
               
              		 <div class="home-logo-smat">SMAT</div><!-- logo -->
                     <div class="clear"></div>
                     <div class="entersite-smat">ENTER SITE</div><!-- entersite-mhpc -->
                     <div class="clear"></div>
                     
                   <div class="smat-description">
                   	<?php the_field('smat_synopsis', 'option'); ?>
                   </div><!-- smat description -->
                   
                     </a>
               </div><!-- smat -->
               
               <div class="clear"></div>
               
               
             <!--  <div id="sociallinks">
               	<ul>
                		<li class="facebook"><a target="_blank" href="<?php //the_field('facebook_link', 'option'); ?>">Like us on Facebook</a></li>
                      <li class="twitter"><a target="_blank" href="<?php //the_field('twitter_link', 'option'); ?>">Follow us on Twitter</a></li>
                     
                	</ul>
               </div> sociallinks -->
               
                
       	
            
            </div><!-- page-content -->
            

<?php get_footer(); ?>