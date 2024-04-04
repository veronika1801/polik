<div class="grid grid-cols-3 content-start ">
<?php
foreach ($News as $News) {
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">ФИО: $News[title]</p><br>";
    echo "<p class=\"m-4\">ДАТА РОЖДЕНИЯ: $News[description]</p> <br>";
    echo "</div>";
}
?>
</div> 