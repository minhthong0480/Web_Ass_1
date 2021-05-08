// REMOVE THE ITEMS FROM CART
// Create a variable to calculate the remove button
var RemoveButtonQuantity = document.getElementsByClassName("remove-button")
console.log(RemoveButtonQuantity)
// Create a for loop to execute each time the remove button is clicked
for (var i = 0; i < RemoveButtonQuantity.length; i++) {
    //variable button to locate the element button inside the order.html
    var buttonElement = RemoveButtonQuantity[i]
    buttonElement.addEventListener('click', removeItems) 
}

function removeItems(event){
    //button's function when clicking the remove button
    //Note that the ".parentElement" to get the parent element of the remove button
    var buttonClicked = event.target 
    updateCartTotal()
    buttonClicked.parentElement.parentElement.remove()
    
}

// FUNCTION TO CALCULATE THE TOTAL PRICE AND PRICE BASED ON QUANTITIES
function updateCartTotal(){
    // Variable to count the first class "order" containing all the class elements "row-product" inside
    var order = document.getElementsByClassName("order")[0]
    

    var rowProducts = order.getElementsByClassName("row_product")
    

    var totalPrice = 0;
    
    for (var i = 0; i < rowProducts.length; i++){
        var rowProduct = rowProducts[i]
        console.log(rowProduct)
        var priceQuantities = rowProduct.getElementsByClassName("product_price")[0]
        var quantities = rowProduct.getElementsByClassName("quantity_order")[0]
        var pricePure = parseFloat(priceQuantities.innerHTML.replace("Price:", '').replace('VND', ''))
        var quanityPure = quantities.value
        totalPrice = totalPrice + (pricePure * quanityPure)
        console.log(totalPrice)

    }
    document.getElementsByClassName("total_order")[0].innerHTML = totalPrice + ".000 VND"
}

