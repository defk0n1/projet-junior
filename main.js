// // Cart
let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");
// Open Cart
cartIcon.onclick = () => {
    cart.classList.add("active");
    updatetotal();
};
// Close Cart
closeCart.onclick = () => {
cart.classList.remove("active");
};
// Cart Working JS
if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}
// Making Function
function ready (){
    // Reomve Items From Cart
    var removeCartButtons = document.getElementsByClassName ('cart-remove')
    console.log(removeCartButtons)
    for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons [i]
    button.addEventListener('click', removeCartItem)
    
    }
}
// Reomve Items From Cart
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
}
// Add To Cart
var addCart = document.getElementsByClassName("add-cart");
for (var i = 0; i < addCart.length; i++) {
    var button = addCart [i];
    button.addEventListener("click", addCartClicked);
}
// Add To cart
function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-name")[0].innerHTML;
    var condition = shopProducts.getElementsByClassName("product-condition")[0].innerHTML;
    var mileage = shopProducts.getElementsByClassName("product-mileage")[0].innerHTML;
    var price = shopProducts.getElementsByClassName("product-price")[0].innerHTML;
    /* var productImg = shopProducts.getElementsByClassName("product-img")[0].src; */
    var productImg = document.getElementById("product-img").src;
    console.log(title, price,condition, mileage, productImg);
    addProductToCart(title, price,condition, mileage, productImg);
    updatetotal();
}
function addProductToCart(title, price,condition, mileage, productImg) {
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add('cart-box')
    var cartItems = document.getElementsByClassName("cart-content" )[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText == title){
        alert("You have already add this item to cart");
        return;
        }
    }
    var cartBoxContent=`
                            <img src="${productImg}" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-title">${title}</div>
                                <div class="cart-product-condition">${condition}</div>
                                <div class="cart-product-mileage">${mileage}</div>
                                <div class="cart-product-price">${price}</div>
                            </div>
                            <!-- Remove Cart -->
                            <i class='bx bxs-trash-alt cart-remove'></i>`;
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox
        .getElementsByClassName("cart-remove")[0]
        .addEventListener("click", removeCartItem);
}

// Update Total
function updatetotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    if (cartBoxes.length == 0){
        document.getElementsByClassName('total-price')[0].innerHTML = "$0";
        return;
    }
    for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes [i];
    var priceElement = cartBox.getElementsByClassName("cart-product-price")[0];
    /* var quantityElement = cartBox.getElementsByClassName ("cart-quantity")[0]; */
    var price = parseFloat (priceElement.innerText.replace("$", ""));
    /* var quantity = quantityElement.value; */
    total = total + price ;
    document.getElementsByClassName('total-price')[0].innerHTML = "$"+ total;
    }
}