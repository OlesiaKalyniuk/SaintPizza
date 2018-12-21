/*BEGIM MOBILE DROPMENU*/
function modileNavbar() {
	var mobNav = document.getElementById("mobNav");
	if (mobNav.className === "mobile-drop-menu") {
		mobNav.className += " responsive";
	} else {
		mobNav.className = "mobile-drop-menu";
	}
}


/*BEGIM FORM REGULAR VALIDATION*/
function checkLogin(login){
	var inputLogin = document.getElementsByClassName('login');
	var messageLogin = document.getElementById('login-status');
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	var defColor = "#f2f2f2";
	for(var i = 0; i < inputLogin.length; i++){
		if (inputLogin[i].value.length < 4) {
			inputLogin[i].style.outline = '3px solid #ff6666';
			messageLogin.style.color = badColor;
		}	
		else{
			inputLogin[i].style.outline = '3px solid #66cc66';
			messageLogin.style.color = goodColor; 	
		}
		if (inputLogin[i].value == '') {
			inputLogin[i].style.outline = '3px solid #f2f2f2';
		}  
	}

}

function checkMail(emailValid){
	var authMail = /^((([0-9A-Za-z]{1}[-0-9A-z]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/;
	var inputMail = document.getElementById('emailValid');
	var messageMail = document.getElementById('email-status');
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	var defColor = "#f2f2f2";
	if (authMail.test(emailValid) == false) {
		inputMail.style.outline = '3px solid #ff6666';
		messageMail.style.color = badColor;
	}
	else{
		inputMail.style.outline = '3px solid #66cc66';
		messageMail.style.color = goodColor;
	}
	if (inputMail.value == '') {
		inputMail.style.outline = '3px solid #f2f2f2';
	}   	 
}

function checkPass(pass1, pass2){
	var authPass = /(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z-_].{7,20}$/;
	// var inputPass1 = document.getElementById('pass1');
	var inputPass2 = document.getElementById('pass2')
	var inputPass1 = document.getElementsByClassName('pass');
	var messagePass1 = document.getElementById('pass1-status');
	var messagePass2 = document.getElementById('pass2-status');
	var goodColor = "#66cc66";
	var badColor = "#ff6666";
	var defColor = "#f2f2f2";
	for(var i = 0; i < inputPass1.length; i++){
		if (authPass.test(pass1)==false) {
			inputPass1[i].style.outline = '3px solid #ff6666';
			messagePass1.style.color = badColor;
		}
		else{
			inputPass1[i].style.outline = '3px solid #66cc66';
			messagePass1.style.color = goodColor;
		}
		if (inputPass2.value != inputPass1[i].value ) {
			inputPass2.style.outline = '3px solid #ff6666';
			messagePass2.style.color = badColor;
		}
		else{
			inputPass2.style.outline = '3px solid #66cc66';
			messagePass2.style.color = goodColor;	
		} 
		if (inputPass2.value == '') {
			inputPass2.style.outline = '3px solid #f2f2f2';
		}
		if (inputPass1.value == '') {
			inputPass1[i].style.outline = '3px solid #f2f2f2';
		} 
	}
}
/*END FORM REGULAR VALIDATION*/