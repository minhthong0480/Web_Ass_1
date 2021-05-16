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
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

var quantityInputs = document.getElementsByClassName('quantity_order')
for (var i = 0; i < quantityInputs.length; i++){
     var InputQuantity = quantityInputs[i]
     InputQuantity.addEventListener('change', QuantityChange)
}

function QuantityChange(event){
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateCartTotal()
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
    totalPrice = Math.round(totalPrice * 1000)/1000
    document.getElementsByClassName("total_order")[0].innerHTML = totalPrice + ".000 VND"
}

var addToCartButton = document.getElementsByClassName("add-to-cart-button")
for (var i = 0; i < addToCartButton.length; i++){
    var button = addToCartButton[i]
    button.addEventListener('click', addingCartButtonClicked)
}

function addingCartButtonClicked(event){
    var button = event.target
    var sideProduct = button.parentElement.parentElement.parentElement
    var nameProduct = sideProduct.getElementsByClassName("name-product")[0].innerHTML
    var priceProduct = sideProduct.getElementsByClassName("price-product")[0].innerHTML
    var productImage = sideProduct.getElementsByClassName("product-img")[0].src
    console.log(nameProduct, priceProduct, productImage)
    addItemtoCart(nameProduct, priceProduct, productImage)
}

function addItemtoCart(nameProduct, priceProduct, productImage){
    var rowProduct =  document.createElement('div')
    rowProduct.innerHTML = nameProduct
    var order = document.getElementsByClassName("order")[0]
    console.log(orderClass)
    // var cartContent = `
    //     <div class="row_product">
    //             <div class="image_order">
    //                 <img src="ImageProductTesting/iphone-12-pro-max-1.jpeg" alt="iphone-12-pro-max-1" width="200px">
    //             </div>
    //             <div class="product-name_order">
    //                 <h3>Name: Iphone 12 Pro-Max</h3>
    //             </div>
    //             <h3 class="product_price">Price: 31.927.000 VND</h3>
    //         <div class="product_quantity_order">
    //             <input type="number" min="1" max="10" class="quantity_order" value="1">
    //             <button class="remove-button" type="button">REMOVE</button>
    //         </div>
    //     </div>`
    orderClass.append(rowProduct) 
}
