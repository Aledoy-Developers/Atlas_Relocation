<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas Relocation Services - Premium Lounge</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/lounge.css">

    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/atlas-removebg-preview.png" alt="Atlas Logo" height="100px" width="120px">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="services.php">OVERVIEW</a></li>
                                <li><a class="dropdown-item" href="lounge.php">ATLAS CONNECT VIP ZONE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                    <a href="membership.php" class="btn btn-style ms-lg-2">BOOK NOW</a>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->
    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Background Image -->
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1627750673161-02af15c7c722?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBhaXJwb3J0JTIwbG91bmdlfGVufDF8fHx8MTc2MjkzMjMzNHww&ixlib=rb-4.1.0&q=80&w=1080" alt="Luxury lounge interior">
            <div class="hero-gradient-overlay"></div>
        </div>

        <!-- Content -->
        <div class="hero-content">
            <h1 class="hero-title">Relax Before You Fly</h1>
            <p class="hero-subtitle">Experience premium comfort while we handle the rest.</p>
            <p class="hero-description">
                At Atlas Relocation Services, we believe travel should begin in comfort. 
                Our exclusive lounge offers a serene space where clients can unwind, refresh, 
                or catch up on work while awaiting their next transfer. Enjoy complimentary 
                refreshments, high-speed Wi-Fi, and personalized service designed for your 
                relaxation and convenience.
            </p>
            
            <div class="hero-buttons">
                <button class="btn btn-primary-custom"><a href="booknow.php" class="text-white">Book Lounge Access</a></button>
                <button class="btn btn-secondary-custom" data-bs-toggle="modal" data-bs-target="#loungesModal">
                    Learn More
                </button>
            </div>

            <div class="decorative-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <!-- Bottom Fade Effect -->
        <div class="bottom-fade"></div>
    </section>

    <!-- Lounges Modal -->
    <div class="modal fade" id="loungesModal" tabindex="-1" aria-labelledby="loungesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                    <h2 class="modal-title" id="loungesModalLabel">Our Premium Lounge</h2>
                    <p class="modal-subtitle">Experience the perfect space for your comfort and convenience</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row g-4">
                            <!-- VIP Lounge -->
                            <div class="col-12">
                                <div class="lounge-card">
                                    <div class="lounge-image-wrapper">
                                        <img src="https://images.unsplash.com/photo-1585548807335-e0bfa52ac220?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aXAlMjBsb3VuZ2UlMjBzZWF0aW5nfGVufDF8fHx8MTc2MjkzMjY4MXww&ixlib=rb-4.1.0&q=80&w=1080" 
                                             alt="VIP Lounge" 
                                             class="lounge-image">
                                        <div class="lounge-image-overlay"></div>
                                        <h3 class="lounge-name">VIP Lounge</h3>
                                    </div>
                                    <div class="lounge-body">
                                        <p class="lounge-description">
                                            Ultimate luxury experience with personalized concierge service
                                        </p>
                                        <ul class="lounge-features">
                                            <li class="lounge-feature">
                                                <div class="feature-dot"></div>
                                                <span class="feature-text">Private Suites</span>
                                            </li>
                                            <li class="lounge-feature">
                                                <div class="feature-dot"></div>
                                                <span class="feature-text">Personal Concierge</span>
                                            </li>
                                            <li class="lounge-feature">
                                                <div class="feature-dot"></div>
                                                <span class="feature-text">Fine Dining</span>
                                            </li>
                                        </ul>
                                        <button class="btn btn-select-lounge">Select Lounge</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
