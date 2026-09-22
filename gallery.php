<?php
$pageTitle = 'Gallery | The Glam Room';
include 'includes/header.php';
?>

<main class="container main-content">
    <section class="section-space">
        <div class="section-title">
            <h2>Gallery</h2>
        </div>

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Natural glow makeup look">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Evening glam makeup look">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Bridal finish makeup look">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="section-space">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <img class="img-fluid rounded-4 shadow-sm gallery-thumb" src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=800&q=80" alt="Soft pink makeup">
            </div>
            <div class="col-md-6 col-lg-3">
                <img class="img-fluid rounded-4 shadow-sm gallery-thumb" src="https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=800&q=80" alt="Glam makeup look">
            </div>
            <div class="col-md-6 col-lg-3">
                <img class="img-fluid rounded-4 shadow-sm gallery-thumb" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=800&q=80" alt="Makeup palette">
            </div>
            <div class="col-md-6 col-lg-3">
                <img class="img-fluid rounded-4 shadow-sm gallery-thumb" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=80" alt="Cosmetic products">
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
