username = document.getElementById("username");
password = document.getElementById("password");
tulips = document.getElementById("tulips");
roses = document.getElementById("roses");
sunflowers = document.getElementById("sunflowers");
_7dayShipping = document.getElementById("free");
_1dayShipping = document.getElementById("$50")
_3dayShipping = document.getElementById("$5");

function validateForm(){
	if(!validateInput())
		event.preventDefault();
	else
		return true;
}

function validateInput(){
	var isValid = true;
	if(!validateUsername(username)){
		alert("Invalid username");
		isValid = false;
	}
	if(!validatePassword(password)){
		alert("Invalid password");
		isValid = false;
	}
	if(!validateQuantity(tulips) || !validateQuantity(roses) || !validateQuantity(sunflowers)){
		alert("Invalid quantity input");
		isValid = false;
	}
	if(!validateShipOption(_7dayShipping) && !validateShipOption(_1dayShipping) && !validateShipOption(_3dayShipping)){
		alert("Invalid shipping option");
		isValid = false;
	}
	return isValid;
}

//validateUsername is further implemented using type="email" in customerFrontend.html
function validateUsername(name){
	if(name.value == "")
		return false;
	else
		return true;
}

//validateQuantity is further implemented using min=0 in customerFrontend.html
function validateQuantity(quantity){
  if(quantity.value < 0 || quantity.value =="")
    return false;
  else
    return true;
}

function validatePassword(pass){
  if(pass.value == "")
    return false;
  else
    return true;
}

function validateShipOption(shippingOption){
  if(!shippingOption.checked)
    return false;
  else
    return true;
}
