<?php include 'header.php'; ?>

<div class="hero">
    <h1>Welcome to ClinicEase 🏥</h1>
    <p>Book your clinic appointment online — fast, easy, and stress-free.</p>
    <a href="services.php" class="btn">View Our Services</a>
</div>

<div class="container">

    <h2 class="section-title">Why Choose Us?</h2>
    <div class="cards">
        <?php
        $features = [
            ["icon" => "📅", "title" => "Easy Booking",      "desc" => "Book your appointment in minutes without waiting in line."],
            ["icon" => "👨‍⚕️", "title" => "Expert Doctors",  "desc" => "Our team includes certified specialists in multiple fields."],
            ["icon" => "💊", "title" => "Medication Tracking","desc" => "Track your prescriptions and medication schedules easily."],
        ];

        foreach ($features as $f) {
            echo "<div class='card'>";
            echo "<div class='icon'>{$f['icon']}</div>";
            echo "<h3>{$f['title']}</h3>";
            echo "<p>{$f['desc']}</p>";
            echo "</div>";
        }
        ?>
    </div>

    <h2 class="section-title" style="margin-top:50px;">Clinic Hours</h2>
    <table>
        <tr>
            <th>Day</th><th>Morning</th><th>Evening</th><th>Status</th>
        </tr>
        <?php
        $schedule = [
            ["Sunday",    "9:00 AM – 1:00 PM", "4:00 PM – 8:00 PM", "Open"],
            ["Monday",    "9:00 AM – 1:00 PM", "4:00 PM – 8:00 PM", "Open"],
            ["Tuesday",   "9:00 AM – 1:00 PM", "4:00 PM – 8:00 PM", "Open"],
            ["Wednesday", "9:00 AM – 1:00 PM", "Closed",            "Partial"],
            ["Thursday",  "9:00 AM – 1:00 PM", "4:00 PM – 8:00 PM", "Open"],
            ["Friday",    "Closed",             "Closed",            "Closed"],
            ["Saturday",  "10:00 AM – 2:00 PM","Closed",            "Partial"],
        ];

        for ($i = 0; $i < count($schedule); $i++) {
            $day     = $schedule[$i][0];
            $morning = $schedule[$i][1];
            $evening = $schedule[$i][2];
            $status  = $schedule[$i][3];

            if ($status == "Closed")       $color = "#fff5f5";
            elseif ($status == "Partial")  $color = "#fffbeb";
            else                           $color = "#fff";

            echo "<tr style='background-color:{$color};'>";
            echo "<td><strong>{$day}</strong></td>";
            echo "<td>{$morning}</td>";
            echo "<td>{$evening}</td>";
            echo "<td>{$status}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2 class="section-title" style="margin-top:50px;">Quick Links</h2>
    <ul style="list-style:none; display:flex; gap:15px; flex-wrap:wrap; justify-content:center;">
        <?php
        $links = [
            "About Us"     => "about.php",
            "Our Services" => "services.php",
            "Our Doctors"  => "doctor.php?id=1",
            "Contact Us"   => "contact.php",
        ];
        foreach ($links as $label => $url) {
            echo "<li><a href='{$url}' class='btn'>{$label}</a></li>";
        }
        ?>
    </ul>

</div>

<?php include 'footer.php'; ?>
