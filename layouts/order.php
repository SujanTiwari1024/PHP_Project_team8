<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <h1>This Order page</h1>


    <div class="order-content">
    <div class="order-title">
        <h1>Online Orders at Cool Restaurant</h1>
    </div>
    <div class="order-rows">
        <div class="order-rows-img">
            <div class="order-rows-img-container">
                <img src="image/salad.png"/>
            </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>3.30 €</h3>
            <h2>Salad Bowl</h2>

        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/Meal-Plan-plate-protein.png"/>
        </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>10.00 €</h3>
            <h2>Fresh Meat with Rice</h2>
        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/mixveg.png"/></div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>6.30 €</h3>
            <h2>Vegetable Mix</h2>
        </div>
    </div>

    <div class="order-rows">
        <div class="order-rows-img">
            <div class="order-rows-img-container">
                <img src="image/cake.png"/>
            </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>3.00 €</h3>
            <h2>Cake slice</h2>

        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/cupcake.png"/>
        </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>1.50 €</h3>
            <h2>Cup Cake</h2>
        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/deserts1.png"/></div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>9.50 €</h3>
            <h2>Ice Cream Tray</h2>
        </div>
    </div>

    <div class="order-rows">
        <div class="order-rows-img">
            <div class="order-rows-img-container">
                <img src="image/bobatea.png"/>
            </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>3.00 €</h3>
            <h2>Boba-Tea</h2>
        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/Coke.png"/>
        </div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>1.00 €</h3>
            <h2>Coke</h2>
        </div>
        <div class="order-rows-img">
            <div class="order-rows-img-container">
            <img src="image/mixjuice.png"/></div>
            <div class="order-rows-button">
                <button>-</button>
                <button>Add</button>
                <button>+</button>
            </div>
            <h3>1.50 €</h3>
            <h2>Smoothie</h2>
        </div>
    </div>
        
    </div>

    <script>
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
      
        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
      </script>

</body>
</html>