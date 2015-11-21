
var oldPassword;
var newPassword;
var newPassword2;
var condition_equal_passwords;

function onInputOldPassword(){
	oldPassword = document.getElementById("old_password").value;
};

function onInputNewPassword(){
	newPassword = document.getElementById("new_password").value;
	
	if(newPassword.length < 7){
		document.getElementById("password_warning").innerHTML = ("PASSWORD TOO SMALL");
	}else{
		document.getElementById("password_warning").innerHTML = "";
	}
};

function onInputNewPassword2(){
	newPassword2 = document.getElementById("new_password2").value;
	
	if(newPassword2.length < 7){
		document.getElementById("password_warning").innerHTML = ("PASSWORD TOO SMALL");
	}else{
		document.getElementById("password_warning").innerHTML = "";
	}
};

function checkIfNewPasswordsMatch(){
	if(newPassword === newPassword2){
		condition_equal_passwords = true;
		document.getElementById("submit").disabled = false;
		document.getElementById("password_warning").innerHTML = "";
	}else{
		document.getElementById("submit").disabled = true;
		document.getElementById("password_warning").innerHTML = ("PASSWORD DO NOT MATCH");
	}
	
};



document.getElementById("old_password").oninput = function(){onInputOldPassword()};

document.getElementById("new_password").oninput = function(){onInputNewPassword();checkIfNewPasswordsMatch();};

document.getElementById("new_password2").oninput = function(){onInputNewPassword2();checkIfNewPasswordsMatch();};

