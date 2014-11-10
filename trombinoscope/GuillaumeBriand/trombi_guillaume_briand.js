		var ficSVG = "../../svg/trombi_guillaume_briand.svg";
		
		
		
	
		function load(){
		 	//charge l'IHM SVG
		 	chargeIHM();
		}

		//charge le svg
	    //merci � http://bl.ocks.org/KoGor/8162640
	    function chargeIHM(){
	    	queue()
	    		.defer(d3.xml, ficSVG, "image/svg+xml")
	    		.await(IHMcharge);
	    }
	    function IHMcharge(error, xml){
	    	//Adding our svg file to HTML document
			var importedNode = document.importNode(xml.documentElement, true);
			d3.select("#viz").node().appendChild(importedNode);	    	    	  	
			//correction du lien vers les images
			var arrImg = document.getElementsByTagName("image");
			for (var i = 0; i < arrImg.length; i++) {
			    var path = arrImg[i].getAttribute("xlink:href");
			    path = path.replace("../trombinoscope/GuillaumeBriand/", "");
			    arrImg[i].setAttribute("xlink:href",path);
			}
	    }		
	    
		// fonction pour ajouter un �couteur � UN �L�MENT
		// merci � https://developer.mozilla.org/fr/docs/DOM/element.addEventListener
		function ajoutelesevenementauxelements() { 
		     var el = document.getElementById("rect12259"); 
		     el.addEventListener("click", afficheDetailEtu, false); 
		   } 		
		
		/*
		 merci � http://www.commentcamarche.net/forum/affich-21135416-html-afficher-cacher-une-div-sur-clique-a
		 */
		function switchInfoPerso()
		{
			divInfo = document.getElementById('divacacher');
			if (divInfo.style.display == 'none')
				divInfo.style.display = 'block';
			else
				divInfo.style.display = 'none';
		}
		
		function afficheDetailEtu(){
			alert("OK");
			//var elemEtu = document.getElementById('g16893');
			
		}