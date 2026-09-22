$(function () {
    const themeKey = 'theme';
    let currentSlide = 0;

    function applyTheme(isDark) {
        $('body').toggleClass('dark-theme', isDark);
        $('#themeToggle').text(isDark ? '☀️ Light Mode' : '🌙 Dark Mode');
    }

    function showAlert(message, type = 'success') {
        const alert = $('<div class="alert ' + type + '"></div>').text(message);
        $('#alertContainer').append(alert);
        setTimeout(function () {
            alert.fadeOut(300, function () {
                $(this).remove();
            });
        }, 3000);
    }

    function validateEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    function openModal(modalId) {
        $(modalId).addClass('is-open').attr('aria-hidden', 'false');
    }

    function closeModal(modalId) {
        $(modalId).removeClass('is-open').attr('aria-hidden', 'true');
    }

    const savedTheme = localStorage.getItem(themeKey);
    if (savedTheme === 'dark') {
        applyTheme(true);
    } else {
        applyTheme(false);
    }

    $('#themeToggle').on('click', function () {
        const isDark = !$('body').hasClass('dark-theme');
        applyTheme(isDark);
        localStorage.setItem(themeKey, isDark ? 'dark' : 'light');
    });

    $('#learnMoreBtn').on('click', function () {
        showAlert('This site combines styling, interaction, and PHP-ready form handling in one responsive experience.', 'success');
    });

    $('.js-book-now').on('click', function () {
        openModal('#bookingModal');
    });

    $('#openLoginModal').on('click', function () {
        openModal('#signInModal');
    });

    $('#openBookingModal').on('click', function () {
        openModal('#bookingModal');
    });

    $('.modal-close').on('click', function () {
        const modalId = '#' + $(this).closest('.modal').attr('id');
        closeModal(modalId);
    });

    $('.modal').on('click', function (event) {
        if (event.target === this) {
            closeModal('#' + $(this).attr('id'));
        }
    });

    $('#signInForm').on('submit', function (event) {
        event.preventDefault();
        const identifier = $('#signInIdentifier').val().trim();
        const password = $('#signInPassword').val();

        if (!identifier || !password) {
            showAlert('Please complete both fields before signing in.', 'error');
            return;
        }

        const validIdentifier = identifier.includes('@') ? validateEmail(identifier) : identifier.length >= 3;
        if (!validIdentifier || password.length < 4) {
            showAlert('Please enter a valid email/username and a password with at least 4 characters.', 'error');
            return;
        }

        showAlert('Successfully signed in!', 'success');
        this.reset();
        closeModal('#signInModal');
    });

    $('#bookingForm').on('submit', function (event) {
        event.preventDefault();
        const name = $('#bookingName').val().trim();
        const email = $('#bookingEmail').val().trim();
        const service = $('#bookingService').val().trim();

        if (!name || !email || !service) {
            showAlert('Please complete all booking fields.', 'error');
            return;
        }

        if (!validateEmail(email)) {
            showAlert('Please enter a valid email address.', 'error');
            return;
        }

        showAlert('Booking request received. We will contact you soon!', 'success');
        this.reset();
        closeModal('#bookingModal');
    });

    if ($('.carousel-slide').length) {
        const slides = $('.carousel-slide');
        const dots = $('#carouselDots');

        slides.each(function (index) {
            dots.append('<button class="carousel-dot" type="button" aria-label="Go to slide ' + (index + 1) + '"></button>');
        });

        function showSlide(index) {
            currentSlide = (index + slides.length) % slides.length;
            slides.removeClass('active');
            $('.carousel-dot').removeClass('active');
            slides.eq(currentSlide).addClass('active');
            $('.carousel-dot').eq(currentSlide).addClass('active');
        }

        $('.carousel-dot').on('click', function () {
            showSlide($(this).index());
        });

        $('#prevSlide').on('click', function () {
            showSlide(currentSlide - 1);
        });

        $('#nextSlide').on('click', function () {
            showSlide(currentSlide + 1);
        });

        showSlide(0);
    }
});
