$(document).ready(function() {
        var draw = false;
        var pointList = new Array();
        var isFirst = true;
       
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        ctx.strokeStyle = '#CD1076';

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
		});

        $("#canvas").mousemove(function(e) {
            if(draw == true){
            		pointList.push([e.pageX,e.pageY]);
                    ctx.lineWidth = 3;
                    ctx.lineCap = "round";
                    
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

        
       //code for color pallete
        $("#clr > div").click(
        function(){
               ctx.strokeStyle = $(this).css("background-color");
        });
     
        //Eraser
        $("#eraser").click(function(){
        	ctx.strokeStyle = '#fff';
        });

        //Code for save the image
        $("#save").click(function(){ 
            $("#result").append("<br /><br /><img src="+
            canvas.toDataURL()+ 
           " /><br /><a href="+canvas.toDataURL()+ 
           " target='_blank'>show</a>");
        });
     
        //Clear 
        $("#clear").click(function(){
                 ctx.fillStyle = "#fff";
                 ctx.fillRect(0, 0, canvas.width, canvas.height);
                 ctx.strokeStyle = "red";
                 ctx.fillStyle = "red";
            }
        );
});