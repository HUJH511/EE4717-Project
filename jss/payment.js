function shownum(){
  if (document.getElementById("chkmembery").onclick){
    document.getElementById("memnum").type = "text";
  }
}

function disnum(){
  if (document.getElementById("chkmembern").onclick){
    document.getElementById("memnum").type = "hidden";
    document.getElementById("memnum").value = '00000000';
  }
}

function showpay(id){
  switch (id) {
    case 1:
      document.getElementById("paymentype").innerHTML = "Master";
      break;
    case 2:
      document.getElementById("paymentype").innerHTML = "Visa";
      break;
    case 3:
      document.getElementById("paymentype").innerHTML = "Paypal";
      break;

  }
}

function chkName(){
  var inputName = document.getElementById("cardname");
  var checkstring = inputName.value;
  const exp = /^([A-Za-z',.\s?]+)$/;
  if(!exp.test(checkstring)){
      alert('Please fill in your name. The username contains only alphabet characters and character space.');
      inputName.focus();
      inputName.select();
      return false;
  }
  else return true;
}

function chkphone(){
  var inputnum = document.getElementById("memnum");
  var checknum = inputnum.value.toString();
  const exp = /^[0-9]{8}$/;
  if (!exp.test(checknum)){
      alert('Your phone number is not correct');
      inputnum.focus();
      inputnum.select();
      return false;
  }
  else return true;
}

function chknum(){
  var inputnum = document.getElementById("cardnum");
  var checknum = inputnum.value.toString();
  const exp = /^[0-9]{16}$/;
  if (!exp.test(checknum)){
      alert('Your card number is not correct');
      inputnum.focus();
      inputnum.select();
      return false;
  }
  else return true;
}

function chkEmail(){
    var inputEmail = document.getElementById("conemail");
    var checkEmail = inputEmail.value.toString();
    const exp = /^[A-Za-z]+@(\w+\.){1,3}\w{2,3}$/;
    if (!exp.test(checkEmail)){
        alert('Your email is not correct');
        inputEmail.focus();
        inputEmail.select();
        return false;
    }
    else return true;
}

function chkccv(){
    var inputccv = document.getElementById("ccv");
    var checkccv = inputccv.value.toString();
    const exp = /^[0-9]{3}$/;
    if (!exp.test(checkccv)){
        alert('Your CCV code is not correct');
        inputccv.focus();
        inputccv.select();
        return false;
    }
    else return true;
}

function chkDate(){
    var inputDate = document.getElementById("datexp");
    var startDate = new Date(inputDate.value);
    var currentDate = new Date();
    if(startDate < currentDate){
        alert('You cannot select a date that is earlier than today!');
        inputDate.focus();
        inputDate.select();
        return false;

    }
    else return true;
}

function reCheck(){
    if(!chkName() || !chkEmail() || !chkDate() || !chkccv()|| !chkphone()|| !chknum()){
        return false;

    }
    else return true;
}
