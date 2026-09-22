<?php
$pageTitle = 'Contact | The Glam Room';
$message = '';
$showMessage = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $details = trim($_POST['details'] ?? '');

    if ($name === '' || $email === '' || $service === '' || $details === '') {
        $message = 'Please complete all contact fields before submitting.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
    } else {
        $message = "Thanks $name! Your request for $service has been received. We will contact you soon.";
    }

    $showMessage = true;
}

include 'includes/header.php';
?>

<main class="container main-content">
    <section class="section-space">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="feature-card h-100">
                    <p>Ready to book your personalized makeup experience? Reach out for a one-of-a-kind beauty session.</p>
                    <p class="contact-detail">hello@makeup.com</p>
                    <p>Call or text: <span class="contact-phone">(123) 456-7890</span></p>
                    <p>Location: Studio appointments available by request.</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="feature-card h-100">
                    <form method="post" action="contact.php" class="row g-3" id="contactForm" novalidate>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Your name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Your email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="col-12">
                            <label for="service" class="form-label">Service type</label>
                            <input type="text" class="form-control" id="service" name="service" value="<?php echo htmlspecialchars($_POST['service'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="col-12">
                            <label for="details" class="form-label">Tell us about your look</label>
                            <textarea class="form-control" id="details" name="details" rows="4" required><?php echo htmlspecialchars($_POST['details'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Send Request</button>
                        </div>
                    </form>

                    <?php if ($showMessage): ?>
                        <div class="php-message mt-3"><?php echo htmlspecialchars($message); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
