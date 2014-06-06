window.onload = function() 
{
    for (i=0; i< document.getElementsByClassName("menu")[0].getElementsByClassName('vert').length; i++) 
	{
        document.getElementsByClassName("menu")[0].getElementsByClassName('vert')[i].onmouseover = function() 
		{
            this.getElementsByTagName('ul')[0].style.display = 'block';
        }
        document.getElementsByClassName("menu")[0].getElementsByClassName('vert')[i].onmouseout = function() 
		{
            this.getElementsByTagName('ul')[0].style.display = 'none';
        }
    }
}