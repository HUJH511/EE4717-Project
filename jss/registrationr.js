var nameNode = document.getElementById("username");
var dateNode = document.getElementById("birthday");
var emailNode = document.getElementById("Email");
var numNode = document.getElementById("mobile_number");
var passwordNode = document.getElementById("password");



nameNode.addEventListener("change", chkName, false);
dateNode.addEventListener("change", chkDate, false);
emailNode.addEventListener("change", chkEmail, false);
numNode.addEventListener("change", chkphone, false);
passwordNode.addEventListener("change", chkPassword, false);
