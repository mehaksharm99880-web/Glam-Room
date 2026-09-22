<?php
$pageTitle = 'Home | The Glam Room';
include 'includes/header.php';
?>

    <main class="container main-content">
        <section class="hero">
            <div>
                <p class="hero-tag">  Glam beuty studio</p>
                <h1>Welcome to The Glam Room</h1>
                <p>Experience bespoke makeup styling for every occasion. From natural glow to glamorous evening looks, our services create beauty that feels modern, confident, and uniquely you.</p>
                <div class="hero-actions">
                    <a class="btn-primary" href="contact.php">Start Now</a>
                    <button class="btn-secondary" id="learnMoreBtn" type="button">Learn More</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1511988617509-a57c8a288659?auto=format&fit=crop&w=900&q=80" alt="Makeup artist" />
            </div>
        </section>

        <section id="services" class="section-space">
            <div class="section-title">
                <h2>Services</h2>
            </div>
            <div class="features">
                <div class="feature-card">
                    <h3>Everyday Beauty</h3>
                    <p>Soft, radiant looks for daily wear that enhance your natural features with effortless charm.</p>
                </div>
                <div class="feature-card">
                    <h3>Party Glam</h3>
                    <p>Bespoke makeup for special nights out, events, and celebrations with bold color and dramatic finishes.</p>
                </div>
                <div class="feature-card">
                    <h3>Wedding Makeup</h3>
                    <p>Long-lasting bridal looks designed to glow through every smile, photo, and unforgettable moment.</p>
                </div>
                <div class="feature-card">
                    <h3>Makeup Lessons</h3>
                    <p>Personal coaching focused on contouring, eyes, brows, and routine tips for everyday confidence.</p>
                </div>
            </div>
        </section>

        <section id="carousel" class="section-space">
            <div class="section-title">
                <h2>Featured Looks</h2>
            </div>
            <div class="carousel">
                <button class="carousel-btn" id="prevSlide" type="button">&#10094;</button>
                <div class="carousel-stage">
                    <div class="carousel-slide active">
                        <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=1200&q=80" alt="Natural glow makeup look">
                        <div class="carousel-caption">
                            <h3>Natural Glow</h3>
                            <p>Fresh, radiant makeup for daily elegance and effortless confidence.</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=1200&q=80" alt="Evening glam makeup look">
                        <div class="carousel-caption">
                            <h3>Evening Glam</h3>
                            <p>Bold lips, soft shimmer, and polished definition for evening events.</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80" alt="Bridal finish makeup look">
                        <div class="carousel-caption">
                            <h3>Bridal Finish</h3>
                            <p>Long-lasting bridal styling designed to stay flawless all day.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn" id="nextSlide" type="button">&#10095;</button>
            </div>
            <div class="carousel-dots" id="carouselDots"></div>
        </section>

        <section id="gallery" class="section-space">
            <div class="section-title">
                <h2>Gallery</h2>
            </div>
            <div class="gallery">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=800&q=80" alt="Soft pink makeup" />
                <img src="https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=800&q=80" alt="Glam makeup look" />
                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=800&q=80" alt="Makeup palette" />
                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=80" alt="Cosmetic products" />
            </div>
        </section>

        <section id="contact" class="section-space">
            <div class="section-title">
                <h2>Contact</h2>
            </div>
            <div class="feature-card contact-card">
                <div>
                    <p>Ready to book your personalized makeup experience? Reach out for a one-of-a-kind beauty session.</p>
                    <p class="contact-detail">hello@makeup.com</p>
                    <p>Call or text: <span class="contact-phone">(123) 456-7890</span></p>
                </div>

                <div class="contact-form">
                    <a class="btn-primary text-center" href="contact.php">Send Request</a>
                </div>
            </div>
        </section>

    </main>

<?php include 'includes/footer.php'; ?>
