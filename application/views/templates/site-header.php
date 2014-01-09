<div id = "wrap" >	
	<div class = "first-segment">
		<div class = "first-segment-inner">
			<div class = "top-bar">
				<div class = "sign-up" >
					<div class = "top-bar-text"><a href = "#" class="md-trigger" data-modal="modal-1" id= "signup"> SIGN-UP</a></div>
				</div>

				<div class = "login">
					<div class = "top-bar-text"><a href = "#" class="md-trigger" data-modal="modal-2" id= "login">LOG IN</a></div>
				</div>		
				<div class = "search">
					<div class = "top-bar-text"><a href = "#" id = "search">SEARCH</a></div>
				</div>		
				<div class = "search-field">
					<div class = "inner-search-field">
						<input type = "text" class = "text-field" />
						<a href = "#" id = "top-search" ><img src = "<?php echo base_url();?>img/search1.png"/></a>
					</div>
				</div>					
			</div>	
		</div>	
	</div>	


	<div class = "second-segment">
		<div class = "second-segment-inner">
			<div class = "logo" ></div>
		
			<div class = "sidelogo" >
				<div class = "side-description">
					WhereDoWeStand is an anonymous discussion site gitty social & psychological moral
					issues. Make a statement, ask a question, post a story. Your posts will be judged by
					other anonymous people who may or may not share the same views as you. You may even judge
					them back. <b>In here, you don't have to be politically correct.</b>
				</div>
				<div class = "side-links">
					<a href = "#" id = "about" class = "side-links-color">About</a> | <b><a href = "#" id = "how" class = "side-links-color">How this site works</a></b> | <a href = "#" id = "contact" class = "side-links-color md-trigger"  data-modal="modal-3">Contact</a>
				</div>		
				<div style = "height:auto">
					<a href = "#" id = "post-img"><img src = "<?php echo base_url();?>img/btn1.jpg"/></a>
				</div>						
			</div>	

		</div>	
	</div>	

	<div class = "third-segment">
		<div class = "third-segment-inner">
			<div class = "categories">

			</div>	
			<div class = "most-recent nav-selected">

			</div>	
			<div class = "most-rated">

			</div>
			<div class = "most-commented">

			</div>
			<div class = "random">

			</div>			

		</div>	
	</div>	
		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">	
				<div class = "modal-header" >
					<a href="#" title="Close" class="md-close closebox">X</a>
					<span class = "modal-texts">SIGN-UP</span>
				</div>
				<div style = " padding-bottom:45px;">
					<p class = "contact-form">You don't need to sign up to make a post or a comment but signing up will give you e-mail notifications. Your e-mail will never be used for anything and you can stop receiving notifications at anytime.</p>
					<br/>
					<form>
					    <label id = "contact-name">Account Name:</label>
					    <input type="text" class = "modal-input" id = "name-sign"/><br/><br/>

					    <label id = "contact-email">Email:</label>
					    <input type="text" class = "modal-input" id = "email-sign" /><br/><br/>

					    <label id = "contact-name">Sex:</label>
					        <input type="radio" name = "gender" class = "gender" style = "border:none"/> Male
   							<span  class=""><input type="radio" name = "gender" class = "gender"/>Female</span><br/><br/>

					    <label id = "contact-email">Password:</label>
					    <input type="text" class = "modal-input" id = "password-sign" /><br/><br/>

					    <label id = "contact-email">Confirm Password:</label>
					    <input type="text" class = "modal-input" id = "confirm-sign" /><br/><br/>

					  		<button class = "modal-button clear-btn" id = "clear-sign">Clear</button>
					  		<button class = "modal-button send-btn" id = "send">Send</button> 
						
					</form>									
				</div>
			</div>
		</div>	

		<div class="md-modal md-effect-1" id="modal-2">
			<div class="md-content">	
				<div class = "modal-header" >
					<a href="#" title="Close" class="md-close closebox">X</a>
					<span class = "modal-texts">LOGIN</span>
				</div>
				<div style = " padding-bottom:45px;">
					
					<form>
					    <label id = "contact-name">Account Name:</label>
					    <input type="text" class = "modal-input"/><br/><br/>

					    <label id = "contact-email">Password:</label>
					    <input type="text" class = "modal-input" /><br/><br/>

					  		<button class = "modal-button clear-btn " id = "cancel">CANCEL</button>
					  		<button class = "modal-button send-btn" id = "login-inner">LOGIN</button> 
							<a href = "#" class = "forgot-pass"  id = "forgot">Forgot Password</a>
					</form>									
				</div>
			</div>
		</div>		


		<div class="md-modal md-effect-1" id="modal-3">
			<div class="md-content">	
				<div class = "modal-header" >
					<a href="#" title="Close" class="md-close closebox">X</a>
					<span class = "modal-texts">CONTACT US</span>
				</div>
				<div style = " padding-bottom:45px;">
					<p class = "contact-form">Got questions, suggestions? Got any pressing needs or any gripes that you need us to know? Fill in the forms and let us know!</p>
					<br/>
					<form>
					    <label id = "contact-name">Name:</label>
					    <input type="text" class = "modal-input" id = "name-input"/><br/><br/>

					    <label id = "contact-email">Email:</label>
					    <input type="text" class = "modal-input" id = "email-input"/><br/><br/>

					    <label id = "contact-message">Message:</label>
					    <textarea class = "modal-textarea" id = "message-input"></textarea>
					    <br/><br/>
					  		<button class = "modal-button clear-btn" id = "clear">Clear</button>
					  		<button class = "modal-button send-btn" id = "send">Send</button> 
						
					</form>									
				</div>
			</div>
		</div>					