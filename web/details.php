
<?php $current_page="expo-details"; include_once('header.php'); ?>

<?php 
	$name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'none'; 
?>

<!--expo-details-->
<div class="expo-details">
	<div class="container">

		 	<div class="expo-details-grid" id="bio">
				<h3 id="bio-name"></h3>
				<h5 id="bio-institution"></h5>
				<div class="expo-details-info" id="bio-information"></div>
				<div class="expo-details-img"> 
					<img id="bio-image" class ="img-thumbnail" src="" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="expo-details-grid" id="talk">
				<h3 id="talk-title"></h3>
				<h5 id="talk-date"></h5>
				<div class="expo-details-talk" id="talk-information"> 	</div>
			</div>
	</div>
</div>
<!--//expo-details-->
<div class="container">
	<h3 id="expositores_title"> </h3>
</div>
<div id="owl-speaker" class="owl-carousel owl-theme">

</div>
 
<?php
	echo "
	
		
	<script>
		
	

  $(document).ready(function() {
 	createSpekerInformation('$name', '$language');
  createSpeakersCarrousel('$language');
  var owl = $('#owl-speaker');
 
  owl.owlCarousel({
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,6], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,5], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
 /* // Custom Navigation Events
  $('.next').click(function(){
    owl.trigger('owl.next');
  })
  $('.prev').click(function(){
    owl.trigger('owl.prev');
  })
  $('.play').click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $('.stop').click(function(){
    owl.trigger('owl.stop');
  })
*/
  owl.trigger('owl.play',2500);
  
});
</script>

";
?>

<?php include_once('footer.php'); ?>