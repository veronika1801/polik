<div class="grid grid-cols-3 content-start ">
<?php
foreach ($Patients as $Patients) {
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ФИО: $Patients[full_name]</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $Patients[date_of_birth]</p> <br>";
    echo "<a class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\"  href=\"/scan_doctor\">ВРАЧИ</a>";
    echo "</div>";
}
?>
</div>
