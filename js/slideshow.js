slideCur = 1;
slideNext = 2;
slideTime = 5000;
animSpeed = 500;
fadeSpeed = 500;
numSlides = 3;

//ON CLICK AND MOUSE EVENTS
document.getElementById('button1').onclick = function() {buttonClick(1)};
document.getElementById('button2').onclick = function() {buttonClick(2)};
document.getElementById('button3').onclick = function() {buttonClick(3)};

document.getElementById('slideshow').onclick = function() {changeHref()};

document.getElementById('slideshow').addEventListener("mouseover", stopSlideshow);
document.getElementById('slideshow').addEventListener("mouseout", startSlideshow);

document.addEventListener( 'DOMContentLoaded', function()
{
	for (i = 1; i < numSlides + 1; i++) hideSlide('slide' + i);
	
	showSlide('slide1');
	buttonOn('button1');
	startSlideshow();
}, false);

function startSlideshow()
{	
	//Every X seconds, move to next slide
	loop = setInterval(function()
	{
		if(slideNext > numSlides) slideNext = 1;
		
		//Turn off current button, turn on next button
		buttonOff('button' + slideCur);
		buttonOn('button' + slideNext);
		
		//Hide current slide hide, show next slide
		hideSlide('slide' + slideCur);
		showSlide('slide' + slideNext);
	
		slideCur = slideNext;
		slideNext = slideNext + 1;
	}, slideTime);
}

function stopSlideshow()
{
	window.clearInterval(loop);
}

function changeSlide(id)
{
	stopSlideshow();
	if(id > numSlides) id = 1;
	
	//Turn off current button, turn on desired button
	buttonOff('button' + slideCur);
	buttonOn('button' + id);
	
	//Hide current slide hide, show desired slide
	hideSlide('slide' + slideCur);
	showSlide('slide' + id);
	
	slideCur = id;
	slideNext = id + 1;
	startSlideshow();
}

function buttonClick(num)
{
	changeSlide(num);
}

function showSlide(slide)
{
	document.getElementById(slide).style.opacity = 1;
}

function hideSlide(slide)
{
	document.getElementById(slide).style.opacity = 0;
}

function buttonOn(button)
{
	document.getElementById(button).style.backgroundColor = '#3399ff';
}

function buttonOff(button)
{
	document.getElementById(button).style.backgroundColor = '#909090';
}

function changeHref()
{
	if (slideCur == "1") window.location.href = "../house1.php";
	else if (slideCur == "2") window.location.href = "../house2.php";
	else if (slideCur == "3") window.location.href = "../house3.php";
	return false;
}























