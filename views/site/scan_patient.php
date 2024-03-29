<div class="grid grid-cols-3 content-start ">
<?php
$deleteRecord = app() -> route -> getUrl('/deleteRecord');

foreach ($Records as $Record) {
    $doctor_id = $Record->doctor["id"];
     $doctorId = $_GET['id'];

    if($doctor_id==$doctorId){

    
    $patient_name = $Record->patient["full_name"];
    $patient_date = $Record->patient["date_of_birth"];
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ПАЦИЕНТ: $patient_name</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $patient_date</p> <br>";
    echo "<p class=\"m-4\">ДАТА ПРИЕМА: $Record[date]</p> <br>";
    echo "<p class=\"m-4\">ПРИЧИНА: $Record[causes]</p> <br>";
    
    echo "<form method=\"DELETE\" action=\"$deleteRecord\" class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">
        <input type=\"hidden\" name=\"id\" value=\"$Record[id]\">
        <button>ОТМЕНИТЬ</button>
        </form>";
    echo "</div>";
    }
  
}
?>
</div> 