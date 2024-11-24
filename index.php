<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeterna Furnitures - Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css">

    <!-- JS -->
    <script src="./js/index.js"></script>

    <!-- CDNs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class="flex-res">
        <div class="image-container logo">
            <img src="./images/logo-dark.png" alt="Aeterna Logo">
        </div>
        <nav class="flex-res">
            <ul class="flex-res">
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">Our Products</a></li>
                <li><a href="#">Interior Design Tips</a></li>
                <li><a href="#">Testimonials</a></li>
            </ul>
            <a href="#" class="cta btn-yellow">Contact Us</a>
        </nav>

    </header>

    <section class="hero">
        <strong>
            <h1>Aeterna Furnitures &dash; Crafting <span>Timeless Elegance</span></h1>
        </strong>
        <p>At Aeterna, we blend artisanal craftsmanship with timeless design, creating pieces that elevate your space, ensuring that your furniture is not just a part of your home—but a part of your legacy.</p>
        <a href="#" class="btn-yellow">Explore the Collection →</a>
        <div class="image-container">
            <img src="./images/hero-image.webp" alt="Hero Image">
        </div>
        <a href="#" class="shop-now">
            <span>Shop Now →</span>
        </a>
        <div class="bg-ellipse hero-bg-ellipse"></div>
    </section>

    <section class="featured-cards">
        <div class="bg-ellipse featured-bg-ellipse"></div>
        <div class="card item-1">
            <h4>Featured</h4>
            <h3>Modern Swoon Lounge Chair</h3>
            <p>Sink into elegance with the Swoon Lounge Chair—an exquisite blend of comfort and modern sophistication.</p>
            <h3 class="price">R10 750.00</h3>
            <a href="#" class="btn-yellow">Place Order</a>
            <div class="image-container">
                <img src="./images/featured-chair.webp" alt="Featured Item">
            </div>
        </div>
        <div class="card item-2">
            <h4>Featured</h4>
            <h3>Aeterna Loveseat</h3>
            <p>This masterpiece is meticulously crafted with plush cushioning, deep seating, and a solid hardwood frame that promises durability and luxury.</p>
            <h3 class="price">R11 500.00</h3>
            <a href="#" class="btn-green">Place Order</a>
            <div class="image-container">
                <img src="./images/featured-sofa.webp" alt="Aeterna Furnitures Featured Item">
            </div>
        </div>

    </section>

    <hr>

    <section class="about">
        <div class="bg-ellipse about-bg-ellipse"></div>
        <h2>Who We Are</h2>
        <div class="about-content flex-res">
            <div class="image-container">
                <img src="./images/about-image.webp" alt="Aeterna Furnitures About Image">
            </div>
            <div class="copy">
                <p>Established in 2021, Aeterna Furnitures was born from a passion for creating timeless pieces that elevate the everyday experience. We believe that furniture is more than just décor—it&apos;s an essential part of your life, shaping how you relax, work, and connect with your surroundings.</p>
                <p>Each piece is crafted with careful attention to both design and comfort, ensuring that our furniture not only enhances the beauty of your space but also transforms how you live in it. From the moment you sink into our luxurious sofas to the support of our handcrafted chairs, you'll feel the difference.</p>
                <p>When you invest in Aeterna, you&apos;re investing in more than just furniture—you&apos;re embracing a timeless experience, tailored for modern living, built to last a lifetime.</p>
                <a href="#" class="btn-yellow-open">Learn More →</a>
                <div class="bg-ellipse about-copy-bg-ellipse"></div>
            </div>
        </div>
    </section>

    <hr>

    <section class="products">
        <div class="title-menu flex-res">
            <h2>Our products</h2>
            <div class="menu">
                <button id="selector" class="selector-btn current">All</button>
                <button id="selector" class="selector-btn">Chairs</button>
                <button id="selector" class="selector-btn">Sofas</button>
                <button id="selector" class="selector-btn">Tables</button>
            </div>
        </div>
    </section>

    <section class="time-offer">
        <div class="heading">
            <h2 class="title-xl">Get <span>25% Off</span></h2>
            <p>On your first order. Limited Time Offer</p>
        </div>
        <div id="counter" class="counter">
            <h3>Time Remaining</h3>
            <div class="time flex">
                <div class="days">
                    <p class="digits">00</p>
                    <p class="name">Days</p>
                </div>
                <div class="hours">
                    <p class="digits">00</p>
                    <p class="name">Hours</p>
                </div>
                <div class="minutes">
                    <p class="digits">00</p>
                    <p class="name">Minutes</p>
                </div>
                <div class="seconds">
                    <p class="digits">00</p>
                    <p class="name">Seconds</p>
                </div>
            </div>
        </div>
        <div class="btn-yellow">Place Order Now!</div>
        <div class="image-container">
            <img src="./images/ad-image.webp" alt="Aeterna Furnitures Limited Offer">
        </div>
    </section>
</body>

</html>