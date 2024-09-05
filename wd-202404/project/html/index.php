<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shopper</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="index.html">Home</a>
            <a href="shop.html">Shop</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="login.html">Login/Signup</a>
            <div class="cart">
                <a href="#" id="cart-button">Cart</a>
                <div class="cart-popup" id="cart-popup">
                    <div class="cart-item">
                        <span>Apple</span>
                        <span>2*100</span>
                        <span>200</span>
                        <button class="remove">X</button>
                    </div>
                    <div class="cart-item">
                        <span>Apple</span>
                        <span>2*100</span>
                        <span>200</span>
                        <button class="remove">X</button>
                    </div>
                    <div class="cart-item">
                        <span>Apple</span>
                        <span>2*100</span>
                        <span>200</span>
                        <button class="remove">X</button>
                    </div>
                    <div class="cart-buttons">
                        <button id="view-cart">View Cart</button>
                        <button id="checkout">Checkout</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <aside>
            <div class="categories">
                <button>Featured</button>
                <button>Category A</button>
                <button>Category B</button>
                <button>Category C</button>
                <button>Category D</button>
                <button>All Categories</button>
            </div>
        </aside>
        <section class="slider" id="slider">
            <div class="slide"><img src="https://via.placeholder.com/800x300" alt="Slide 1"></div>
            <div class="slide"><img src="https://via.placeholder.com/800x300" alt="Slide 2"></div>
            <div class="slide"><img src="https://via.placeholder.com/800x300" alt="Slide 3"></div>
        </section>
        <section class="products">
            <h2>New Products</h2>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="1">Add</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="2">Add</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="3">Add</button>
            </div>
        </section>
        <section class="products">
            <h2>Featured Products</h2>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="4">Add</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="5">Add</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Product Image">
                <p>Apple</p>
                <p>$20</p>
                <button class="add-to-cart" data-product="6">Add</button>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright @ 2024 E-Shopper</p>
    </footer>
</body>
</html>
