<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canvas Paint</title>
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all" charset="utf-8" />
  </head>
  <body onload="Paint.init();">
		<article>
			<section>
					<canvas id="imageView" >
	        	<p>Unfortunately, your browser is currently unsupported by our web 
	        application.  We are sorry for the inconvenience. Please use one of the 
	        supported browsers listed below, or draw the image you want using an 
	        offline tool.</p>
	        <p>Supported browsers: <a href="http://www.opera.com">Opera</a>, <a 
	          href="http://www.mozilla.com">Firefox</a>, <a 
	          href="http://www.apple.com/safari">Safari</a>, and <a 
	          href="http://www.konqueror.org">Konqueror</a>.</p>
	      </canvas>
			</section>
	</article>
	<arcticle>
		<section>
			<ul id="pallet">
				<li class="color" onclick="Paint.setColor('85, 98, 112')" style="background-color:#556270"></li>
				<li class="color" onclick="Paint.setColor('171, 170, 129')" style="background-color:#ABAA81"></li>
				<li class="color" onclick="Paint.setColor('78, 205, 196')" style="background-color:#4ECDC4"></li>
				<li class="color" onclick="Paint.setColor('199, 244, 100')" style="background-color:#C7F464"></li>
				<li class="color" onclick="Paint.setColor('255, 107, 107')" style="background-color:#FF6B6B"></li>
				<li class="color" onclick="Paint.setColor('196, 77, 88')" style="background-color:#C44D58"></li>
				<li class="color" onclick="Paint.setColor('105, 210, 231')" style="background-color:#69D2E7"></li>
				<li class="color" onclick="Paint.setColor('167, 219, 216')" style="background-color:#A7DBD8"></li>
				<li class="color" onclick="Paint.setColor('224, 228, 204')" style="background-color:#E0E4CC"></li>
				<li class="color" onclick="Paint.setColor('243, 134, 48')" style="background-color:#F38630"></li>
				<li class="color" onclick="Paint.setColor('250, 105, 0')" style="background-color:#FA6900"></li>
				<li class="color" onclick="Paint.setColor('255, 255, 255')" style="background-color:#FFFFFF"></li>
				<li class="color" onclick="Paint.save('/Users/matthewgn/Pictures/Boba-Fett.png')" style="background:url(assets/save-icon.png)"></li>
			</ul>
		</section>
	</arcticle>
  <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/Paint.draw.js"></script>
	<script type="text/javascript" src="js/Paint.pencil.js"></script>
  </body>
</html>

