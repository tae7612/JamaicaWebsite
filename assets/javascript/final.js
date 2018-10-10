// Validates information user gives in form
function validateForm()
{
	//Given name
	var x = document.forms["commentForm"]["name"].value;
	//The comment user made
	var y = document.forms["commentForm"]["com"].value;
	
	if( (x =="" || x == null) || (y =="" || y == null))
	{
		//Form is not submitted
		
		alert("You must fill out all fields to make a comment!")
		return false;
	}
	
}

//Automates the slide show 
function AutoSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

var slideIndex = 0;


function preload()
{
	slideShow();
}
function prev()
{
	slideIndex--;
	slideShow(); 
}

function next()
{
	slideIndex++;
	slideShow(); 
}


function slideShow()
{
	var slides = document.querySelectorAll('.slide');
	if (slideIndex >= slides.length) 
	{
		slideIndex = 0;
	}
	else if(slideIndex < 0)
	{
		slideIndex = slides.length - 1;
	} 
	
	for(i =0; i < slides.length; i++)
	{
		slides[i].style.display ="none";
	}
	
	slides[slideIndex].style.display = "block";  
	  
}