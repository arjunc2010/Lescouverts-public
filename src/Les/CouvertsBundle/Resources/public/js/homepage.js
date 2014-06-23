	/*    -----------------------    mainOption-annimation     ----------------------------        */


	function mainOptionHover( index ){
		closeAllMainOption();
		var img = document.getElementsByClassName('mainOption-photo');	
		var popup = document.getElementsByClassName('mainOption-popup');
		//var style  = window.getComputedStyle(img1[index]);
		  img[index].style.display="none";
		  popup[index].style.display="inline-block";
	}

	function closeAllMainOption(){
		var img = document.getElementsByClassName('mainOption-photo');	
		var popup = document.getElementsByClassName('mainOption-popup');
		var style;
			for(var i=0 ; i<img.length ; i++ ){
				style = window.getComputedStyle(img[i]);
					if(style.getPropertyValue('Display') == 'none'){
							popup[i].style.display = 'none';
							img[i].style.display = 'inline-block';
					}
			}		
	}



	/*    -----------------------    Our-Chef-Gallery     ----------------------------        */

	function viewChef( id ){
			var chefs = document.getElementsByClassName('chef-photo');
			var chef = chefs[id];
			if( existGallery() ){
				changeGalleryImage(chef);
			}else{
				createGallery(chef);
			}
	}

	function existGallery(){
		var gallery = document.getElementById('popup-gallery');
			if(gallery == null){
				return false;
			}else{
				return true;
			}
	}

	function createGallery( img ){
		var container = document.getElementById("ourchef-container");
		var path = img.src;
			var gallery = document.createElement("div");
				gallery.id = "popup-gallery";
			var img = document.createElement("img");
				img.src = path;
				img.className = "popup-image";
				gallery.appendChild(img);
			container.appendChild(gallery);

	   }

	function changeGalleryImage( img ){
		var gallery = document.getElementById('popup-gallery');
		   var childNodes = gallery.childNodes;
		   	  childNodes[0].src = img.src;
	}