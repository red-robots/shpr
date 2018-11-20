jQuery(document).ready(function($){

// front page slider 
	// $('.flexslider').flexslider({
 //     animation: "slide"
 //  });


$(".rslides").responsiveSlides({
  pager: true,           
  nav: false,
  speed: 800,
  timeout: 6000,  
  auto: true
});


// splash page hovers 

$('#mhpc').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#mhpc').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});
$('#smat').mouseenter(function() {
   $(this).animate({marginTop : '0px'}, 'fast');
});
$('#smat').mouseleave(function() {
   $(this).animate({marginTop : '5px'}, 'fast');
});



// Equal heights divs
	$('.blocks').matchHeight();

        
		// map
		$('#location-map area').each(function() {
            var id = $(this).attr('id');
            $(this).mouseover(function() {
                $('#overlay'+id).show();

            });

            $(this).mouseout(function() {
                var id = $(this).attr('id');
                $('#overlay'+id).hide();
            });

        });
		
	/*	
		$('a#burke').mouseenter(function() {
    			$(this).css({'display' : "none"});
		});
		
		
		$('li').click(function() {
	
		$(this).addClass('needred');
	});
	*/
	
	
	
	
	// colorbox	
	$(".inline").colorbox({inline:true, width:"50%"});
	
	
	
	$('#map').mapster({
    fillOpacity: 0.5,
    render_highlight: {
        fillColor: 'ffffff',
        stroke: false,
        //altImage: 'examples/images/usa_map_720_alt_4.jpg'
    }});
	
	
$('#countyburke').mouseover(function(e) {
$('#burke').mouseover();
}).mouseout(function(e) {
$('#burke').mouseout();
 }).click(function(e) { e.preventDefault(); });

	


	
// this is dfor the isotope jquery for the blog roll
  // we load it int eh alpha container and spit it out in the beta container
  var $alpha = $('#alpha');
  var $container = $('#beta');
  var $checkboxes = $('#filters input');
  
  // init isotope, then insert all items from hidden #alpha
 
 
  $container.isotope({
  	itemSelector: '.blog-square',
	  masonry: {
  			//columnWidth: 310
		},
		filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
  })
  
  .isotope( 'insert', $alpha.find('.blog-square') );
  
  $('.filter a').click(function(){
        $('.filter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
			
/*	$container.append(divs).isotope('appended', divs, function () {
    $container.isotope('reLayout');
	});	*/

	

	
/*		Equal Height Divs
_____________________________________
*/

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;

 $('.blocks').each(function() {

   $el = $(this);
   topPostion = $el.position().top;
   
   if (currentRowStart != topPostion) {

     // we just came to a new row.  Set all the heights on the completed row
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }

     // set the variables for the new row
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);

   } else {

     // another div on the current row.  Add it to the list and check if it's taller
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

  }
   
  // do the last row
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
   
 });
	
 
  /* Accordion */
  $(document).on("click","#list_classes .panel_title",function(){
    $(this).next().slideToggle('slow');
    $(this).parents(".class-info").toggleClass('open');
  });

  $(document).on("click","#mobile-menu",function(){
    $(this).toggleClass('open');
    $('.main-navigation').toggleClass('open');
  });

}); // end of on window load function.