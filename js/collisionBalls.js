    var balls = [];  
    function Ball(x, y, dx, dy, radius) 
	{
        this.x = x;
        this.y = y;
        this.dx = dx;
        this.dy = dy;
        this.radius = 30;
        this.strokeColor = "red";
        this.fillColor = "red";
    }

    function addBall() 
	{
        var ball = new Ball(30, 50, 1, 0, 30);
        var ball2 = new Ball(470, 50, -1, 0, 30);
        balls.push(ball);
        balls.push(ball2);
    }

    window.onload = function() 
	{
        addBall();
	    canvas = document.getElementById("canvasBalls");
	    obCanvas = canvas.getContext("2d");
        drawFrame();
    }
    function drawFrame() 
    {
        obCanvas.clearRect(0, 0, canvas.width, canvas.height);
        // Перебираем все мячики
        for(var i=0; i<balls.length; i++) 
	    {
            var ball = balls[i];
            ball.x += ball.dx;
            ball.y += ball.dy;
            // Если мячик натолкнулся на край холста, отбиваем его
            if ((ball.x + ball.radius > canvas.width) || (ball.x - ball.radius < 0)) 
	        {
                ball.dx = -ball.dx;
            }
		    //проверяем расстояние между шариками
            space(balls[0],balls[1]);
            // Рисуем мячик
            obCanvas.beginPath();
            obCanvas.arc(ball.x, ball.y, ball.radius, 0, Math.PI*2);
            obCanvas.fillStyle = ball.fillColor;
            obCanvas.fill();
	    	obCanvas.strokeStyle = 'red';
            obCanvas.stroke(); 
        }
		requestAnimationFrame(drawFrame); 
    }
    function space(obj,obj2)
	{        
        //вычисляем расстояние по x и y между двумя шарами                      
        var dX = obj.x - obj2.x;
        var dY = obj.y - obj2.y;
        //вычисляем расстояние между центрами шаров 
        var disnance = Math.sqrt ((dX*dX) + (dY*dY));
        //если расстояние меньше или равно сумме радиусов шаров,
        //то обрабатываем столкновение
        if(disnance <= (obj.radius + obj2.radius))
        {
            obj.dx = -obj.dx; obj2.dx = -obj2.dx;
        }              
    }