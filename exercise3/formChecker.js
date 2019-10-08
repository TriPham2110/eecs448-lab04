username = document.getElementById("username");
password = document.getElementById("password");
tulips = document.getElementById("tulips");
roses = document.getElementById("roses");
sunflowers = document.getElementById("sunflowers");
_7dayShipping = document.getElementById("free");
_1dayShipping = document.getElementById("$50")
_3dayShipping = document.getElementById("$5");

//validateEmail is implemented using type="email" in customerFrontend.html

function validateInput(){
  if(!validatePassword(password))
    alert("Invalid password");
  if(!validateQuantity(tulips) || !validateQuantity(roses) || !validateQuantity(sunflowers))
    alert("Invalid quantity input")
  if(!validateShipOption(_7dayShipping) && !validateShipOption(_1dayShipping) && !validateShipOption(_3dayShipping))
    alert("Invalid shipping option")
}

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
