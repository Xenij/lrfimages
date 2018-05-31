
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script>
        $('.main-iso').isotope({
  itemSelector: '.item',
  layoutMode: 'fitRows'
});

$(".main-iso").isotope({
    itemSelector: ".grid-item",
    masonry: {
      columnWidth: 100
    }
  });

$('.iso-nav ul li').click(function(){
  $('.iso-nav ul li').removeClass('active');
  $(this).addClass('active');
  
  var selector = $(this).attr('data-filter');
  $('.main-iso').isotope({
    filter: selector 
  });
  return false;
});
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
