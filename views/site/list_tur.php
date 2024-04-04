<div class="grid grid-cols-3 content-start ">
<?php

foreach ($Groups as $Groups) {
    echo '<div class="text-white p-20">';
    echo "<p class=\"m-4\">КОЛ-ВО ТУРИСТОВ: $Groups[count]</p><br>";
    echo "<p class=\"m-4\">ПРЕДСТАВИТЕЛЬ КОМПАНИИ: $Groups[representative]</p> <br>";
    echo "<p class=\"m-4\">ОТКУДА: $Groups[route_one]</p> <br>";
    echo "<p class=\"m-4\">КУДА: $Groups[route_two]</p> <br>";
    echo "</div>";
}
?>
</div>
