<div class="grid grid-cols-3 content-start ">
<?php
foreach ($Records as $Record) {
    $doctor_name = $Record->doctor["full_name"];
    $patient_name = $Record->patient["full_name"];
    $information_cabinet = $Record->information["cabinet"];
    $information_causes = $Record->information["causes"];
    $information_date = $Record->information["date"];

    echo '<div class=" text-white p-20">';
    echo "<p class=\"m-4\">ВРАЧ: $doctor_name</p><br>";
    echo "<p class=\"m-4\">ПАЦИЕНТ: $patient_name </p> <br>";
    echo "<p class=\"m-4\">КАБИНЕТ: $information_cabinet </p> <br>";
    echo "<p class=\"m-4\">ПРИЧИНА: $information_causes </p><br>";
    echo "<p class=\"m-4\">ДАТА ПРИЕМА: $information_date </p><br>";
    echo "<button class=\" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">ОТМЕНИТЬ</button>";
    echo "</div>";
}
?>
</div> 