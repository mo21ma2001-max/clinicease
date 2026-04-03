<?php include 'header.php'; ?>

<div class="container">
    <h1 class="section-title">Our Services</h1>

    <?php
    define('CLINIC_NAME', 'ClinicEase');

    $services = [
        ["icon"=>"🫀","title"=>"Cardiology",      "desc"=>"Heart health checkups and ECG monitoring.",            "price"=>25, "duration"=>"45 min"],
        ["icon"=>"🦷","title"=>"Dentistry",        "desc"=>"Teeth cleaning, fillings, and oral checkups.",         "price"=>20, "duration"=>"30 min"],
        ["icon"=>"👁️","title"=>"Ophthalmology",   "desc"=>"Eye exams, vision correction, and lens prescriptions.","price"=>20, "duration"=>"30 min"],
        ["icon"=>"🧠","title"=>"Neurology",        "desc"=>"Brain and nervous system consultations.",              "price"=>35, "duration"=>"60 min"],
        ["icon"=>"🦴","title"=>"Orthopedics",      "desc"=>"Bone and joint pain treatment and X-ray reviews.",     "price"=>30, "duration"=>"45 min"],
        ["icon"=>"💊","title"=>"General Medicine", "desc"=>"General health checkups, prescriptions, and referrals.","price"=>15, "duration"=>"20 min"],
    ];

    echo "<div class='cards'>";
    foreach ($services as $s) {
        echo "<div class='card'>";
        echo "<div class='icon'>{$s['icon']}</div>";
        echo "<h3>{$s['title']}</h3>";
        echo "<p>{$s['desc']}</p>";
        echo "<p style='margin-top:12px;'><strong style='color:#1a5276;'>💰 {$s['price']} JOD</strong> &nbsp;|&nbsp; ⏱ {$s['duration']}</p>";
        echo "</div>";
    }
    echo "</div>";

    $prices = array_column($services, 'price');
    sort($prices);
    $count  = count($services);

    echo "<div class='about-box' style='margin-top:40px;'>";
    echo "<h2>📊 Quick Stats</h2>";
    echo "<p>Total specializations at " . CLINIC_NAME . ": <strong>{$count}</strong></p>";
    echo "<p>Lowest fee: <strong>{$prices[0]} JOD</strong></p>";
    echo "<p>Highest fee: <strong>{$prices[$count-1]} JOD</strong></p>";
    echo "</div>";
    ?>
</div>

<?php include 'footer.php'; ?>
