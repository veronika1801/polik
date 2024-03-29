

<div class="grid grid-cols-3 content-start ">
<?php
$deleteRecord = app() -> route -> getUrl('/deleteRecord');

foreach ($Records as $Record) {
    $patient_id = $Record->patient["id"];
     $patientId = $_GET['id'];

    if($patient_id==$patientId){

    
    $doctor_name = $Record->doctor["full_name"];
    $doctor_position = $Record->doctor["position_id"];
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ВРАЧ: $patient_name</p><br>";
    echo "<p class=\"m-4\">КАБИНЕТ: $Record[cabinet]</p> <br>";
    echo "<p class=\"m-4\">ДАТА ПРИЕМА: $Record[date]</p> <br>";
    echo "<p class=\"m-4\">ДОЛЖНОСТЬ ВРАЧА: $doctor_position</p> <br>";
    
    echo "<form method=\"DELETE\" action=\"$deleteRecord\" class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">
        <input type=\"hidden\" name=\"id\" value=\"$Record[id]\">
        <button>ОТМЕНИТЬ</button>
        </form>";
    echo "</div>";
    }
  
}
?>
</div> 