<?php
        echo "<div>";
            echo "<p class=\" m-2 text-white p-20\">Login: $user[login]</p>";
            echo "<p class=\" m-2 text-white p-20\">фио: $user[full_name]</p>";
            echo "<img class=\"m-2 text-white p-20\" src=\"$user[avatar]\" alt=\"avatar\" />";
        echo "</div>";
?>