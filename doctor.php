<?php include 'header.php'; ?>

<div class="container">
    <?php
    $doctors = [
        1 => ["name"=>"Dr. Ahmad Al-Rashid", "spec"=>"Cardiology",      "exp"=>12, "available"=>true,  "bio"=>"Dr. Ahmad is a board-certified cardiologist with over 12 years of experience treating heart diseases.", "days"=>"Sun, Mon, Tue, Thu", "fee"=>25],
        2 => ["name"=>"Dr. Sara Nasser",     "spec"=>"Neurology",       "exp"=>8,  "available"=>false, "bio"=>"Dr. Sara specializes in neurological disorders including migraines, epilepsy, and stroke recovery.",    "days"=>"Mon, Wed, Thu",      "fee"=>35],
        3 => ["name"=>"Dr. Khalid Al-Omari", "spec"=>"Orthopedics",     "exp"=>15, "available"=>true,  "bio"=>"Dr. Khalid is an expert in bone and joint conditions, sports injuries, and rehabilitation.",            "days"=>"Sun, Tue, Sat",      "fee"=>30],
        4 => ["name"=>"Dr. Lina Haddad",     "spec"=>"General Medicine","exp"=>6,  "available"=>true,  "bio"=>"Dr. Lina handles general health consultations, routine checkups, and patient referrals.",               "days"=>"All week",           "fee"=>15],
    ];

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

    if (array_key_exists($id, $doctors)) {
        $doc = $doctors[$id];

        if ($doc['available']) {
            $badge = "<span class='badge badge-available'>✅ Available</span>";
        } else {
            $badge = "<span class='badge badge-busy'>🔴 Fully Booked</span>";
        }

        switch ($doc['spec']) {
            case 'Cardiology':       $icon = "🫀"; break;
            case 'Neurology':        $icon = "🧠"; break;
            case 'Orthopedics':      $icon = "🦴"; break;
            case 'General Medicine': $icon = "💊"; break;
            default:                 $icon = "🏥"; break;
        }

        echo "<h1 class='section-title'>{$icon} Doctor Profile</h1>";
        echo "<div class='doctor-box'>";
        echo "<div class='doctor-info'>";
        echo "<h2>{$doc['name']}</h2>";
        echo $badge;
        echo "<p><strong>Specialization:</strong> {$doc['spec']}</p>";
        echo "<p><strong>Experience:</strong> {$doc['exp']} years</p>";
        echo "<p><strong>Available Days:</strong> {$doc['days']}</p>";
        echo "<p><strong>Consultation Fee:</strong> {$doc['fee']} JOD</p>";
        echo "<p style='margin-top:15px;'>{$doc['bio']}</p>";
        echo "</div></div>";
    } else {
        echo "<div class='about-box'><h2>⚠️ Doctor not found.</h2><p>Please select a valid doctor.</p></div>";
    }
    ?>

    <h2 class="section-title" style="margin-top:40px;">All Doctors</h2>
    <table>
        <tr><th>#</th><th>Name</th><th>Specialization</th><th>Fee</th><th>View</th></tr>
        <?php
        foreach ($doctors as $did => $d) {
            $status = $d['available'] ? "✅" : "🔴";
            echo "<tr>";
            echo "<td>{$did}</td>";
            echo "<td>{$status} {$d['name']}</td>";
            echo "<td>{$d['spec']}</td>";
            echo "<td>{$d['fee']} JOD</td>";
            echo "<td><a href='doctor.php?id={$did}' class='btn' style='padding:6px 16px;font-size:0.85rem;'>View</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php include 'footer.php'; ?>
