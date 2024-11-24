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

    <hr>

    <section class="blog-tips">
        <h2>Interior Design Tips</h2>
        <div class="blog-cards">
            <div class="card">
                <div class="heading">
                    <div class="image-container">
                        <img src="./images/article-bed.webp" alt="Tips for an elegant home" title="An Elegant Home">
                    </div>
                    <h3>5 Timeless Interior Design Tips for a Classic and Elegant Home</h3>
                </div>
                <div class="blog-body">
                    <p>Creating a home that feels timeless is more than just following trends—it&apos;s about making design choices that will stand the test of time. Here are five key tips to help you achieve a space that feels elegant, classic, and enduring...</p>
                    <a href="#">More Tips On An Elegant Home →</a>
                </div>
            </div>
            <div class="card">
                <div class="heading">
                    <div class="image-container">
                        <img src="./images/article-chair.webp" alt="Tips for a compact living space" title="A Compact Living Space">
                    </div>
                    <h3>Small Space, Big Impact: Interior Design Tips for Compact Living</h3>
                </div>
                <div class="blog-body">
                    <p>Just because your living space is small doesn&apos;t mean it can&apos;t be beautifully designed. With the right choices, you can turn a compact space into a stylish, functional haven. Here&apos;s how to make the most of every square inch...</p>
                    <a href="#">More Tips On Compact Living →</a>
                </div>
            </div>
            <div class="card">
                <div class="heading">
                    <div class="image-container">
                        <img src="./images/article-couch.webp" alt="Tips for choosing statement pieces" title="Statement Piecies That Transform Your Home">
                    </div>
                    <h3>How to Select the Perfect Statement Piece for Your Living Room</h3>
                </div>
                <div class="blog-body">
                    <p>The right statement piece can completely transform your living room, adding personality and charm. But selecting the perfect one can be tricky. Here&apos;s how to choose a statement furniture piece that fits your style...</p>
                    <a href="#">More Tips On Statement Pieces →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="bg-ellipse subscribe-bg-ellipse"></div>
        <hr>
        <div class="info">
            <h3>Consider subscribing to our mailings list for more tips</h3>
            <form id="subscriber-form" class="form">
                <div class="input">
                    <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Enter Your Email Address" required onkeyup="validateEmail(this, 'email-error');">
                    <input type="hidden" name="bot-check" id="bot-check">
                    <button class="submit-btn btn-green" id="newsletter-submit">
                        <span>Sign Me Up!</span>
                        <img id="newsletter-loader" class="submit-btn-loader" src="./images/loader.gif" alt="Button Loader" title="Loading..." style="display: none;">
                    </button>
                </div>
                <p class="error" id="subscriber-email-error"></p>
            </form>
            <div class="image-container">
                <img src="./images/megaphone_.png" alt="Megaphone">
            </div>
        </div>
    </section>

    <hr>

    <section class="reviews">
        <h2>What Our Customers Say</h2>
        <div class="review-cards">
            <div class="card">
                <h3>A Beautiful Blend of Comfort and Style</h3>
                <p>I purchased the Monaco Heritage Sofa, and it has completely transformed my living room. The craftsmanship is impeccable, and the quality of the materials is evident from the moment you sit down. It's not just a sofa—it&apos;s a statement piece that combines comfort and style effortlessly. I&apos;m constantly receiving compliments from guests, and I couldn&apos;t be happier with my purchase.</p>
                <div class="client">
                    <h3>Sarah W.</h3>
                    <p>Interior Design Enthusiast</p>
                </div>
                <div class="stars flex">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="card">
                <h3>Timeless Quality that Lasts</h3>
                <p>The Emerson Lounge Chair I ordered from Aeterna is now my favorite piece in the house. It&apos;s beautifully crafted and unbelievably comfortable. What I love most is that it feels timeless—like something I&apos;ll keep for decades, and it will never go out of style. The attention to detail in the stitching and the materials used are top-notch. I can&apos;t recommend Aeterna Furnitures enough!</p>
                <div class="client">
                    <h3>Mathapelo M.</h3>
                    <p>Homeowner</p>
                </div>
                <div class="stars flex">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="card">
                <h3>A Masterpiece for My Home</h3>
                <p>Working with Aeterna Furnitures was a dream. I had a custom piece designed—a dining table—and the entire experience, from the design process to delivery, was seamless. The finished product exceeded my expectations. It&apos;s truly a masterpiece that brings warmth and elegance to our dining room. I appreciate their dedication to creating timeless, high-quality furniture.</p>
                <div class="client">
                    <h3>Lena G.</h3>
                    <p>Custom Furniture Client</p>
                </div>
                <div class="stars flex">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="contact-us">
        <h2>Talk To Us</h2>
        <p>Let us know how we can assist you in turning your house into a uniquely-styled classic home.</p>
        <div class="form-section flex-res">
            <div class="image-container">
                <img src="./images/couch.webp" alt="Styled Couch with Throw">
            </div>
            <form class="form">
                <div class="input">
                    <input type="text" name="name" id="name" placeholder="Your Name *" required onkeyup="validateName(this, 'name-error');">
                    <div class="error" id="name-error"></div>
                </div>
                <div class="contact-email flex-res">
                    <div class="input">
                        <input type="tel" name="tel" id="tel" placeholder="Contact Number *" required onkeyup="validateTel(this, 'tel-error');">
                        <div class="error" id="tel-error"></div>
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="email" placeholder="Email Address *" required onkeyup="validateEmail(this, 'email-error');">
                        <div class="error" id="email-error"></div>
                    </div>
                </div>
                <div class="input">
                    <select name="service" id="service" class="select">
                        <option value="">-- Select Option --</option>
                        <option value="Custom Furniture Design">Custom Furniture Design</option>
                        <option value="Purchase and Delivery">Purchase and Delivery</option>
                        <option value="Quotation">Quotation(s)</option>
                        <option value="Review or Suggestion">Review / Suggestions</option>
                        <option value="Other">Other</option>
                    </select>
                    <span id="select-error" class="error"></span>
                </div>
                <div class="input">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Please give us more details..." required onkeyup="validateMessage(this, 'message-error')" style="padding-left: .5rem;"></textarea>
                    <span id="message-error" class="error"></span>
                </div>
                <div class="mailings-request flex">
                    <p>Would you like to sign up for free tips on furniture aesthetics and interior design? <span>Please tick the box</span></p>
                    <input type="checkbox" name="mailings-check" id="mailings-check" value="Yes">
                </div>
                <input type="hidden" name="bot-check" id="bot-check">
                <button class="submit-btn btn-yellow" id="contact-submit">
                    <span>Send Message</span>
                    <img id="contact-loader" class="submit-btn-loader" src="./images/loader.gif" alt="Button Loader" title="Loading..." style="display: none;">
                </button>
            </form>
        </div>
    </section>

    <?php require "./components/footer.php"; ?>

    <a href="#" class="whatsapp-icon" title="Chat with us on whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</body>

</html>