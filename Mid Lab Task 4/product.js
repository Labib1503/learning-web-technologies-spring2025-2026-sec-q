var price=1000;

var quantityInput=document.getElementById("quantity");
var totalDisplay=document.getElementById("total");

quantityInput.addEventListener("input", function() {
    var quantity = parseInt(quantityInput.value);
    if(quantity<0){
        alert("Quantity cannot be negative");
        quantityInput.value=0;
        quantity=0;
    }
    var total=price*quantity;
    totalDisplay.textContent=total;
    if(total>1000){
        alert("Total exceeds $1000");
    }
});