<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<title>Site de Musique</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
</head>
	</body>
		<div id="playing_zone">
		<script type="text/javascript">
        // Global variable to track current file name.
        var currentFile = "";
        function playAudio(url,title) {
            if (window.HTMLAudioElement) {
                try {
                    var lecteur = document.getElementById('myaudio');
                    var titleHtml = document.getElementById('titre');
                    lecteur.src = url;
                    titleHtml.textContent = title;
                    lecteur.play();
                }
                catch (e) {
                }
            }
        }
        function playPlaylist(){

        }
        function back(){
        	
        }
        function next(){

        }
    </script>
  </head>
  
  <body>
    <p id="titre"></p>
    <audio id="myaudio" controls>
      HTML5 non supporté
    </audio><br />
    <button id="back" onClick="back()">Back</button>
    <button id="next" onClick="next()">Next</button>
		</div>	
	</body>
</html>