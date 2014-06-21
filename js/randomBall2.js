    var x = 55; 
	var y = 55;
	var r = 40;
    var sx = 5;
	var sy = 5;

    window.onload = function() 
    {
        setInterval(circle, 1000/50);
    }
	
    function param()
	{
        if((y-r) < 0 || (y+r) > 600)
		{
		    sy = -sy;
		}
        if((x-r) < 0 || (x+r) > 900)
		{
		    sx = -sx;
		}
        x += sx; y += sy;
	}
	
    function circle()
    {
    	param();
        var canvas = document.getElementById('circle');
        var obCanvas = canvas.getContext('2d');
        obCanvas.clearRect(0, 0, 900, 600);
        obCanvas.beginPath();
        obCanvas.arc(x, y, r, 0, 2*Math.PI, false);
        obCanvas.fillStyle = 'red';
        obCanvas.fill();
        obCanvas.strokeStyle = 'red';
        obCanvas.stroke();
    }
