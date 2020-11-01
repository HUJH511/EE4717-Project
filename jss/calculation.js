var priceArray = 0.00;

function sumMoney(id){
  priceArray = getPrice(id) * getQuantity(id);
  document.getElementById("subtotal").innerHTML = priceArray.toFixed(2);
}

function getQuantity(id){
  return document.getElementById("dnumber").value;
}

function getPrice(id){
  return (parseFloat(document.getElementById("scost").textContent));
}
