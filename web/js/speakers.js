function loadXMLDoc(filename)
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else // code for IE5 and IE6
	{
		xhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}
	xhttp.open('GET',filename,false);
	xhttp.send();
	return xhttp.responseXML;
}


function createSpekerInformation(speaker, language){
	var speakerXML = loadXMLDoc('./speakers/'+ speaker + '.xml');
	var languageXML = speakerXML.getElementsByTagName(language)[0];

	var img = $(speakerXML.getElementsByTagName('img')[0]);
	var name = $(speakerXML.getElementsByTagName('name')[0]);
	var institution = $(languageXML.getElementsByTagName('institution')[0]);
	var information = $(languageXML.getElementsByTagName('information')[0]);
	var expositionDate = $(languageXML.getElementsByTagName('expositionDate')[0]);
	var titleTalk = $(languageXML.getElementsByTagName('titleTalk')[0]);
	var abstractTalk = $(languageXML.getElementsByTagName('abstractTalk')[0]);

	if ((Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0) ){ // si es safari
			$(document.getElementById('bio-name')).text( name.text() );
		$(document.getElementById('bio-institution')).text( institution.text() );
		$(document.getElementById('bio-information')).text( information.text() );
		$(document.getElementById('talk-title')).text( titleTalk.text() );
		$(document.getElementById('talk-date')).text( expositionDate.text() );
		$(document.getElementById('talk-information')).text( abstractTalk.text() );
		$(document.getElementById('bio-image')).attr('src',img.text());

	}
	else
	{
		$(document.getElementById('bio-name')).html( name.html() );
		$(document.getElementById('bio-institution')).html( institution.html() );
		$(document.getElementById('bio-information')).html( information.html() );
		$(document.getElementById('talk-title')).html( titleTalk.html() );
		$(document.getElementById('talk-date')).html( expositionDate.html() );
		$(document.getElementById('talk-information')).html( abstractTalk.html() );
		$(document.getElementById('bio-image')).attr('src',img.text());
	}

}


function createSpeakersGrid(language){
	var speakerIndexXML = loadXMLDoc('./speakers/index.xml');

	var grid = document.getElementById('expo');
	var div_1 = document.createElement('div');
	var title = document.createElement('h3');
	div_1.setAttribute('class','container');
	if(language == "es") {
		$(title).text('Expositores');
	}
	else {
		$(title).text('Speakers');
	}
	div_1.appendChild(title);

	for (var i = 0; i < speakerIndexXML.getElementsByTagName('speaker').length; i++) 
	{
		var speakerText = $(speakerIndexXML.getElementsByTagName('speaker')[i]).text();
		var spikerXML = loadXMLDoc('./speakers/'+speakerText+'.xml');
		var languageXML = spikerXML.getElementsByTagName(language)[0];
		var div_2 = document.createElement('div');
		div_2.setAttribute('class','expo-grids');
		var div_3 = document.createElement('div');
		div_3.setAttribute('class','expo-grids-info expo-top');
		var a_1 = document.createElement('a');
		a_1.setAttribute('href','details.php?name=' + speakerText+ '&language='+language);
		var img_1 = document.createElement('img');
		$(img_1).attr('src', $(spikerXML.getElementsByTagName('img')[0]).text() );

		var div_4 = document.createElement('div');
		div_4.setAttribute('class','caption caption-top');

		var h5_1 = document.createElement('h5');
		$(h5_1).text( $(spikerXML.getElementsByTagName('name')[0]).text() );

		var div_5 = document.createElement('div');
		div_5.setAttribute('class','caption caption-bottom');


		var h5_2 = document.createElement('h5');
		$(h5_2).text( $(languageXML.getElementsByTagName('institution')[0]).text() );

		a_1.appendChild(img_1);
		div_5.appendChild(h5_2);
		div_4.appendChild(h5_1);
		a_1.appendChild(div_4);
		a_1.appendChild(div_5);
		div_3.appendChild(a_1);
		div_2.appendChild(div_3);
		div_1.appendChild(div_2);
	};

	for (var i = 0; i < 8-speakerIndexXML.getElementsByTagName('speaker').length; i++) 
	{

		var div_2 = document.createElement('div');
		div_2.setAttribute('class','expo-grids');
		var div_3 = document.createElement('div');
		div_3.setAttribute('class','expo-grids-info expo-top');
		var a_1 = document.createElement('a');
		a_1.setAttribute('href','#');
		var img_1 = document.createElement('img');

		$(img_1).attr('src', 'images/expo-unknown.jpg' );

		var div_4 = document.createElement('div');
		div_4.setAttribute('class','caption caption-top');

		var h5_1 = document.createElement('h5');
		if(language == 'es'){
			$(h5_1).text( 'Por confirmar' );
		}
		else
		{
			$(h5_1).text( 'Soon' );
		}

		var div_5 = document.createElement('div');
		div_5.setAttribute('class','caption caption-bottom');


		var h5_2 = document.createElement('h5');
		$(h5_2).text( '-' );

		a_1.appendChild(img_1);
		div_5.appendChild(h5_2);
		div_4.appendChild(h5_1);
		div_3.appendChild(a_1);
		div_3.appendChild(div_4);
		div_3.appendChild(div_5);
		div_2.appendChild(div_3);
		div_1.appendChild(div_2);
	};
	
	grid.appendChild(div_1);
	var div_6 = document.createElement('div');
	div_6.setAttribute('class','clearfix');
	grid.appendChild(div_6);
}



function createBanner(language){
	var bannerIndexXML = loadXMLDoc('./banners/index.xml');
 var prueba = bannerIndexXML.getElementsByTagName('banner').length	
	for (var i = 0; i < bannerIndexXML.getElementsByTagName('banner').length; i++) 
	{
		var bannerName = $(bannerIndexXML.getElementsByTagName('banner')[i]).text();
		var banner = loadXMLDoc('./banners/'+bannerName+'.xml');

		var div_1 = document.createElement('div');
		div_1.setAttribute('class','item');

		var img_1 = document.createElement('img');
		$(img_1).attr('src', $(banner.getElementsByTagName('img')[0]).text() );


		var div_2 = document.createElement('div');
		div_2.setAttribute('class','banner-title');
		div_2.setAttribute('id',$(banner.getElementsByTagName('id')[0]).text());

		

		if(language == "es") 
		{
			if ((Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0) ){ // si es safari
				$(div_2).html( $(banner.getElementsByTagName('es')[0]).text()  );

			}
			else
			{
				$(div_2).html( $(banner.getElementsByTagName('es')[0]).html()  );
			}
			
		}
		else 
		{
			if ((Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0) ){ // si es safari
				$(div_2).html( $(banner.getElementsByTagName('en')[0]).text()  );

			}
			else
			{
				$(div_2).html( $(banner.getElementsByTagName('en')[0]).html()  );
			}
		}

		div_1.appendChild(div_2);
		div_1.appendChild(img_1);

		document.getElementById("owl-demo").appendChild(div_1);
	};
}




function createSpeakersCarrousel(language){
	var speakerIndexXML = loadXMLDoc('./speakers/index.xml');
	var raiz = document.getElementById('owl-speaker');
	var title = document.getElementById('expositores_title');
	$(title).text('Expositores');

	for (var i = 0; i < speakerIndexXML.getElementsByTagName('speaker').length; i++) 
	{
		var speakerText = $(speakerIndexXML.getElementsByTagName('speaker')[i]).text();
		var spikerXML = loadXMLDoc('./speakers/'+speakerText+'.xml');
		var languageXML = spikerXML.getElementsByTagName(language)[0];
		var div_2 = document.createElement('div');
		div_2.setAttribute('class','item');
		var div_3 = document.createElement('div');
		div_3.setAttribute('class','expo-grids-info expo-top');
		var a_1 = document.createElement('a');
		a_1.setAttribute('href','details.php?name=' + speakerText+ '&language='+language);
		var img_1 = document.createElement('img');
		$(img_1).attr('src', $(spikerXML.getElementsByTagName('img')[0]).text() );
		$(img_1).attr('height', '90%' );
		$(img_1).attr('width', '90%' );
		var div_4 = document.createElement('div');
		div_4.setAttribute('class','caption caption-top');
		var h5_1 = document.createElement('h5');
		$(h5_1).text( $(spikerXML.getElementsByTagName('name')[0]).text() );

		var div_5 = document.createElement('div');
		div_5.setAttribute('class','caption caption-bottom');

		var h5_2 = document.createElement('h5');
		$(h5_2).text( $(languageXML.getElementsByTagName('institution')[0]).text() );
		a_1.appendChild(img_1);
		div_5.appendChild(h5_2);
		div_4.appendChild(h5_1);
		a_1.appendChild(div_4);
		a_1.appendChild(div_5);
		div_3.appendChild(a_1);
		div_3.appendChild(div_5);
		div_2.appendChild(div_3);
		raiz.appendChild(div_2);
	};

	for (var i = 0; i < 8-speakerIndexXML.getElementsByTagName('speaker').length; i++) 
	{

		var div_2 = document.createElement('div');
		div_2.setAttribute('class','item');
		var div_3 = document.createElement('div');
		div_3.setAttribute('class','expo-grids-info expo-top');
		var img_1 = document.createElement('img');

		$(img_1).attr('src', 'images/expo-unknown.jpg' );
		$(img_1).attr('height', '90%' );
		$(img_1).attr('width', '90%' );
		var div_4 = document.createElement('div');
		div_4.setAttribute('class','caption caption-top');

		var h5_1 = document.createElement('h5');
		if(language == 'es'){
			$(h5_1).text( 'Por confirmar' );
		}
		else
		{
			$(h5_1).text( 'Soon' );
		}
		

		var div_5 = document.createElement('div');
		div_5.setAttribute('class','caption caption-bottom');


		var h5_2 = document.createElement('h5');
		$(h5_2).text( '-' );

		
		div_5.appendChild(h5_2);
		div_4.appendChild(h5_1);
		div_3.appendChild(img_1);
		div_3.appendChild(div_4);
		div_3.appendChild(div_5);
		div_2.appendChild(div_3);
		raiz.appendChild(div_2);
	};
	
}