
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script>
        	$(".faa-icon").click(function (){
    	if ($(".m-coll").height() == 0) {
           $(".m-coll").animate({height: "300px"});
           $(".colm").animate.css("color", "black");
           }
        else if ($(".m-coll").height() == 300) {
           $(".m-coll").animate({height: "0px"});
           $(".colm").animate.css("color", "white");
           }
        });
        
        </script>
        <script>
        		$(".menu-collapsed").click(function() {
 					$(this).toggleClass("menu-expanded");
				});
        </script>
        <script>	
            $('#main').isotope({
  				itemSelector: '.item',
  				layoutMode: 'masonry'
			});
                       
$('.iso-nav ul li').click(function(){
    var selector = $(this).attr('data-filter');
  $('.iso-nav ul li').removeClass('active');
  $(this).addClass('active');
   
  $('#main').isotope({
    filter: selector,
  });
  return false;
});
            
           
            $('.fancybox').on('click', function() {
  				var visibleLinks = $('.fancybox:visible');
                $.fancybox.open( visibleLinks, {keyboard: true,
                arrows: true,
                toolbar: true,
				buttons: [
                    "download",	
                    "share",
                    "close"
                ]}, visibleLinks.index( this ) );
 			 	return false;
			});
            
            
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
