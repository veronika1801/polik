
<form action="" method="get" class="flex flex-col m-20">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   
    <input class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="search" placeholder="ФИО ПАЦИЕНТА">
    </h2>
    <button class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">Поиск</button>
</form>
<div class="grid grid-cols-3 content-start ">
<?php
foreach ($Patient as $Patient) {
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ФИО: $Patient[full_name]</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $Patient[date_of_birth]</p> <br>";
  
    echo "</div>";
}
?>
</div>