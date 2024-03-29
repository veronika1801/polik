<div class="grid grid-cols-3 content-start ">
<?php
$scanDoctor = app() -> route -> getUrl('/scan_doctor');
foreach ($Patients as $Patients) {
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ФИО: $Patients[full_name]</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $Patients[date_of_birth]</p> <br>";
    echo "<form method=\"GET\" action=\"$scanDoctor\" class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">
    <input type=\"hidden\" name=\"id\" value=\"$Patients[id]\">
    <button>ВРАЧИ</button>
    </form>";
    echo "</div>";
}
?>
</div>
