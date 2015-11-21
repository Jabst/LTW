
function checkIfValid(arg){

	var at = arg.search(/@/i);
	var dot = arg.search(/\./i);

	if(at > 1 && dot > 2){
		return true;
	}
	else
		return false;
}

function onInputEmail(){
	
	/*var valid;
	var inUse;*/
	if(!checkIfValid(document.getElementById("email").value)){
		document.getElementById("email_warning").innerHTML = ("EMAIL NOT VALID EX: a-Z0-9@a-Z-.a-z");
		document.getElementById("submit_button").disabled = true;
	}else{
		document.getElementById("email_warning").innerHTML =  "";
		document.getElementById("submit_button").disabled = false;
	}
	
	/*var value = document.getElementById("email").value;
	if ($(value).val() != 0) {
		 $.post("jscript/bridge_email.php", {
		 variable:value
	 }, function(data) {
		 if ((data != "")) {
			 inUse = "EMAIL ALREADY IN USE";
		 }else{
			 inUse = "";
		 }
	 });
	}*/
	
	//document.getElementById("email_warning").innerHTML = (valid + " " + inUse);
}

function onInputPassword(){
	
	if(document.getElementById("password").value.length < 7){
		document.getElementById("password_warning").innerHTML = ("PASSWORD TOO SMALL");
		document.getElementById("submit_button").disabled = true;
	}else{
		document.getElementById("password_warning").innerHTML = "";
		document.getElementById("submit_button").disabled = false;
	}
}

function onInputUsername(){
	
	var value = document.getElementById("name").value;
	if ($(value).val() != 0) {
		 $.post("jscript/bridge_username.php", {
		 variable:value
	 }, function(data) {
		 if ((data != "")) {
			 document.getElementById("username_warning").innerHTML = ("USERNAME ALREADY IN USE");
			 document.getElementById("submit_button").disabled = true;
		 }else{
			 document.getElementById("username_warning").innerHTML = "";
			 document.getElementById("submit_button").disabled = false;
		 }
	 });
	}
}


document.getElementById("name").oninput = function(){onInputUsername()};

document.getElementById("password").oninput = function(){onInputPassword()};

document.getElementById("email").oninput = function(){onInputEmail()};


