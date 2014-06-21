var x1 = 55; var x2=545;
var y1 = 55; var y2=545;

window.onload = function() 
{
    circle();
}

function circle()
{ 
    var canvas = document.getElementById('circle');
    var obCanvas = canvas.getContext('2d');
    var x = randomNumber(x1, x2);
    var y = randomNumber(y1, y2);
    obCanvas.beginPath();
    obCanvas.arc(x, y, 40, 0, 2*Math.PI, false);
    obCanvas.fillStyle = 'red';
    obCanvas.fill();
    obCanvas.strokeStyle = 'red';
    obCanvas.stroke();
}

function randomNumber(m, n)
{
    return Math.floor( Math.random() * (n - m + 1) ) + m;
}
