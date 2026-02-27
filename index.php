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
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact" class="btn-cta">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Innovative <span>Solutions</span> for the Web.</h1>
            <p>Crafting high-performance websites with clean code and modern aesthetics.</p>
            <a href="#services" class="btn-primary">Explore More</a>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">What We Offer</h2>
            <div class="grid">
                <div class="card">
                    <i class="fas fa-layer-group"></i>
                    <h3>Full-Stack Dev</h3>
                    <p>Robust PHP backends paired with interactive JavaScript interfaces.</p>
                </div>
                <div class="card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Your website will look perfect on every device, from mobile to desktop.</p>
                </div>
                <div class="card">
                    <i class="fas fa-search-dollar"></i>
                    <h3>SEO Optimized</h3>
                    <p>Built with best practices to ensure your site is found by the right people.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <h3>PRO<span>JECT</span></h3>
                    <p>Defining the standard for modern web development.</p>
                </div>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("2026"); ?> Project. Developed with PHP & passion.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>