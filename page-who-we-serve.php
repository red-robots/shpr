<?php
/**
 * Template Name: Who We Serve
 */

get_header(); ?>

<div class="page-content clear">
  <div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="entry-content">

  <h1><?php the_title(); ?></h1>


  <?php the_content(); ?>


  <div id="states-container">

  <div class="map-words-container">
  <div class="map-words">
  <h3 class="counties">Agency by County</h3>
  <ul>

  <li><a class='inline' href="#bladen" alt="bladen">Bladen</a></li>
    <li><a class='inline' href="#pender" alt="pender" >Pender</a></li>
    <li><a class='inline' href="#columbus" alt="columbus" >Columbus</a></li>
    <li><a class='inline' href="#brunswick" alt="brunswick" >Brunswick</a></li>
     <li><a class='inline' href="#new-hanover" alt="new-hanover" >New Hanover</a></li>
      <li><a class='inline' href="#onslow" alt="onslow" >Onslow</a></li>
       <li><a class='inline' href="#duplin" alt="duplin" >Duplin</a></li>
    
  </ul>
  </div><!-- map words -->

  <!-- <div class="map-words">
  <ul>
  <li><a class='inline' href="#cabarrus" alt="cabarrus">Cabarrus</a></li>
    <li><a class='inline' href="#union" alt="union" >Union</a></li>
    <li><a class='inline' href="#stanly" alt="stanly" >Stanly</a></li>
    <li><a class='inline' href="#anson" alt="anson" >Anson</a></li>
    <li><a class='inline' href="#richmond" alt="richmond" >Richmond</a></li>
    <li><a class='inline' href="#scotland" alt="scotland" >Scotland</a></li>
   

  </ul>
  </div>  map words -->

  <!--<div class="clear"></div>
  <ul>
  <li>
  <a class='inline' href="#other-state-regional-partners" alt="other-state-regional-partners" >
      Other State Regional Partners
  </a>
  </li></ul>-->

  </div> <!-- map words container -->

  <div class="map-image">
  <!-- <img src="<?php bloginfo('template_url'); ?>/images/serac-map.png" usemap="#Map" id="map"/> -->
    <img src="<?php bloginfo('template_url'); ?>/images/shpr.png" usemap="#Map" id="map"/>
  <?php get_template_part('includes/map-cords'); ?>
  </div><!-- map image -->
  </div><!-- states container -->   

  </div><!-- entry-content -->

  <?php endwhile; // end of the loop. ?>

  <?php wp_reset_postdata(); ?>

  <div class="clear"></div>

  <?php get_template_part('includes/popups'); ?>

  <?php get_template_part('includes/table'); ?>

  </div><!-- container -->

</div><!-- page-content -->

<?php get_footer(); ?>