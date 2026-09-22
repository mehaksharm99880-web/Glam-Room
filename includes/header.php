<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$pageTitle = $pageTitle ?? 'The Glam Room';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="The Glam Room is a boutique makeup studio offering glam, bridal, event and everyday beauty services.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="alertContainer" class="alert-container"></div>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand brand" href="index.php">The Glam Room</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-links">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage === 'about.php' ? 'active' : ''; ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage === 'services.php' ? 'active' : ''; ?>" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage === 'gallery.php' ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="auth-buttons">
                    <button id="themeToggle" class="theme-toggle" type="button">🌙 Dark Mode</button>
                    <button class="auth-btn auth-login" id="openLoginModal" type="button">Sign In</button>
                    <button class="auth-btn auth-signup" id="openBookingModal" type="button">Book Now</button>
                </div>
            </div>
        </nav>
    </header>
