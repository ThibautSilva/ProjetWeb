<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<title>PlayListen</title>
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
        function playPlaylist(choix){
            var lecteur = document.getElementById('myaudio');
            var titleHtml = document.getElementById('titre');
            var listeTrack = document.getElementById('playlistul');
            var position;
            if(choix == "back"){
                position--;
            }else{ 
                if(choix == "next"){
                    position++;
                }else{
                    position = 0;
                }
            }
            if(position > listeTrack.length){
                position =0;
            }
            var title =listeTrack[position].getAttribute("title");
            var url =listeTrack[position].getAttribute("url");
            lecteur.src = url;
            titleHtml.textContent = title;
            lecteur.play();
        }
        function repeat(){
            var lecteur = document.getElementById('myaudio');
            var buttonrep = document.getElementById('repeat');
            if (lecteur.loop == false){
                lecteur.loop = true;
                buttonrep.textContent = "No repeat";
            }else{
                lecteur.loop = false;
                buttonrep.textContent = "Repeat";
            }
        }
    </script>
  </head>
  
  <body>
    <p id="titre"></p>
    <audio id="myaudio" controls>
      HTML5 non supporté
    </audio><br />
    <button id="repeat" onClick="repeat()">Repeat</button>
    <button id="back" onClick="playPlaylist('back')">Back</button>
    <button id="next" onClick="playPlaylist('next')">Next</button>
		</div>	
	</body>
</html>