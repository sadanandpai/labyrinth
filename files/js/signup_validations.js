window.onload = initAll;

function initAll() {
	document.getElementById('signup_username').onblur = shower1;
	document.getElementById('email').onblur = shower2;
}

function shower1() {
		var username = $("#signup_username").val();
		if(username.length >= 6 && username.length <= 15){
			$.get( "http://localhost/labyrinth/validate_u/"+username,
			function(data){
                if(data == "404")
                    $("#validate_username").text("Invalid username");
                else
				    $("#validate_username").text(data);
			});
		}
		else
			$("#validate_username").text("Invalid username");
				
		return false;		
}

function shower2() {
		var email = $("#email").val()
		if(email.length >= 6 && email.length <= 40){
			$.get( "http://localhost/labyrinth/validate_e/"+email,
			function(data){
				if(data == "404")
                    $("#validate_email").text("Invalid email");
				else
					$("#validate_email").text(data);
			});
		}
		else
			$("#validate_email").text("Enter a valid email id");
			
		return false;	
	
}