<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kay Ka Fet House</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/demo-styles.css">
	<link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" media="screen" href="../../demo-assets/css/demo-styles-ie.css" /><![endif]-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/sequencejs-theme.sliding-horizontal-parallax.css">
	<link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">
	<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	if (typeof jQuery == 'undefined'){
	    document.write(unescape("%3Cscript src=<?php echo base_url(); ?>js/jquery.js type='text/javascript'%3E%3C/script%3E"));
	}
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/sequence.jquery-min.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			var options = {
				autoPlay: false,
				autoPlayDirection: 1,
				nextButton: ".next",
				prevButton: ".prev",
				preloader: "#sequence-preloader",
				prependPreloader: false,
				prependPreloadingComplete: "#sequence-preloader, #slideshow",
				prependNextButton: false,
				prependPrevButton: false,
				pauseIcon: false,
				animateStartingFrameIn: false, 
				delayDuringOutInTransitions: false,
				afterPreload: function(){
					$(".prev, .next").fadeIn(500);
					if(!slideShow.transitionsSupported){
						$("#slideshow").animate({"opacity": "1"}, 1000);
					}
				}
			};
			var slideShow = $("#slideshow").sequence(options).data("sequence");
			if(!slideShow.transitionsSupported || slideShow.prefix == "-o-"){
				$("#slideshow").animate({"opacity": "1"}, 1000);
				slideShow.preloaderFallback();
			}
		})
	</script>
	
	<script type="text/javascript">
	
	</script>
</head>
<body data-twttr-rendered="true">
		<div id="demo-details" class="bottom">
	        <div id="demo-links" class="float-left">
	        	<ul>
	            	<li><h1>KFH v.1 2012 || designed by <a href="http://www.bemonkey.net">Be Monkey</a></h1></li>
	            </ul>
	        </div>
	    </div>
	<div id="header">
		<div id="sequence-preloader" class="preloading-complete">
			<div class="preloading">
				<img src="<?php echo base_url(); ?>images/sequence-preloader.png" alt="Sequence is loading, please wait...">
				<img src="<?php echo base_url(); ?>images/sequence-preloader.png" alt="Sequence is loading, please wait...">
				<img src="<?php echo base_url(); ?>images/sequence-preloader.png" alt="Sequence is loading, please wait...">
			</div>
		</div>
		<div id="slideshow" class="preloading-complete">
			<img class="prev" src="<?php echo base_url(); ?>images/bt-prev.png" alt="Previous" style="display: inline; ">
			<img class="next" src="<?php echo base_url(); ?>images/bt-next.png" alt="Next" style="display: inline; ">
			<ul style="width: 100%; height: 100%; ">
				<li class="current">
					<div class="info animate-in" style="">
						<img class="sky animate-in" src="<?php echo base_url(); ?>images/Play-Vinyl.png" width="210" alt="Blue Sky" style="">
						<h2>Kay ka Fèt House</h2>
						<p style="color:red"><i>Joupa Misik...</i></p>
						
					</div>
					<img class="sky" src="<?php echo base_url(); ?>images/bg-clouds.png" width="800" alt="Blue Sky">
					<img class="balloon animate-in" src="<?php echo base_url(); ?>images/flame.jpg" alt="Balloon" style="">
				</li>
				<li>
					<div class="info">
						<h2>Brand new</h2>
						<?php if($rows != null):
						foreach($rows as $s):?>
						<p><?php echo $s->titre; ?></p>
						<p>
							<object type="application/x-shockwave-flash" data="<?php echo base_url(); ?>dewplayer-mini.swf" width="160" height="20" id="dewplayer" name="dewplayer"> 
								<param name="wmode" value="transparent" />
								<param name="movie" value="<?php echo base_url(); ?>dewplayer-mini.swf" /> 
								<param name="flashvars" value="mp3=<?php echo base_url(); ?><?php echo $s->path; ?>&amp;showtime=1&amp;volume=100" /> 
							</object>
						</p>
						<?php endforeach;endif; ?>
						</div>
						<img class="sky" src="<?php echo base_url(); ?>images/bg-clouds.png" width="400" alt="Blue Sky">
						<img class="aeroplane" src="<?php echo base_url(); ?>images/img_15_2895_12.jpg" alt="Aeroplane">
				</li>
				<!-- <li>
					<div class="info">
						<h2>Oldies</h2>
						<p>Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</p>
					</div>
					<img class="sky" src="<?php echo base_url(); ?>images/bg-clouds.png" width="400" alt="Blue Sky">
					<img class="kite" src="<?php echo base_url(); ?>images/tux-kakashi.png" alt="Kite">
				</li> -->
			</ul>
		</div>
	</div>
</body></html>