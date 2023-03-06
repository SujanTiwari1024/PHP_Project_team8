<?php include'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<style>

    #myBtn{
    position: fixed;
    float: right;
    margin-right: 20px;
    align-self: flex-end;
    cursor:pointer;
    }

/* The Modal (background) */
.modal {
  display: none; 
  position: fixed;
  padding-top: 20px; 
  right: 0;
  bottom: 0;
  width: 50%; 
  height: auto; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4);
  color: black;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  border-radius: 5px;
  width: 80%;
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

   <div class="order-content">
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Shopping Cart</button>
        <div class="order-title">
            <h1>Order From Our Menu</h1>
        </div>
<div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div>
    <h2>Shopping Cart</h2>
    <p id="cart-list"></p>
    <p>Total: <span id="total">€0</span></p>
    <button onclick="reloadPage()">Buy</button>
    </div>
  </div>

</div>

</div>
        <div class="order-rows">
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/salad.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(0)">-</button>
                <p> 3.30 €</p>
                <button onclick="addToCart(0, 1)">+</button>
                </div>
                
                <h2>Salad Bowl</h2>
            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/Meal-Plan-plate-protein.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(1)">-</button>
                <p>10.00 €</p>
                <button onclick="addToCart(1, 1)">+</button>
                </div>
                <h2>Fresh Meat with Rice</h2>
            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/mixveg.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(2)">-</button>
                <p>6.30 €</p>
                <button onclick="addToCart(2, 1)">+</button>
                </div>
                <h2>Vegetable Mix</h2>
            </div>

            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/cake.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(3)">-</button>
                <p>3.00 €</p>
                <button onclick="addToCart(3, 1)">+</button>
                </div>
                <h2>Cake slice</h2>

            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/cupcake.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(4)">-</button>
                <p>1.50 €</p>
                <button onclick="addToCart(4, 1)">+</button>
                </div>
                <h2>Cup Cake</h2>
            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/deserts1.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(5)">-</button>
                <p>9.50 €</p>
                <button onclick="addToCart(5, 1)">+</button>
                </div>
                <h2>Ice Cream Tray</h2>
            </div>

            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/bobatea.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(6)">-</button>
                <p>3.00 €</p>
                <button onclick="addToCart(6, 1)">+</button>
                </div>
                <h2>Boba-Tea</h2>

            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/Coke.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(7)">-</button>
                <p>1.00 €</p>
                <button onclick="addToCart(7, 1)">+</button>
                </div>
                <h2>Coke</h2>
            </div>
            <div class="order-rows-img">
                <div class="order-rows-img-container">
                    <img src="../assets/images/mixjuice.png" />
                </div>
                <div class="order-rows-button">
                <button onclick="removeFromCart(8)">-</button>
                <p>1.50 €</p>
                <button onclick="addToCart(8, 1)">+</button>
                </div>
                <h2>Smoothie</h2>
            </div>
        </div>
        
    </div>
    </div>

    <script>
      // Define items and their prices
      const items = [
        { name: "Salad Bowl", price: 3.30 },
        { name: "Fresh Meat with Rice", price: 10 },
        { name: "Vegetable Mix", price: 6.30 },
        { name: "Cake slice", price: 3 },
        { name: "Cup Cake", price: 1.5 },
        { name: "Ice Cream Tray", price: 9.5 },
        { name: "Boba-Tea", price: 3 },
        { name: "Coke", price: 1 },
        { name: "Smoothie", price: 1.5 },
      ];

      // Initialize cart as empty array
      let cart = [];

      // Add item to cart
      function addToCart(itemIndex, quantity) {
        let item = items[itemIndex];
        let cartItem = cart.find((cartItem) => cartItem.item === item);
        if (cartItem) {
          cartItem.quantity += quantity;
        } else {
          cartItem = { item: item, quantity: quantity };
          cart.push(cartItem);
        }
        updateCart();
      }

      // Remove item from cart
      function removeFromCart(itemIndex) {
        let item = items[itemIndex];
        let cartItem = cart.find((cartItem) => cartItem.item === item);
        if (cartItem) {
          if (cartItem.quantity > 0) {
            cartItem.quantity--;
            if (cartItem.quantity === 0) {
              cart = cart.filter((cartItem) => cartItem !== item);
            }
          }
        }
        updateCart();
      }

      // Update cart display
      function updateCart() {
        let cartList = document.getElementById("cart-list");
        let total = 0;
        cartList.innerHTML = "";
        cart.forEach((cartItem) => {
          let item = cartItem.item;
          let quantity = cartItem.quantity;
          let price = item.price * quantity;
          total += price;
          let li = document.createElement("li");
          li.innerHTML = `${item.name} x ${quantity} = €${price}`;
          cartList.appendChild(li);
        });
        document.getElementById("total").innerHTML = `€${total}`;
      }

      // Reload the page and show an alert message
      function reloadPage() {
        location.reload();
        window.alert("Items bought Successfully !!");
      }


      // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
     modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
     modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
    }
    </script>
<?php include'footer.php'; ?>