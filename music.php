<?php 
	include 'header.php';
?>
<style type="text/css">
#playlist, audio {
    background: #9f9f9f;
    /* width: 400px; */
    height: 54px;
    /* padding-top: 30px !important; */
    padding: 0 12px 12px 12px;
    margin: 0.5rem 0;
}
#playlist{
	padding: 0px;
	height: auto !important;
	background: transparent;
}
#playlist li.active,
#playlist li:hover{
	background: #5b5b5b;
	color: #fff;
}
#playlist li.active a,
#playlist li:hover a{
	color: #fff;

}
#playlist li{
	position: relative;
	color: #fff;
	margin-top: 0.5rem;
	background: #9f9f9f;
}
#playlist li a p{
	padding: 0 1.5rem 0 0.5rem ;
	margin: 0 1rem 0 0;
	float: left;
	margin: 0;
}
#playlist li a:before{
	content: '';
	position: absolute;
	left: 35px;
	top: 0;
	width: 3px;
	height: 100%;
	background: #fff;

}
#playlist li a{
	padding: 0.5rem;
	color: #000;
	display: block;
}
/*.active a{color:#5DB0E6;text-decoration:none;}*/
/*li a{color:#eeeedd;background:#333;padding:5px;display:block;}*/
/*li a:hover{text-decoration:none;}*/

</style>

<section id="photos" class="row">
	<div class="container">
		<div class="titulo">
			<h1>MUSIC</h1>
		</div>
		<div class="photos music">
			<div class="col s12 l4 m6">
				<a class="fancybox" rel="group" href="img/foto.jpg">
					<img src="img/foto.jpg">
				</a>
				<p><b>Release date:</b> 03/11/2016</p>
			</div>
			<div class="col s12 l8 m6">
				<div class="titulo">
					<h1>INSOMNIO</h1>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="music">
				      <!-- <div class="audio-player">
				        <h2>The Good Lawdz - Evidence Song</h2>
				        <audio id="audio-player" src="img/musica.mp3" type="audio/mp3" controls="controls"></audio>
				      </div> -->
				       	<audio id="audio" preload="auto"  controls="" type="audio/mpeg">
					        <source type="audio/mp3" src="http://www.archive.org/download/bolero_69/Bolero.mp3">
					        Disculpa, Tu navegador no soporta audio html5.
					    </audio>
					    <ul id="playlist">
					        <li class="active"><a href="http://www.archive.org/download/bolero_69/Bolero.mp3">
					        <p>1</p> Ravel Bolero</a></li>
					        <li><a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3">
					        <p>2</p> Moonlight Sonata - Beethoven</a></li>
					        <li><a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3">
					        <p>3</p> Canon in D Pachabel</a></li>
					        <li><a href="http://www.archive.org/download/PatrikbkarlChamberSymph/PatrikbkarlChamberSymph_vbr_mp3.zip">
					        <p>4</p> patrikbkarl chamber symph</a></li>

					    </ul>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut la qui officia deserunt mollit anim id est laborum.</p>
				<h2>Avaible to download</h2>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/0.png"></p>
				</div>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/1.png"></p>
				</div>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/2.png"></p>
				</div>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/3.png"></p>
				</div>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/4.png"></p>
				</div>
				<div class="col l2 s4 m4">
					<p><img src="img/disqueteras/5.png"></p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php 
	include 'footer.php';
?>

<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>

<script >
 
var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    audio[0].volume = .50;
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
    	console.log('etique a'+current);
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}
</script>
 