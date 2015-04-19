// Speed of the automatic slideshow
var slideshowSpeed = 6000;

// Variable to store the images we need to set as background
// which also includes some text and url's.
var photos = 
[ 
	{
		"image" : "./images/banner.jpg",
		"firstline" : "<h4>1<sup>er</sup> Congreso de Robótica y Neurociencia</h4><p>CRoNe es un punto de encuentro para estudiantes de pregrado y postgrado, junto con algunos de los expertos mundiales en Robótica y Neurociencia. Este evento tomará lugar del 21 al 23 de Octubre, en la UTFSM. Revisa esta web para mantenerte actualizado acerca de nuestros expositores invitados.</p>"
	}
];

$(
	function() 
	{
		// Se comienza con una imagen y un texto:
		$("#bannerImg1").attr( "src", photos[ 0 ].image );
		$("#textoBanner").html(photos[ 0 ].firstline);

		var interval;
		/*
		// Backwards navigation
		$("#back").click(
			function() {
				stopAnimation();
				navigate("back");
			}
		);
		
		// Forward navigation
		$("#next").click(
			function() {
				stopAnimation();
				navigate("next");
			}
		);
		
		
		$("#control").toggle(
			function(){
				stopAnimation();
			}, 
			function()
			{
				// Change the background image to "pause"
				$(this).css({ "background-image" : "url(img/carrusel/pausa.png)" });
				
				// Show the next image
				navigate("next");
				
				// Start playing the animation
				interval = setInterval(
					function() 
					{
						navigate("next");
					}, 
					slideshowSpeed
				);
			}
		);
		*/
		
		var activeContainer = 1;	
		var currentImg = 0;
		var animating = false;

		var navigate = function( direction )
		{
			// Check if no animation is running. If it is, prevent the action
			/*if( animating )
			{
				return;
			}*/
			
			// Check which current image we need to show
			if( direction == "next" )
			{
				currentImg++;
				if( currentImg == photos.length + 1 )
				{
					currentImg = 1;
				}
			} 
			else 
			{
				currentImg--;
				if( currentImg == 0 )
				{
					currentImg = photos.length;
				}
			}
					
			showImage( photos[ currentImg - 1 ]);
		};
		
		var currentZindex = -1;
		var showImage = function(photoObject) 
		{
			animating = true;
			
			// Make sure the new container is always on the background
			currentZindex--;
			
			// Set the background image of the new active container
			$("#bannerImg1").css(
			{
				"z-index" : currentZindex
			});
			$("#bannerImg1").attr( "src", photoObject.image );
			$("#bannerImg1").fadeOut(400, 
				function()
				{
					$("#bannerImg1" ).fadeIn(400);
					$("#textoBanner").fadeOut(1000, 
						function(){
							$("#textoBanner").fadeIn(1000);
							$("#textoBanner").html(photoObject.firstline);
						});
				});
			// Set the new header text
		};
		
		var stopAnimation = function() 
		{
			// Change the background image to "play"
			$("#control").css({ "background-image" : "url(img/carrusel/play.png)" });
			// Clear the interval
			clearInterval(interval);
		};
		
		
		// Start playing the animation
		interval = setInterval(
			function() {
				navigate("next");
			},
			slideshowSpeed
		);
	}
);