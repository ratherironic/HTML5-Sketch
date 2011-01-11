var canvas, 
		context, 
		tool, 
		color = "171,170,129",
		lwidth = 4,
		prev = {},		
		started = false;

var Paint = (function(){
	var tool = {
		init:function(){
			canvas = document.getElementById('imageView');
			if (!canvas) { alert('Error: I cannot find the canvas element!'); return; }
			if (!canvas.getContext) { alert('Error: no canvas.getContext!'); return; }
			context = canvas.getContext('2d');
			context.canvas.width  = window.innerWidth;
			context.canvas.height = window.innerHeight;
			if (!context) { alert('Error: failed to getContext!'); return; }
			
			$('#imageView').mousedown(function(e){
				tool.startDraw(e);
			});
			$('#imageView').mousemove(function(e){
				tool.draw(e);
			});
			$('#imageView').mouseup(function(e){
				tool.endDraw(e);
			});
			
		},
		setColor:function(rgb){
			color = rgb;
		},
		startDraw:function(e){
			context.beginPath();
      context.moveTo(e.pageX, e.pageY);
			prev = {x:e.pageX, y:e.pageY};
			started = true;
		},
		draw:function(e){
			if(started){
				context.lineTo(e.pageX, e.pageY);
        context.stroke();
				context.strokeStyle = 'rgba('+color+', 0.25)';
				var diff = prev.x - e.pageX + prev.y - e.pageY;
				if(diff<0){
					diff *= -1;
				}else if(diff>50){
					diff =50;
				}
				context.lineWidth  = diff;
				prev = {x:e.pageX, y:e.pageY}				
			}
		},
		endDraw:function(e){
			if(started){
				context.beginPath();
				context.lineTo(e.pageX, e.pageY);
	      context.moveTo(e.pageX, e.pageY);
				started=false;
			}
		},
		clear:function(){
			
		},
		save:function () {
			var xmlhttp = new XMLHttpRequest();
			var url = "save.php";
			var params = "u="+canvas.toDataURL();
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					 tool.download(xmlhttp.responseText);
				}
			}
			xmlhttp.open("POST", url, true);
			xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Content-length", params.length);
			xmlhttp.setRequestHeader("Connection", "close");
			xmlhttp.send(params);
		},
		download:function(file){
			window.location ="download.php?file="+file;
		}
	}
	return tool;
})();