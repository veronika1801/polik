<div class="grid grid-cols-3 content-start ">
<?php
$scanPatient = app() -> route -> getUrl('/scan_patient');
foreach ($Doctors as $Doctors) {
    $position_name = $Doctors->position["title"];
    $specialization_name = $Doctors->specialization["name"];
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ФИО: $Doctors[full_name]</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $Doctors[date_of_birth]</p> <br>";
    echo "<p class=\"m-4\">ДОЛЖНОСТЬ: $position_name</p> <br>";
    echo "<p class=\"m-4\">СПЕЦИАЛИЗАЦИЯ: $specialization_name</p> <br>";
    
    echo "<form method=\"GET\" action=\"$scanPatient\" class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">
    <input type=\"hidden\" name=\"id\" value=\"$Doctors[id]\">
    <button>ПАЦИЕНТЫ</button>
    </form>";
    echo "</div>";
}
?>
</div> 