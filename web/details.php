
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

<div class="expo" id="expo"></div>

<?php include_once('footer.php'); ?>

<?php
	echo "
	<script>
		createSpekerInformation('$name', '$language');
		createSpeakersGrid();
	</script>
		
	"
?>