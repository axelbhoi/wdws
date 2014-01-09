$(document).ready(function(){
	$('#signup').on('click',function(e){
		e.preventDefault();
	});

	$('#login').on('click',function(e){
		e.preventDefault();
	});

	$('#contact').on('click',function(e){
		e.preventDefault();
	});	
	
	$('.md-close').on('click',function(e){
		e.preventDefault();
	});

	$('#cancel').on('click',function(e){
		e.preventDefault();
		$('#modal-2').removeClass('md-show');
	});

	$('#login-inner').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});

	$('#send').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});

	$('#clear').on('click',function(e){
		e.preventDefault();
		$('#name-input').val("");
		$('#email-input').val("");
		$('#message-input').val("");
	});	

	$('#clear-sign').on('click',function(e){
		e.preventDefault();
		$('#name-sign').val("");
		$('#email-sign').val("");
		$('#password-sign').val("");		
		$('#confirm-sign').val("");	
		$('.gender:radio').prop('checked',false);
	});

	$('#forgot').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#search').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#how').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#about').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#post-img').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$(".inner-list").dotdotdot({
		//	configuration goes here
		ellipsis	: '...',
		height		:45,
		wrap		: 'word',
		fallbackToLetter: true,
		watch:window
	});

	$(".title-post").dotdotdot({
		//	configuration goes here
		ellipsis	: '...',
		height		: 30,
		wrap		: 'word',
		fallbackToLetter: true,
		watch:window
	});

	$('#more-post').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});		

	$('#top-search').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#bottom-search').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});	

	$('#bottom-post').on('click',function(e){
		e.preventDefault();
		alert("clicked");
	});		
});