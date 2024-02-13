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
    var notificationBox = document.createElement("div");
             notificationBox.classList.add("notification");
             notificationBox.innerText = "Removed successfully";
             document.body.appendChild(notificationBox);

    // Style the notification box
             notificationBox.style.position = "fixed";
             notificationBox.style.bottom = "20px";
             notificationBox.style.left = "50%";
             notificationBox.style.transform = "translateX(-50%)";
             notificationBox.style.backgroundColor = "green";
             notificationBox.style.border = "1px solid #ccc";
             notificationBox.style.padding = "10px";
             notificationBox.style.borderRadius = "5px";
             notificationBox.style.color = "white";

             setTimeout(function () {
                notificationBox.style.display = "none";
            }, 2000);

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
    var shopProducts = button.closest('.brand-product');
    var title = shopProducts.querySelector('.product-name').innerHTML;
    var condition = shopProducts.querySelector('.product-condition').innerHTML;
    var mileage = shopProducts.querySelector('.product-mileage').innerHTML;
    var price = shopProducts.querySelector('.product-price').innerHTML;
    var productImg = shopProducts.querySelector('.imgurl').value;
    console.log(productImg);
    console.log(title, price, condition, mileage, productImg);
    addProductToCart(title, price, condition, mileage, productImg);
    updatetotal();
    console.log("Button:", button);
    console.log("Parent Element:", button.parentElement);
    var imgurlInput = button.parentElement.querySelector('input[name=imgurl]');
    console.log("imgurlInput:", imgurlInput);

}

function addProductToCart(title, price, condition, mileage, productImg) {
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add('cart-box');
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");

    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText.trim().toLowerCase() === title.trim().toLowerCase()) {
            var notificationBox = document.createElement("div");
             notificationBox.classList.add("notification");
             notificationBox.innerText = "You have already added this item to cart";
             document.body.appendChild(notificationBox);

    // Style the notification box
             notificationBox.style.position = "fixed";
             notificationBox.style.bottom = "20px";
             notificationBox.style.left = "50%";
             notificationBox.style.transform = "translateX(-50%)";
             notificationBox.style.backgroundColor = "yellow";
             notificationBox.style.border = "1px solid #ccc";
             notificationBox.style.padding = "10px";
             notificationBox.style.borderRadius = "5px";
             notificationBox.style.color = "red";

             setTimeout(function () {
                notificationBox.style.display = "none";
            }, 2000);
            return;
        }
    }

    var cartBoxContent = `
        <img src="${productImg}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart-product-condition">${condition}</div>
            <div class="cart-product-mileage">${mileage}</div>
            <div class="cart-product-price">${price}</div>
        </div>
        <!-- Remove Cart -->
        <i class='bx bxs-trash-alt cart-remove'></i>
    `;
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);

    // Show notification at the bottom of the current view
    var notificationBox = document.createElement("div");
    notificationBox.classList.add("notification");
    notificationBox.innerText = "Product added to cart";
    document.body.appendChild(notificationBox);

    // Style the notification box
    notificationBox.style.position = "fixed";
    notificationBox.style.bottom = "20px";
    notificationBox.style.left = "50%";
    notificationBox.style.transform = "translateX(-50%)";
    notificationBox.style.backgroundColor = "red";
    notificationBox.style.border = "1px solid #ccc";
    notificationBox.style.padding = "10px";
    notificationBox.style.borderRadius = "5px";
    notificationBox.style.color = "white";



    // Hide notification after 3 seconds
    setTimeout(function () {
        notificationBox.style.display = "none";
    }, 2000);

    // Remove the cart box when clicking the trash icon
    cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
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
    
    var price = parseFloat (priceElement.innerText.replace("$", ""));

    total = total + price ;
    document.getElementsByClassName('total-price')[0].innerHTML = "$"+ total;
    }
    document.getElementById('total_price').value = total;
    // Extract the total price from the HTML content
    console.log(total);
    // Send the total price to the PHP backend via AJAX
    $.ajax({
        url: "checkout.php",
        method: "POST",
        data: { "total_price": total }
      })

}

document.querySelector('.btn-buy').addEventListener('click', function(event) {
    updatetotal(); // Make sure this updates the hidden input value
});




