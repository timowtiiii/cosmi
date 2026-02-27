<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project | Modern Web Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="navbar">
        <div class="container">
            <div class="logo">COSMI<span>BEAUTII</span></div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#contact" class="btn-cta">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Discover Your <span>Radiant</span> Beauty.</h1>
            <p>Explore our collection of premium skincare and beauty products.</p>
            <a href="#products" class="btn-primary">Shop Now</a>
        </div>
    </section>

    <section id="products" class="services">
        <div class="container">
            <h2 class="section-title">Our Products</h2>
            <div class="grid">
                <div class="card">
                    <img src="https://placehold.co/300x300/1a1a1a/ffcc00" alt="Product 1" style="width:100%; border-radius: 15px; margin-bottom: 20px;">
                    <h3>Radiant Glow Serum</h3>
                    <p>A lightweight serum that boosts radiance and evens out skin tone.</p>
                    <p style="font-size: 1.2rem; font-weight: 600; color: var(--accent); margin-top: 10px;">$45.00</p>
                </div>
                <div class="card">
                    <img src="https://placehold.co/300x300/1a1a1a/ffcc00" alt="Product 2" style="width:100%; border-radius: 15px; margin-bottom: 20px;">
                    <h3>Hydrating Cream</h3>
                    <p>A rich and nourishing cream that provides long-lasting hydration.</p>
                    <p style="font-size: 1.2rem; font-weight: 600; color: var(--accent); margin-top: 10px;">$55.00</p>
                </div>
                <div class="card">
                    <img src="https://placehold.co/300x300/1a1a1a/ffcc00" alt="Product 3" style="width:100%; border-radius: 15px; margin-bottom: 20px;">
                    <h3>Cleansing Foam</h3>
                    <p>A gentle yet effective cleansing foam that removes impurities.</p>
                    <p style="font-size: 1.2rem; font-weight: 600; color: var(--accent); margin-top: 10px;">$25.00</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <h3>COSMI<span>BEAUTII</span></h3>
                    <p>Elevating beauty with nature's finest ingredients.</p>
                </div>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("2026"); ?> COSMI BEAUTII. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
