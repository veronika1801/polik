<form method="post" class="flex flex-col m-20">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
       <select name=patients class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">
       <?php
foreach ($Doctors as $Doctors) {
            $doctor_name = $Doctors["full_name"];
            $doctor_id = $Doctors["id"];
    
            echo " <option value=\"$doctor_id\">$doctor_name</option>";
        }   
        echo" </select>";

        echo" <input class=\" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\" type=\"text\" name=\"causes\" placeholder=\"ПРИЧИНА\">";
        echo" <input class=\" flex gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\" type=\"date\" name=\"date\" placeholder=\"ДАТА ПРИЕМА\">";
        echo" <input class=\"flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\" type=\"number\" name=\"cabinet\" placeholder=\"КАБИНЕТ\">";

        echo" <select name=doctors class=\" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg\">";
            foreach ($Patients as $Patients) {
                $patient_name = $Patients["full_name"];
                $patient_id = $Patients["id"];
    
            echo " <option value=\"$patient_id\">$patient_name</option>";
        }
        ?>
        </select>
    <button class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ЗАПИСАТЬ</button>
</form>