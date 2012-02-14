
function userDraw() {

	//set it true on mousedown
	$("#canvas").mousedown(function(){
		draw=true; 
		pointList.push(["down"]);
		ctx.beginPath();
		isFirst = true;
	});
	
	//reset it on mouseup
	$("#canvas").mouseup(function(){ 
		draw=false; 
		pointList.push(["up"]);
		window.location.hash = JSON.stringify(pointList); //set hash
		return false; //disables browser anchor jump behavior
	});
	
	$("#canvas").mousemove(function(e) {
		if(draw == true){
				pointList.push([e.pageX,e.pageY]);
				
				if (isFirst == true) {
					ctx.moveTo(e.pageX,e.pageY);
					isFirst = false;
				} else {
					ctx.lineTo(e.pageX,e.pageY);
				}
				
				ctx.stroke();
				
				console.log(JSON.stringify(pointList));
		}    
	});
}

function drawBot() {
	var todo = JSON.parse(window.location.hash.substring(1));
	var i = 0;
	var drawBot = window.setInterval(function() {
		var k = todo[i];
		//console.log(todo.length - i);
		if (k[0] == "down") {
			ctx.beginPath();
			ctx.moveTo(todo[i+1][0],todo[i+1][1]);
			i++;
		} else if (k[0] == "up") {
			//pass
			i++;
		} else {
			ctx.lineTo(todo[i][0],todo[i][1]);
			ctx.stroke();
			i++;
		}
		if (i >= todo.length) {
			window.clearInterval(drawBot);
		}
	}, 50);
}

$(document).ready(function() {

	draw = false;
	pointList = new Array();
	isFirst = true;
	
	canvas = document.getElementById("canvas");
	ctx = canvas.getContext("2d");
	ctx.strokeStyle = '#CD1076';
	ctx.lineWidth = 3;
	ctx.lineCap = "round";
	

	if(window.location.hash) {
	  // Fragment exists
	  drawBot();
	} else {
	  // Fragment doesn't exist
	  userDraw();
	}        
});