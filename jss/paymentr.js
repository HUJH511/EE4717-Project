var nameNode = document.getElementById("cardname");
var dateNode = document.getElementById("datexp");
var emailNode = document.getElementById("conemail");
var numNode = document.getElementById("memnum");
var ccvNode = document.getElementById("ccv");
var cardnumNode = document.getElementById("cardnum");



nameNode.addEventListener("change", chkName, false);
dateNode.addEventListener("change", chkDate, false);
emailNode.addEventListener("change", chkEmail, false);
numNode.addEventListener("change", chkphone, false);
ccvNode.addEventListener("change", chkccv, false);
cardnumNode.addEventListener("change", chknum, false);
