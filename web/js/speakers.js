function loadXMLDoc(filename)
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else // code for IE5 and IE6
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",filename,false);
	xhttp.send();
	return xhttp.responseXML;
} 


function createSpekerInformation(speaker, language){
	var speakerXML = loadXMLDoc("./speakers/"+ speaker + ".xml");
	var languageXML = speakerXML.getElementsByTagName(language)[0];

	var img = $(speakerXML.getElementsByTagName("img")[0]);
	var name = $(speakerXML.getElementsByTagName('name')[0]);
	var institution = $(languageXML.getElementsByTagName('institution')[0]);
	var information = $(languageXML.getElementsByTagName('information')[0]);
	var expositionDate = $(languageXML.getElementsByTagName('expositionDate')[0]);
	var titleTalk = $(languageXML.getElementsByTagName('titleTalk')[0]);
	var abstractTalk = $(languageXML.getElementsByTagName('abstractTalk')[0]);

	$(document.getElementById("bio-name")).html( name.html() );
	$(document.getElementById("bio-institution")).html( institution.html() );
	$(document.getElementById("bio-information")).html( information.html() );
	$(document.getElementById("talk-title")).html( titleTalk.html() );
	$(document.getElementById("talk-date")).html( expositionDate.html() );
	$(document.getElementById("talk-information")).html( abstractTalk.html() );
	$(document.getElementById("bio-image")).attr('src',img.text());
}


function createSpeakersGrid(){
	var language = "es";
	var speakerIndexXML = loadXMLDoc("./speakers/index.xml");

	var grid = document.getElementById("expo");
	var div_1 = document.createElement('div');
	var title = document.createElement('h3');
	div_1.setAttribute('class','container');
	$(title).html("Expositores");
	div_1.appendChild(title);

	for (var i = 0; i < speakerIndexXML.getElementsByTagName("speaker").length; i++) 
	{
		var speakerText = $(speakerIndexXML.getElementsByTagName("speaker")[i]).html();
		var spikerXML = loadXMLDoc("./speakers/"+speakerText+".xml");
		var languageXML = spikerXML.getElementsByTagName(language)[0];
		var div_2 = document.createElement('div');
		div_2.setAttribute('class','expo-grids');
		var div_3 = document.createElement('div');
		div_3.setAttribute('class','expo-grids-info expo-top');
		var a_1 = document.createElement('a');
		a_1.setAttribute('href','details.php?name=' + speakerText+ '&language=es');
		var img_1 = document.createElement('img');

		$(img_1).attr('src', $(spikerXML.getElementsByTagName("img")[0]).text() );

		var div_4 = document.createElement('div');
		div_4.setAttribute('class','caption caption-top');

		var h5_1 = document.createElement('h5');
		$(h5_1).html( $(spikerXML.getElementsByTagName("name")[0]).text() );

		var div_5 = document.createElement('div');
		div_5.setAttribute('class','caption caption-bottom');


		var h5_2 = document.createElement('h5');
		$(h5_2).html( $(languageXML.getElementsByTagName("institution")[0]).text() );

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