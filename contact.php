<?php include 'header.php'; ?>

<div class="container">
    <h1 class="section-title">Contact Us</h1>

    <div class="form-box">
        <h2>📩 Send Us a Message</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <select id="subject" name="subject">
                    <option value="">-- Select a subject --</option>
                    <option value="appointment">Book an Appointment</option>
                    <option value="inquiry">General Inquiry</option>
                    <option value="complaint">Complaint</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>

    <div class="about-box" style="margin-top:35px; text-align:center;">
        <h2>📍 Find Us</h2>
        <p>📌 Address: University of Petra, Amman, Jordan</p>
        <p>📞 Phone: +962 6 571 5000</p>
        <p>📧 Email: contact@clinicease.jo</p>
        <p>🕐 Working Hours: Sun–Thu, 9:00 AM – 8:00 PM</p>
    </div>
</div>

<?php include 'footer.php'; ?>
