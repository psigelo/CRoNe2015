
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
 <!--  <div class="item"> <a href="details.php?name=jens_kober&language=es" > <img src="images/expo-jens-kober.jpg" width="90%" height="90%" /> </a></div>


  <div class="item">
  					
						<div class="expo-grids-info expo-top" >
							<a href="details.php?name=jens_kober&language=es"><img src="images/expo-jens-kober.jpg"  width="90%" height="90%" alt=""/></a>
							<div class="caption caption-top">
								<h5>Jens Kober</h5>
							</div>
							<div class="caption caption-bottom">
								<h5>Delft Center for Systems and Control</br>TU Delft, The Netherlands</h5>
							</div>
						</div>
					
  </div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
  <div class="item"><h1>7</h1></div>
  <div class="item"><h1>8</h1></div> -->
</div>
 
<!-- <div class="customNavigation">
  <a class="btn prev">Previous</a>
  <a class="btn next">Next</a>
  <a class="btn play">Autoplay</a>
  <a class="btn stop">Stop</a>
</div> -->


<?php include_once('footer.php'); ?>

<?php
	echo "
	<script>
		createSpekerInformation('$name', '$language');
		createSpeakersCarrousel();
	</script>
		
	"
?>

<script>
  $(document).ready(function() {
 
  var owl = $("#owl-speaker");
 
  owl.owlCarousel({
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
 /* // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
*/
  owl.trigger('owl.play',2500);
});
</script>