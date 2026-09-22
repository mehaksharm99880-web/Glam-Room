    <footer>
        <div class="container">
            <p>&copy; 2026 The Glam Room. Pink beauty for every moment.</p>
        </div>
    </footer>

    <div id="signInModal" class="modal" aria-hidden="true">
        <div class="modal-content">
            <button class="modal-close" id="closeSignInModal" type="button" aria-label="Close sign in dialog">&times;</button>
            <h3>Sign In</h3>
            <p class="modal-note">This is a safe demo. Your password is not stored or transmitted.</p>
            <form id="signInForm" novalidate>
                <input type="text" id="signInIdentifier" name="identifier" placeholder="Email or username" required>
                <input type="password" id="signInPassword" name="password" placeholder="Password" required>
                <button type="submit" class="btn-primary">Sign In</button>
            </form>
        </div>
    </div>

    <div id="bookingModal" class="modal" aria-hidden="true">
        <div class="modal-content">
            <button class="modal-close" id="closeBookingModal" type="button" aria-label="Close booking dialog">&times;</button>
            <h3>Book a Session</h3>
            <p class="modal-note">Reserve a beauty session with our team. This demo form validates your details before submission.</p>
            <form id="bookingForm" novalidate>
                <input type="text" id="bookingName" name="bookingName" placeholder="Your name" required>
                <input type="email" id="bookingEmail" name="bookingEmail" placeholder="Your email" required>
                <input type="text" id="bookingService" name="bookingService" placeholder="Service" required>
                <button type="submit" class="btn-primary">Reserve</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
