// Variables to save the previous sorting
var sort = 0;
var NAME = 1;
var RATING = 2;
var NAME_INVERTED = 3;
var RATING_INVERTED = 4;

function loadJSONDoc(param){
    // Check cache
	// TODO
	
	// Check hash
	// TODO

    // Create XMLHttpRequest object (Check browser)
	var xmlhttp;
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else{
		// code for IE5 and IE6
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	 
	// Things to do when a response arrives
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			// Parse the response
			var resp = JSON.parse(xmlhttp.responseText);

			// Get the table
			table = document.getElementById("tracksTable");
			
			console.log(table);
			
			// Empty the table (without removing the <th> cells)
			tbody = table.children[0];
			while(tbody.children.length > 1){
			  tbody.removeChild(tbody.children[tbody.children.length - 1]);
			}

			// Put the new content
			insert(resp);
		}
		
	};

	// URL for the Ajax call
	var url = "http://localhost/projects/Projet/PHP/artists.php";
	
	// + sort by name
	if (param == "name"){
	  //Inverted
	  if (sort == NAME){
        url += "?sort=name&inverted=true";
		sort = NAME_INVERTED;
	  }
	  // Not inverted
	  else{
	    url += "?sort=name";	  
		sort = NAME;
	  }
	}	
	// Ajax call
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

/**
 * Insert the specified content (array of tracks) in the tracks table
 */
function insert(content){
  var artists = content.artists;
  for (var i = 0; i < artists.length; i++){
	var tr = document.createElement("tr");
	tbody.appendChild(tr);
	
	// Image
	var tdImage = document.createElement("td");
	tdImage.className = "imageCell";
	tr.appendChild(tdImage);
	var img = document.createElement("img");
	img.setAttribute('src', artists[i].image_url);
	img.setAttribute('alt', 'poster');
	img.className = "imageCell";
	tdImage.appendChild(img);
	
	//name
	var tdName = document.createElement("td");
	tr.appendChild(tdName);
	var nameTextNode = document.createTextNode(artists[i].name);
	tdName.appendChild(nameTextNode);
	
	//description
	var tdDescription = document.createElement("td");
	tr.appendChild(tdDescription);
	var nameTextNode = document.createTextNode(artists[i].info);
	tdDescription.appendChild(nameTextNode);
	
  }
}
